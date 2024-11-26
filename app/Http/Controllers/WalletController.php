<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function deposit()
    {
        return Inertia::render('Transfer/Deposit');
    }
    public function withdraw()
    {
        return Inertia::render('Transfer/Withdraw');
    }

    public function update(Request $request)
    {
        try {
            // Validate the input
            $request->validate([
                'type' => 'required|string|in:deposit,withdraw',
                'amount' => 'required|integer|min:1',
            ]);
    
            // Find the wallet for the authenticated user
            $wallet = Wallet::where('user_id', Auth::id())->firstOrFail();
    
            // Perform the operation based on the type
            if ($request->type === 'deposit') {
                $wallet->update(['worth' => $wallet->worth + $request->amount]);
                $message = 'Added to wallet successfully.';
            } elseif ($request->type === 'withdraw') {
                // Ensure there are enough funds for withdrawal
                if ($wallet->worth >= $request->amount) {
                    $wallet->update(['worth' => $wallet->worth - $request->amount]);
                    $message = 'Withdrawed from Wallet successfully.';
                } else {
                    return redirect()->back()->with('error', 'Insufficient funds for withdrawal.');
                }
            }
    
            // Redirect back with success message
            return redirect()->back()->with('success', $message);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Wallet update error: ' . $e->getMessage());
    
            // Redirect back with error message
            return redirect()->back()->with('error', 'An error occurred while updating your wallet. Please try again.');
        }
    }
    
}
