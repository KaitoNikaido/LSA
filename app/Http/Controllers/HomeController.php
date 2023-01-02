<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Sound;
use App\Models\User;
use Illuminate\Support\Facades\Auth; //user_idを入れるコード
use App\Http\Requests\ArticleRequest;
use Cloudinary;
use App\Models\File;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }
}
