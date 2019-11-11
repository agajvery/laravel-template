<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableWorkspaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE TABLE `workspaces` ( 
                `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
                `name` VARCHAR(256) NOT NULL , 
                `create_ts` INT UNSIGNED NOT NULL ,
                `last_ts` INT UNSIGNED NOT NULL , 
                PRIMARY KEY (`id`)
            ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workspaces');
    }
}
