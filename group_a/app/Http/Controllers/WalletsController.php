<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallets;

class WalletsController extends Controller
{
    public function credit(Request $request, $id)
    {
        $wallet = Wallets::findOrFail($id);
        $wallet->balance += $request->amount;
        $wallet->save();
        return response()->json(['message' => 'شارژ شد', 'data' => $wallet]);
    }

    public function debit(Request $request, $id)
    {
        $wallet = Wallets::findOrFail($id);
        if ($wallet->balance < $request->amount) {
            return response()->json(['message' => 'موجودی کافی نیست'], 422);
        }
        $wallet->balance -= $request->amount;
        $wallet->save();
        return response()->json(['message' => 'مبلغ کسر شد', 'data' => $wallet]);
    }
}
