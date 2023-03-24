<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleservicio extends Model
{
    use HasFactory;

    protected $table = 'detalleservicio';
    protected $primaryKey = 'iddetalleservicio';
    protected $fillable = ['cantidadpersonal', 'total', 'idsolicitudservicio', 'idservicio'];

    public $timestamps = false;  

    public function solicitudservicios()
    {
        return $this->belongsTo(Solicitudservicio::class, 'idsolicitudservicio', 'idsolicitudservicio');
    }

    public function servicios()
    {
        return $this->belongsTo(Servicio::class, 'idservicio', 'idservicio');
    }

    
}