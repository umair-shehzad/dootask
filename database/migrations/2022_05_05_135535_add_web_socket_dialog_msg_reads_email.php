<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWebSocketDialogMsgReadsEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_socket_dialog_msg_reads', function (Blueprint $table) {
            if (!Schema::hasColumn('web_socket_dialog_msg_reads', 'email')) {
                $table->boolean('email')->default(0)->after('mention')->nullable()->comment('是否发了邮件');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_socket_dialog_msg_reads', function (Blueprint $table) {
            $table->dropColumn("email");
        });
    }
}
