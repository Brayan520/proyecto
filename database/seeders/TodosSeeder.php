<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'nombre' => 'admin Paula',
            'apellido' => 'Rodriguez',
            'direccion' => 'calle 5',
            'genero' => 'femenino',
            'tipo' => 'CC',
            'identificacion' => '102938271',
            'celular' => '304243990',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'fullaccess' => 'yes',
            'codigo' => 'adm1',
        ]);
        $user1=User::create([
            'nombre' => 'usuario Marcos',
            'apellido' => 'Morales',
            'direccion' => 'calle 9',
            'genero' => 'masculino',
            'tipo' => 'CC',
            'identificacion' => '101948677',
            'celular' => '3222537909',
            'email' => 'marcos@gmail.com',
            'password' => Hash::make('marcos'),
            'fullaccess' => 'no',
            'codigo' => 'casa1',
        ]);
    }
}
