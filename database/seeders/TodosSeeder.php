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
            'nombre' => 'Brayan',
            'apellido' => 'Ramirez',
            'direccion' => 'calle 5',
            'genero' => 'femenino',
            'tipo' => 'CC',
            'identificacion' => '102938271',
            'celular' => '304243990',
            'email' => 'ramirez@gmail.com',
            'password' => Hash::make('scenario'),
            'fullaccess' => 'yes',
            'codigo' => 'adm1',
        ]);
        $user1=User::create([
            'nombre' => 'Brayan',
            'apellido' => 'Parra',
            'direccion' => 'calle 9',
            'genero' => 'masculino',
            'tipo' => 'CC',
            'identificacion' => '101948677',
            'celular' => '3222537909',
            'email' => 'brayan@gmail.com',
            'password' => Hash::make('scenario'),
            'fullaccess' => 'no',
            'codigo' => 'user1',
        ]);
        $user1=User::create([
            'nombre' => 'Yineth',
            'apellido' => 'Parra',
            'direccion' => 'calle 9',
            'genero' => 'femenino',
            'tipo' => 'CC',
            'identificacion' => '111548677',
            'celular' => '3122137909',
            'email' => 'yineth@gmail.com',
            'password' => Hash::make('scenario'),
            'fullaccess' => 'no',
            'codigo' => 'user2',
        ]);
    }
}
