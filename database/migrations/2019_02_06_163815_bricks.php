<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bricks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bricks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

        });

        CREATE TABLE `bricks` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  -- `animals_id` int(11) unsigned NOT NULL,
   `bodyparts_id` int(11) unsigned NOT NULL,
   `file` mediumblob default null,
   `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
   `created_by` int(11), -- varchar(50) DEFAULT NULL,
   `updated_at` datetime DEFAULT NULL,
   `updated_by` int(11), -- varchar(50) DEFAULT NULL,
   PRIMARY KEY (`id`),
--  KEY `fk_bricks_animals` (`animals_id`),
  -- CONSTRAINT `fk_bricks_animals` FOREIGN KEY (`animals_id`)
REFERENCES `animals` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
   KEY `fk_bricks_bodyparts` (`bodyparts_id`),
   CONSTRAINT `fk_bricks_bodyparts` FOREIGN KEY (`bodyparts_id`)
REFERENCES `bodyparts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
