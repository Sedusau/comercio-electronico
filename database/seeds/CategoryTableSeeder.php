<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
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
             'name' => 'Perfume Hombre',
             'slug' => 'perfume-hombre',
             'description' => 'Colonia especial para hombre en tiempos de lluvia',
             'color'=>'#e0060a'
            ],
            [
             'name' => 'Perfume Mujer',
             'slug' => 'perfume-mujer',
             'description' => 'Colonia especial para mujer muy dulce',
             'color'=>'#009b07'
            ],
            [
             'nome' => 'Perfume Niño',
             'slug' => 'perfume-ninho',
             'description' => 'Colonia especial para mujer muy dulce',
             'color'=>'#023e8c'
            ]
         
         );
         Category::insert($data);
    }
}