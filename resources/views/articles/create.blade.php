<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        
        <form action="/articles" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="投稿する"/>
        </form>
        
        <form action="/cloudinary" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <button>画像をアップロード</button>
        </form>
        
        <div class="footer">
            <a href="/articles">戻る</a>
        </div>
    </body>
</html>