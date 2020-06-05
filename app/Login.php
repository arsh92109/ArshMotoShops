<?php

namespace App;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{
    use Notifiable;

}
