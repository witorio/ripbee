<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\DepositLog;
use App\Models\WithdrawLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

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

            // Start a database transaction
            DB::beginTransaction();

            // Find the wallet for the authenticated user
            $wallet = Wallet::where('user_id', Auth::id())->firstOrFail();

            // Generate a unique transaction ID
            $transactionId = uniqid('txn_');

            // Perform the operation based on the type
            if ($request->type === 'deposit') {
                // Update the wallet
                $wallet->update(['worth' => $wallet->worth + $request->amount]);

                // Log the deposit
                DepositLog::create([
                    'user_id' => Auth::id(),
                    'amount' => $request->amount,
                    'currency' => 'EUR', // Default value
                    'source' => 'stripe', // Default value
                    'transaction_id' => $transactionId,
                ]);

                $message = 'Added to wallet successfully.';
            } elseif ($request->type === 'withdraw') {
                // Ensure there are enough funds for withdrawal
                if ($wallet->worth >= $request->amount) {
                    // Update the wallet
                    $wallet->update(['worth' => $wallet->worth - $request->amount]);

                    // Log the withdrawal
                    WithdrawLog::create([
                        'user_id' => Auth::id(),
                        'amount' => $request->amount,
                        'currency' => 'EUR', // Default value
                        'source' => 'stripe', // Default value
                        'transaction_id' => $transactionId,
                    ]);

                    $message = 'Withdrawed from wallet successfully.';
                } else {
                    DB::rollBack();

                    return redirect()->back()->with('error', 'Insufficient funds for withdrawal.');
                }
            }

            // Commit the transaction
            DB::commit();

            // Redirect back with success message
            return redirect()->back()->with('success', $message);
        } catch (\Exception $e) {
            // Rollback the transaction on error
            DB::rollBack();

            // Log the error for debugging
            Log::error('Wallet update error: ' . $e->getMessage());

            // Redirect back with error message
            return redirect()->back()->with('error', 'An error occurred while updating your wallet. Please try again.');
        }
    }

    public function fetchWalletWorth()
    {
        $userId = Auth::id();

        // Use Eloquent to find the wallet record for the authenticated user
        $wallet = Wallet::where('user_id', $userId)->first();

        return response()->json(['worth' => $wallet->worth ?? 0]); // Default to 0 if no wallet is found
    }
}
