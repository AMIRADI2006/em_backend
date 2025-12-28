<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    protected $fillable = ['name', 'capacity'];

    public function wagons()
    {
        return $this->hasMany(Wagons::class);
    }
}
