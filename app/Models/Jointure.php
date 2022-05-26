<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Jointure extends Authenticatable
    {
        use Notifiable;


        protected $fillable = [
            'num', 'date_consultation', 'Description','Jointure', 'ordonnance',
        ];

        protected $table='jointure';


      
}
