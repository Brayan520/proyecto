<?php

namespace Database\Seeders;

use App\Models\Browser;
use Illuminate\Database\Seeder;

class BrowserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array('nombre' => 'Chrome', 'porcentaje' => 61.4),
            array('nombre' => 'IE Explorer', 'porcentaje' => 11.8),
            array('nombre' => 'Firefox', 'porcentaje' => 10.9),
            array('nombre' => 'Edge', 'porcentaje' => 4.7),
            array('nombre' => 'Safari', 'porcentaje' => 4.2),
            array('nombre' => 'Opera', 'porcentaje' => 1.6),
        ];
        Browser::insert($data);
    }
}
