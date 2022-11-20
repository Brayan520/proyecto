<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hojadevida extends Model
{
    protected $table = 'hojadevida';
    protected $primaryKey = 'idhojadevida';
    protected $fillable = [
        'nombre',
        'apellido',
        'identificacion',
        'correo',
        'direccion',
        'telefono',
        'fechanacimiento',
        'edad',
        'estudios',
        'competencias',
        'experiencialaboral',
        'referencialaboral',
        'referenciapersonal',
        'fecharegistro',
    ];

    public $timestamps = false;

    public function aspirantes()
    {
        return $this->hasMany(Aspirante::class, 'idaspirante', 'idaspirante');
    }
    public function getNombreApellidoAttribute(){
        return $this->nombre.' '.$this->apellido;
    }
}