<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Loop</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Articles</h1>
        
        <a href="/articles/create">記事を投稿する</a>
        
        <div class='articles'>
            @foreach ($articles as $article)
                <div class='article'>
                    <h2 class='title'>
                        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                    </h2>
                    <p class='body'>{{ $article->body}}</p>
                </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{ $articles->links() }}
        </div>
        
        <a href="/">ホーム</a>
        
    </body>
</html>
