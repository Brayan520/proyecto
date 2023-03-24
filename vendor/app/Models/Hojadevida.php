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
        'tipoidentificacion',
        'identificacion',
        'correo',
        'direccion',
        'telefono',
        'celular',
        'ciudad',
        'estudios',
        'barrio',
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
?>