<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $comment = new Comment();
        $comment->body = $request->input('body');
        $comment->article_id = $article->id;
        $comment->user_id = \Auth::user()->id;
        $comment->save();
        
        return redirect('/articles/' . $article->id);
    }
}
