<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; //15,k3,step3

class ArticleControlloer extends Controller
{
    public function index(Article $article)
    {
        return $article->get();
    }
}
