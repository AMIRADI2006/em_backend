<?php

namespace App\Http\Controllers;

use App\Models\Wagons;
use Illuminate\Http\Request;

class WagonsController extends Controller
{
    public function store(Request $request)
    {
        $wagon = Wagons::create($request->only(['train_id', 'wagon_number', 'capacity']));
        return response()->json(['message' => 'واگن ثبت شد', 'data' => $wagon]);
    }
}
