<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratoservicio extends Model
{
    use HasFactory;

    protected $table = 'contratoservicio';
    protected $primaryKey = 'idcontratoservicio';
    protected $fillable = ['direccion', 'fechainicial', 'fechafinal', 'idsolicitudservicio'];

    public $timestamps = false;  

    public function solicitudservicios()
    {
        return $this->belongsTo(Solicitudservicio::class, 'idsolicitudservicio', 'idsolicitudservicio');
    }
    
    public function pqrss()
    {
        return $this->hasMany(Pqrs::class, 'idcontratoservicio', 'idcontratoservicio');
    }
}