<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends \Illuminate\Foundation\Auth\User
{
    use Notifiable;

    protected $table = "users";
    protected $primaryKey = "user_id";
}