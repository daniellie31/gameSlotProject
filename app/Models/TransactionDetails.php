<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    use HasFactory;

    public function transaction(){
        return $this->hasOne(Transaction::class, 'TransactionId');
    }

    public function game(){
        return $this->belongsTo(Game::class, 'GameId');
    }
}