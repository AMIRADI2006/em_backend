<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function store(Request $request)
    {
        $reservation = Reservations::create($request->only(['wagon_id', 'cargo_id']));
        return response()->json(['message' => 'رزرو ثبت شد', 'data' => $reservation]);
    }
}
