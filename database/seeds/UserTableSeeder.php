<?php

use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com','yetki'=>'admin', 'password' => '$2y$10$relofO5ZbkaFOjmHrHFyTujW.Hy/c9GsZIY7LQbac/.krR3NQFTDm', 'remember_token' => '',],

        ];
		//Sifre: 123456

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
