<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use Illuminate\Http\Request;

class CargosController extends Controller
{
    public function store(Request $request)
    {
        $cargo = Cargos::create($request->only(['name', 'weight']));
        return response()->json(['message' => 'کالا ثبت شد', 'data' => $cargo]);
    }
}
