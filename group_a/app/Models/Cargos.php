<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    protected $fillable = ['name', 'weight'];

    public function reservations()
    {
        return $this->hasMany(Reservations::class);
    }

    public function returns()
    {
        return $this->hasMany(Returns::class);
    }
}
