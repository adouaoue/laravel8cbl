<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Admin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'Medec';

        protected $fillable = [
            'name', 'prenom', 'tell','adress', 'departement','spesialite', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
