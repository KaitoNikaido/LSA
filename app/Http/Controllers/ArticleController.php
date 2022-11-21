<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; //15,k3,step3

class ArticleController extends Controller
{
    public function index(Article $article)
    {
        return view('articles/index')->with(['articles' => $article->get()]);
        //a16
        
        //Like::find(1)
        
        return $article->get();
    }
}
