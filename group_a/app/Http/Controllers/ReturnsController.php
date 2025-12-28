<?php

namespace App\Http\Controllers;

use App\Models\Returns;
use Illuminate\Http\Request;

class ReturnsController extends Controller
{
    public function store(Request $request)
    {
        $return = Returns::create($request->only(['cargo_id', 'reason']));
        return response()->json(['message' => 'مرجوعی ثبت شد', 'data' => $return]);
    }
}
