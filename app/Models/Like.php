<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\User;

class Like extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(user::class);
    }
    
    public function article(){
        return $this->belongsTo(article::class);
    }
}
