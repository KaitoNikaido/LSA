<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; //15,k3,step3
use App\Models\User;
use Illuminate\Support\Facades\Auth; //user_idを入れるコード
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index(Article $article)
    {
        return view('articles/index')->with(['articles' => $article->getPaginateByLimit()]);
        //a16
    }
    
    public function show(Article $article)
    {
        return view('articles/show')->with(['article'=>$article]);
    }
    
    public function create()
    {
        return view('articles/create');
    }
    
    public function store(ArticleRequest $request, Article $article, )
    {
        $input = $request['post'];
        $article['user_id'] = Auth::id();
        $article->fill($input)->save();
        return redirect('/articles/' . $article->id);
    }
}    
