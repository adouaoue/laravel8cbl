<?php

namespace App\Models;

use App\Models\patient;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Admin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'Medec';

        protected $fillable = [
            'patient_id','name', 'prenom', 'tell','adress', 'departement','spesialite', 'email', 'password',
        ];
        public function user()
        {
            return $this->belongsTo(patient::class);
        }

        protected $hidden = [
            'password', 'remember_token',
        ];
}
