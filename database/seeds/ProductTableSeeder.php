<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
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
             'name' => 'Hugo Boss',
             'slug' => 'hugo-boss',
             'description' => 'La idea de los perfumista era de crear un fragancia
                               que evoque la sensacion de escalofrio pero con un corazon intenso.
                               Una verdadera experiencia para todos los sentidos.
                               Las notas de salvia, tomillo y ginger le confieren el frescor con un toque aromatico,
                                mientras que las notas de canela, vainilla y mirra le donan el matiz oriental. ',
             'extract' => 'Una fragancia oriental fresca.', //Pequeña descripcion que se muestra en el catalogo
             'price'  => 470.00 ,
             'image' =>'https://c.perfumesclub.com/nw/boss_infinite/200a-1.png',
             'visible'=>1,
             'created_at' => new DateTime,
             'updated_at'=> new DateTime,
             'category_id'=>1
            ],
            [
             'name' => 'Perfume 2',
             'slug' => 'perfume-2',
             'description' => 'Colonia especial para hombre ',
             'extract' => 'sondas de maruelo con pomelo',
             'price'  => 500.00 ,
             'image' =>'https://resizer.codigounico.com/resizer/resizer.php?imagen=https://www.codigounico.com/wp-content/uploads/sites/2/2018/04/borrador-automatico-1363.jpg&nuevoalto=600&crop=0',
             'visible'=>1,
             'created_at' => new DateTime,
             'updated_at'=> new DateTime,
             'category_id'=>3
     
     
            ]
     
         
         
         
         );
         Product::insert($data);
         }
     }