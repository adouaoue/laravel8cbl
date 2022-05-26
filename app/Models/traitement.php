<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class traitement extends Model
{
    use Notifiable;
    

    protected $fillable = [
        'name_medicament',
    ];

    protected $table='traitement';

}
