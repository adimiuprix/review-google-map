<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Listjob extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'list_id' => [
                'type'           => 'INT',
                'constraint'     => 255,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_job' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi' => [
                'type'       => 'TEXT',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('list_id', true);
        $this->forge->createTable('tbl_joblist');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_joblist');
    }
}