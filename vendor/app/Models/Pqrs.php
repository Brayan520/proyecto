<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
        use HasFactory;
    
        protected $table = 'pqrs';
        protected $primaryKey = 'idpqrs';
        protected $fillable = ['descripcion', 'fecha', 'idtipopqrs', 'idestado', 'idcontratoservicio', 'idrespuesta'];
    
        public $timestamps = false;  
    
        public function tipopqrss()
        {
            return $this->belongsTo(Tipopqrs::class, 'idtipopqrs', 'idtipopqrs');
        }

        public function estados()
        {
            return $this->belongsTo(Estado::class, 'idestado', 'idestado');
        }

        public function contratoservicios()
        {
            return $this->belongsTo(Contratoservicio::class, 'idcontratoservicio', 'idcontratoservicio');
        }

        public function respuestas()
        {
            return $this->belongsTo(Respuesta::class, 'idrespuesta', 'idrespuesta');
        }
        
    }