<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Servicio de asesoria en administración de personal',
            'slug' => 'Asesoria',
            'details' => 'Asesoria laboral',
            'price' => 100000,
            'shipping_cost' => 0,
            'description' => 'Servicio de asesoria en administración de personal',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'administrarpersonal.jpg'
        ]);

        Product::create([
            'name' => 'Servicio de afiliación a seguridad social',
            'slug' => 'Afiliación',
            'details' => 'Afiliación',
            'price' => 120000,
            'shipping_cost' => 0,
            'description' => 'Servicio de afiliación a seguridad social',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'afiliacionseguridadsocial.jpg'
        ]);

        Product::create([
            'name' => 'Aseo en apoyos de casas y oficinas',
            'slug' => 'Aseo',
            'details' => 'Aseo general',
            'price' => 80000,
            'shipping_cost' => 0,
            'description' => 'Aseo en apoyos de casas y oficinas',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'apoyoencasayoficina.jpg'
        ]);

        Product::create([
            'name' => 'Servicio de aseo en dormitorios',
            'slug' => 'Aseo cuartos',
            'details' => 'Aseo en dormitorios',
            'price' => 80000,
            'shipping_cost' => 0,
            'description' => 'Servicio de aseo en dormitorios',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'aseoendormitorios.jpg'
        ]);

        Product::create([
            'name' => 'Servicio de cuidado a adulto mayor',
            'slug' => 'Cuidado',
            'details' => 'Cuidado a adulto mayor',
            'price' => 80000,
            'shipping_cost' => 0,
            'description' => 'Servicio de cuidado a adulto mayor',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'cuidadoadultomayor.jpg'
        ]);

        Product::create([
            'name' => 'Servicio de cuidado de niños',
            'slug' => 'Cuidado nniños',
            'details' => 'Cuidado de niños',
            'price' => 80000,
            'shipping_cost' => 0,
            'description' => 'Servicio de cuidado de niños',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'cuidadodeniños.jpg'
        ]);

        Product::create([
            'name' => 'Servicio de limpieza de baños',
            'slug' => 'Aseo baños',
            'details' => 'Aseo de baños',
            'price' => 80000,
            'shipping_cost' => 0,
            'description' => 'Servicio de limpieza de baños',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'limpiezadebaños.jpg'
        ]);

        Product::create([
            'name' => 'Servicio de planchado de ropa',
            'slug' => 'Planchado',
            'details' => 'Planchado de ropa',
            'price' => 80000,
            'shipping_cost' => 0,
            'description' => 'Servicio de planchado de ropa',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'planchadoderopa.jpg'
        ]);

        Product::create([
            'name' => 'Servicio de preparación de alimento',
            'slug' => 'Preparación',
            'details' => 'Preparación de alimentos',
            'price' => 80000,
            'shipping_cost' => 0,
            'description' => 'Servicio de preparación de alimento',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'preparaciondealimentos.jpg'
        ]);

    }
}
