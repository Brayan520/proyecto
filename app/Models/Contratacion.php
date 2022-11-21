<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratacion extends Model
{
    use HasFactory;

    protected $table = 'contratacion';
    protected $primaryKey = 'idcontratacion';
    protected $fillable = ['terminolaboral', 'fechainicial', 'fechafinal', 'sueldo', 'idcolaborador', 'idaspirante'];

    public $timestamps = false;  

    public function colaboradores()
    {
        return $this->belongsTo(Colaborador::class, 'idcolaborador', 'idcolaborador');
    }

    public function aspirantes()
    {
        return $this->belongsTo(Aspirante::class, 'idaspirante', 'idaspirante');
    }

    
}