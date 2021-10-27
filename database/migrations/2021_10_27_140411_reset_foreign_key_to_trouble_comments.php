<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResetForeignKeyToTroubleComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trouble_comments', function (Blueprint $table) {
            $table->foreign('trouble_id')->references('id')->on('troubles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trouble_comments', function (Blueprint $table) {
            $table->dropForeign('trouble_comments_trouble_id_foreign');
        });
    }
}
