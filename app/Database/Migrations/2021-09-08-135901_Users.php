<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'				=> 'INT',
				'auto_increment'	=> TRUE
			],
			'avatar_link' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255
			],
			'fullname' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255
			],
			'birthday' => [
				'type'				=> 'DATE'
			],
			'address' => [
				'type'				=> 'TEXT'
			],
			'description' => [
				'type'				=> 'TEXT'
			],
			'contact' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> 20
			],
			'email' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'username' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> 25
			],
			'password' => [
				'type'				=> 'TEXT'
			],
			'mall' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> 50
			],
			'valid_id_link' => [
				'type'				=> 'TEXT'
			],
			'activated' => [
				'type'				=> 'INT',
				'constraint'		=> 11
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp'
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
