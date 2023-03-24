<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
    {
        use HasFactory;
    
        protected $table = 'servicio';
        protected $primaryKey = 'idservicio';
        protected $fillable = [
            'tiposervicio',
            'precio'];
    
        public $timestamps = false;
    
        public function detalleservicios()
        {
            return $this->hasMany(Detalleservicio::class, 'idservicio', 'idservicio');
        }
    }