<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['UserId','TransactionDate'];
    public function transactionDetails(){
        return $this->hasMany(TransactionDetails::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'UserId');
    }
}
