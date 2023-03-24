<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected $table = 'vacantes';
    protected $primaryKey = 'idvacante';
    protected $fillable = ['experiencia', 'horario', 'disponibilidad', 'idcargo', 'idperfil'];

    public $timestamps = false;  

    public function cargos()
    {
        return $this->belongsTo(Cargo::class, 'idcargo', 'idcargo');
    }

    public function perfils()
    {
        return $this->belongsTo(Perfil::class, 'idperfil', 'idperfil');
    }

    
}