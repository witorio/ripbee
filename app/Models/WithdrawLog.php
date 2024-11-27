<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawLog extends Model
{
    use HasFactory;

    // Define the table name (optional, Laravel infers this automatically)
    protected $table = 'withdraw_log';

    // Specify which attributes can be mass-assigned
    protected $fillable = [
        'user_id',
        'amount',
        'currency',
        'source',
        'transaction_id',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
