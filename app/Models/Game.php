<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function genre(){
        return $this->belongsTo(Genre::class, 'GenreId');
    }

    public function transactionDetails(){
        return $this->hasMany(TransactionDetails::class);
    }
}
