<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    protected $fillable = ['cargo_id', 'reason'];

    public function cargo()
    {
        return $this->belongsTo(Cargos::class);
    }
}
