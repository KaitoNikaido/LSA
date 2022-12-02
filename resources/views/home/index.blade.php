<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1>ホーム</h1>
        
        <div class='sounds'>
            @foreach($sounds as $sound)
                <div class='sound'>
                    <a href="/sound/{{ $sound->article_id }}"><h2 class='title'>{{ $sound->article_id }}</h2></a>
                    <img src="{{ $sound->sound_path }}"/>
                </div>
            @endforeach
        </div>
        
        <h1>リスト</h1>
        <a href="/make_lists">リストを作る</a>
        
        <a href="/articles">記事</a>
        <a href="/explore">検索</a>
        <a href="/messages">メッセージ</a>
        <a href="/my_profile">プロフィール</a>
    </body>
</html>