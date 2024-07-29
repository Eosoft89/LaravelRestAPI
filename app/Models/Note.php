<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $guarded = []; //Esto es un atajo. Si el array de los elementos protegidos está vacío quiere decir que todos los elementos son cumplimentables

    protected $hidden = ['created_at', 'updated_at']; // En este caso, ocultar los campos hará que no se muestren en la respuesta de la API
}
