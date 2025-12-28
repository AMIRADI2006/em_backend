<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = ['wagon_id', 'cargo_id'];

    public function wagon()
    {
        return $this->belongsTo(Wagons::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargos::class);
    }
}
