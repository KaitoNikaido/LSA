<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Article_List;

class Tag extends Model
{
    use HasFactory;
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    
    public function lists(){
        return $this->belongsToMany(Article_List::class);
    }
}
