<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wagons extends Model
{
    protected $fillable = ['train_id', 'wagon_number', 'capacity'];

    public function train()
    {
        return $this->belongsTo(Trains::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservations::class);
    }
}
