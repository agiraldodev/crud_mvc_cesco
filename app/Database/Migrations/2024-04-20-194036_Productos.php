<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
{
    public function up()
    {
        // Definir las columnas de la tabla
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'precio' => [
                'type' => 'INT',
                'constraint' => 20
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 50
            ]
        ]);

        // Poner clave primaria
        $this->forge->addKey('id', true);

        // Crear la tabla productos
        $this->forge->createTable('productos');
    }

    public function down()
    {
        // Eliminar la tabla si se requiere
        $this->forge->dropTable('productos');
    }
}
