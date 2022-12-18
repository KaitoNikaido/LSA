<x-app-layout>
    <x-slot name="header">
        　ホーム
    </x-slot>
        
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
        
</x-app-layout>
