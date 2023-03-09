<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    
    protected $table = 'colaborador';
    protected $primaryKey = 'idcolaborador';
    protected $fillable = [
        'nombre',
        'apellido',
    'celular'];

    public $timestamps = false;  

   
    public function contratoservicio()
    {
        return $this->hasMany(Contratoservicio::class, 'idcolaborador', 'idcolaborador');
    }
    
}