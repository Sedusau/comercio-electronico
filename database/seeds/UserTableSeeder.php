<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
	
			[
				'name' 		=> 'Sebas', 
				'last_name' => 'Admin', 
				'email' 	=> 'sebas@gmail.com', 
				'user' 		=> 'sebas',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'Radial 26',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Maria', 
				'last_name' => 'Arcangel', 
				'email' 	=> 'requel@correo.com', 
				'user' 		=> 'prueba2',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> '2do anillo mercado',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
            ],
        );
        User::insert($data); 
    }
}