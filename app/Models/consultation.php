<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class consultation extends Model
{
    use Notifiable;

    protected $guard = 'Medec';
    
    protected $table='consultation';


    protected $fillable = [
     'nom', 'num_dossier','heure', 'date','stauts','id_patient'

    ];



}
