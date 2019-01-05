<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function($table){
<<<<<<< HEAD
            $table->string('cover_image');
=======
            $table->string('cover_image')->default('none');
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function($table){
            $table->dropColumn('cover_image');
        });
    }
}
