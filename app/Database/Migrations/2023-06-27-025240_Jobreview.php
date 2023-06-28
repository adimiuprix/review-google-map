<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jobreview extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'job_id' => [
                'type'           => 'INT',
                'constraint'     => 255,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_whatsapp' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_review' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('job_id', true);
        $this->forge->createTable('tbl_jobdesk');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_jobdesk');
    }
}
