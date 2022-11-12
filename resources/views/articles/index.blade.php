<!DOCTYPE html>
<x-app-layout>
    <z-slot name="header">
        (ヘッダー名)
    </z-slot>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <title>Loop</title>
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            </head>
            <body>
                <h1>Article Name</h1>
                <div class='articles'>
                    @foreach ($articles as $article)
                        <div class='article'>
                            <h2 class='title'>{{ $article->title }}</h2>
                            <p class='body'>{{ $article->body}}</p>
                        </div>
                    @endforeach
                </div>
            </body>
            Auth::user()
            {{ Auth::user() }}
            Auth::user()->name
            {{ Auth::user()->name }}
        </html>
</x-app-layout>
