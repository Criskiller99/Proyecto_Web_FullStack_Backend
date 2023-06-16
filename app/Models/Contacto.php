<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $table = "solicitudes";
    protected $primaryKey = "id";
    protected $fillable = ["Nombre","Apellidos","Tipo_de_identificacion","Numero_identificacion","Telefono","Profesion","Email","Asunto","Descripcion"];   
}
