<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;

    protected $table = 'calificaciones';
    protected $primaryKey = 'idcalificacion';
    protected $fillable = ['puntuacioncalificacion', 'fechacalificacion', 'observaciones', 'idcontratoservicio'];

    public $timestamps = false;  

    public function contratoservicios()
    {
        return $this->belongsTo(Contratoservicio::class, 'idcontratoservicio', 'idcontratoservicio');
    }
    
}