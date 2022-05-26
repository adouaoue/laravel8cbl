<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class patient extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'patient';
        
        protected $table='patients';


        protected $fillable = [
            'name', 'prenom', 'tell','adress', 'date_ne','num_dossier','Age', 'Gender','Family_Status', 'Job', 'email', 'password','admins_id'
        ];
     

        protected $hidden = [
            'password', 'remember_token',
        ];
 
}
