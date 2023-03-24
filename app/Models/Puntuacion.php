<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntuacion extends Model
{
    use HasFactory;

    protected $table = 'puntuacion';
    protected $primaryKey = 'idpuntuacion';
    protected $fillable = [
        'puntuacioncalificacion', 
        'fechapuntuacion', 
        'observaciones', 
'identrevista'
];

    public $timestamps = false;  

    public function entrevistas()
    {
        return $this->belongsTo(Entrevista::class, 'identrevista', 'identrevista');
    }
}