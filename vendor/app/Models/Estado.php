<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estado';
    protected $primaryKey = 'idestado';
    protected $fillable = ['tipo'];

    public $timestamps = false;

    public function pqrss()
    {
        return $this->hasMany(Pqrs::class, 'idestado', 'idestado');
    }
}