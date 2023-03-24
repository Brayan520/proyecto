<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfil';
    protected $primaryKey = 'idperfil';
    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function vacantes()
    {
        return $this->hasMany(Vacante::class, 'idperfil', 'idperfil');
    }
}