<?php

namespace App\migrations;

use App\core\App;

class m0001_ini
{
    public function up()
    {
        $insert = App::$app->db->pdo;
        $SQL = '
        CREATE TABLE IF NOT EXISTS users
         (
         id INT(11) unsigned NOT NULL AUTO_INCREMENT,
         uniqid INT(255),
         firstname VARCHAR(255),
         lastname VARCHAR(255),
         status INT(255),
         email VARCHAR(255),
         PRIMARY KEY (id),
         create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
         )
         ENGINE=INNODB;';
        $insert->exec($SQL);
    }

    public function down()
    {
        $insert = App::$app->db->pdo;
        $SQL = 'DROP TABLE users';
        $insert->exec($SQL);
    }
}
