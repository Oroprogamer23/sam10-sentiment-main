<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sentiments', function (Blueprint $table) {
            $table->string('topic')->nullable()->after('keywords');
        });
    }

    public function down()
    {
        Schema::table('sentiments', function (Blueprint $table) {
            $table->dropColumn('topic');
        });
    }
};