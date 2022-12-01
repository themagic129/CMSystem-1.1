<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['nombre','apellido','cedula','direccion','telefono','status'];

    //use HasFactory;
}
