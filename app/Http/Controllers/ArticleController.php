<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; //15,k3,step3
use App\Models\User;
use Illuminate\Support\Facades\Auth; //user_idを入れるコード
use App\Http\Requests\ArticleRequest;
use Cloudinary;
use App\Models\Image;
use App\Models\Tag;

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
    
    public function create(Tag $tag)
    {
        return view('articles/create')->with(['tags' => $tag->get()]);
    }
    
    public function store(Request $request, Article $article, )
    {
        //dd(Image::all());
        $input = $request['post'];
        $article['user_id'] = Auth::id();
        $article->fill($input)->save();
        
        //画像のデータベース保存
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        Image::Create([
            "article_id"=>$article->id,
            "image_path"=>$image_url
            ]);
        //タグのデータベース保存
        $article->tags()->attach($request['tag_id']);
        
        return redirect('/articles/' . $article->id);
    }
}    
