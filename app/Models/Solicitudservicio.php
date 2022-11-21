<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitudservicio extends Model
    {
        use HasFactory;
    
        protected $table = 'solicitudservicio';
        protected $primaryKey = 'idsolicitudservicio';
        protected $fillable = ['fechasolicitud', 'idusuario'];
    
        public $timestamps = false;  
    
        public function users()
        {
            return $this->belongsTo(User::class, 'idusuario', 'idusuario');
        }
        
    }