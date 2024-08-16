<?php

namespace App\Http\Middleware;

@error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

use App\Module\Doo;
use Closure;

class WebApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        global $_A;
        $_A = [];

        Doo::load();

        // Parse the 'encrypt' header and provide default values if missing
        $encrypt = Doo::pgpParseStr($request->header('encrypt'));

        // Ensure 'client_type' and other keys have default values if missing
        $clientType = $encrypt['client_type'] ?? '';
        $clientKey = $encrypt['client_key'] ?? '';
        $encryptId = $encrypt['encrypt_id'] ?? '';

        if ($request->isMethod('post')) {
            $version = $request->header('version');
            if ($version && version_compare($version, '0.25.48', '<')) {
                // Handle old version compatibility with php://input
                parse_str($request->getContent(), $content);
                if ($content) {
                    $request->merge($content);
                }
            } elseif ($clientType === 'pgp' && $content = $request->input('encrypted')) {
                // New version: decrypt the content
                $content = Doo::pgpDecryptApi($content, $encryptId);
                if ($content) {
                    $request->merge($content);
                }
            }
        }

        // Force HTTPS if required
        $APP_SCHEME = env('APP_SCHEME', 'auto');
        if (in_array(strtolower($APP_SCHEME), ['https', 'on', 'ssl', '1', 'true', 'yes'], true)) {
            $request->setTrustedProxies([$request->getClientIp()], $request::HEADER_X_FORWARDED_PROTO);
        }

        $response = $next($request);

        // Encrypt response content if required
        if ($clientType === 'pgp' && $content = $response->getContent()) {
            $content = Doo::pgpEncryptApi($content, $clientKey);
            if ($content) {
                $response->setContent(json_encode(['encrypted' => $content]));
            }
        }

        return $response;
    }
}
