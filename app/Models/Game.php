<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function genres(){
        return $this->belongsTo(Genre::class, 'GenreId', 'id');
    }

    public function transactionDetails(){
        return $this->hasMany(TransactionDetails::class);
    }

    // public function cart(){
    //     return $this->hasMany(Cart::class);
    // }

}
