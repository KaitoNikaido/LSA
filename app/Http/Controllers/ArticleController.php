<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; //15,k3,step3
use App\Models\User;
use Illuminate\Support\Facades\Auth; //user_idを入れるコード
use App\Http\Requests\ArticleRequest;
use Cloudinary;
use App\Models\File;
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
    
    public function store(ArticleRequest $request, Article $article, )
    {
        //dd($request->all());
        $input = $request['post'];
        $article['user_id'] = Auth::id();
        $article->fill($input)->save();
        
        $file=$request->file("file");
        
        if($file != null){
            // 送信されたファイルのmime typeを取得
            $file_mime_type = $request->file("file")->getMimeType();
    
            // 送信されたファイルのmime typeのindexを取得
            $mime_type_index = array_search($file_mime_type, config("const.mime_type"));
            
            //画像のデータベース保存
            $file_url = Cloudinary::uploadFile($request->file('file')->getRealPath())->getSecurePath();
            File::Create([
                "article_id"=>$article->id,
                "file_path"=>$file_url,
                "mime_type"=>$mime_type_index
                ]);
        }
        
        //タグのデータベース保存
        $article->tags()->attach($request['tag_id']);
        
        return redirect('/articles/' . $article->id);
    }
}    
