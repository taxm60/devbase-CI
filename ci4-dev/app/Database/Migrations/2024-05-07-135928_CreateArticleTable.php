<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticleTable extends Migration
{
    public function up()
    {
        $col_ary = array(
            "id"       => ["type"=> "INT", "null"=>false, "auto_increment"=>true],
            "title"    => ["type"=> "VARCHAR", "constraint" => 255 ],
            "content"  => ["type"=> "VARCHAR", "constraint" => 300 , "null"=>true],
        );

        $this->forge->addField($col_ary);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("article");
    }

    

    public function down()
    {
        $this->forge->dropTable("article");
    }
}
