<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    
    protected $table = 'colaborador';
    protected $primaryKey = 'idcolaborador';
    protected $fillable = ['idcontratoservicio'];

    public $timestamps = false;  

    public function contratoservicios()
    {
        return $this->belongsTo(Contratoservicio::class, 'idcontratoservicio', 'idcontratoservicio');
    }
    
}