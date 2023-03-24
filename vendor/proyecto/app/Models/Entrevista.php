<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
        use HasFactory;
    
        protected $table = 'entrevista';
        protected $primaryKey = 'identrevista';
        protected $fillable = [
            'nombreentrevistador', 
            'tipoentrevista', 
            'lugar', 
            'fecha', 
            'hora',
    'idaspirante'
];
    
        public $timestamps = false;  
    
        public function aspirantes()
        {
            return $this->belongsTo(Aspirante::class, 'idaspirante', 'idaspirante');
        }
    }