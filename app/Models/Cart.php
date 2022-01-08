<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['GameId', 'UserId', 'Qty'];

    public function user(){
        return $this->belongsTo(User::class, 'UserId');
    }

    public function game(){
        return $this->belongsTo(Game::class, 'GameId');
    }

    
}