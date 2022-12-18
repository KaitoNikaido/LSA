<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Article_List;
use App\Models\Like;
use App\Models\Image;
use App\Models\Movie;
use App\Models\Sound;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'created_at',
        'updated_at',
        'tag_id',
    ];
    
    public function getPaginateByLimit(int $limit_count = 2)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function index(Article $article)
    {
        return view('articles/index')->with(['articles' => $article->getByLimit()]);
        //a16,a3
    }
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function lists(){
        return $this->belongsToMany(Article_List::class);
    }
    
    public function likes(){
        return $this->hasMany(Like::class);
    }
    
    public function images(){
        return $this->hasMany(Image::class);
    }
    
    public function movies(){
        return $this->hasMany(Movie::class);
    }
    
    public function sounds(){
        return $this->hasMany(Sound::class);
    }
}
