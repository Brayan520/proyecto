<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargo';
    protected $primaryKey = 'idcargo';
    protected $fillable = [
        'nombre',
        'salario'];

    public $timestamps = false;

    public function vacantes()
    {
        return $this->hasMany(Vacante::class, 'idcargo', 'idcargo');
    }
}