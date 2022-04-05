<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class patient extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'Medec';
        protected $table='patient';


        protected $fillable = [
            'name', 'prenom', 'tell','adress', 'date_naissance','num_dossier', 'email', 'password',
        ];
   

        protected $hidden = [
            'password', 'remember_token',
        ];
}
