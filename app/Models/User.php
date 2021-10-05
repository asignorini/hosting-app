<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

// Requisitos de para una clase de Eloquent para usuarios para usar el servicio de autenticación de
// Laravel:
// 1. Heredar de la clase Illuminate\Foundation\Auth\User
// 2. Implementar el trait Illuminate\Notifications\Notifiable
// Una vez que tenemos la tabla y el modelo, tenemos que configurar la autenticación, yendo al archivo
// de [config/auth.php].
class Usuario extends \Illuminate\Foundation\Auth\User
{
//    use HasFactory;
    use Notifiable;

    protected $table = "users";
    protected $primaryKey = "user_id";
}