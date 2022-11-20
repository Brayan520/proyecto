<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    use HasFactory;

    protected $table = 'aspirante';
    protected $primaryKey = 'idaspirante';
    protected $fillable = ['idhojadevida', 'idpostulacion'];

    public $timestamps = false;  

    public function hojadevidas()
    {
        return $this->belongsTo(Hojadevida::class, 'idhojadevida', 'idhojadevida');
    }

    public function postulaciones()
    {
        return $this->belongsTo(Postulacion::class, 'idpostulacion', 'idpostulacion');
    }

    
}