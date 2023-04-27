<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $guarded = []; // todos los campos son asignables (opuesto a $fillable)

    protected $hidden = ['created_at', 'updated_at']; // estos campos no se mostrarán en la respuesta JSON
}
