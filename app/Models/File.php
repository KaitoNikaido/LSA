<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    public function article(){
        return $this->belongsTo(Article::class);
    }
    
    protected $fillable = [
        'article_id',
        'file_path',
        'mime_type'
    ];
}
