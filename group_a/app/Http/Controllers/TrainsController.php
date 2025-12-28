<?php

namespace App\Http\Controllers;

use App\Models\Trains;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function store(Request $request)
    {
        $train = Trains::create($request->only(['name', 'capacity']));
        return response()->json(['message' => 'قطار ثبت شد', 'data' => $train]);
    }
}
