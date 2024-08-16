<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWebSocketDialogMsgsReplyNum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    $isAdd = false;
    Schema::table('web_socket_dialog_msgs', function (Blueprint $table) use (&$isAdd) {
        if (!Schema::hasColumn('web_socket_dialog_msgs', 'reply_num')) {
            $isAdd = true;
            $table->bigInteger('reply_num')->nullable()->default(0)->after('send')->comment('有多少条回复');
        }
    });

    if ($isAdd) {
        $distinctReplyIds = \App\Models\WebSocketDialogMsg::select('reply_id')
            ->where('reply_id', '>', 0)
            ->distinct()
            ->get()
            ->pluck('reply_id')
            ->toArray();

        foreach (array_chunk($distinctReplyIds, 100) as $chunk) {
            foreach ($chunk as $replyId) {
                \App\Models\WebSocketDialogMsg::whereId($replyId)->update([
                    'reply_num' => \App\Models\WebSocketDialogMsg::whereReplyId($replyId)->count()
                ]);
            }
        }
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_socket_dialog_msgs', function (Blueprint $table) {
            $table->dropColumn("reply_num");
        });
    }
}
