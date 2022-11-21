<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\User;
use App\Models\Tag;

class Article_List extends Model
{
    use HasFactory;
    
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
