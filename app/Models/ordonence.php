<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ordonence extends Model
{
    use Notifiable;

    
    protected $table='ordocontrollers';

    protected $fillable = [
        'name_medicament','dose','t_usage',
    ];

}

