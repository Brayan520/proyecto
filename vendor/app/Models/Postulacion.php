<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    use HasFactory;

    protected $table = 'postulaciones';
    protected $primaryKey = 'idpostulacion';
    protected $fillable = ['fechapostulacion', 'idvacante'];

    public $timestamps = false;  

    public function vacantes()
    {
        return $this->belongsTo(Vacante::class, 'idvacante', 'idvacante');
    }
    
}