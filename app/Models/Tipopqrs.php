<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipopqrs extends Model
{
        use HasFactory;
    
        protected $table = 'tipopqrs';
        protected $primaryKey = 'idtipopqrs';
        protected $fillable = ['tipo'];
    
        public $timestamps = false;
    
        public function pqrss()
        {
            return $this->hasMany(Pqrs::class, 'idtipopqrs', 'idtipopqrs');
        }
    }