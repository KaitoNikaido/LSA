<x-app-layout>
    <x-slot name="header">
        　記事一覧
    </x-slot>
        
        <a href="/articles/create">記事を投稿する</a>
        
        <div class='articles'>
            @foreach ($articles as $article)
                <div class='article'>
                    <h2 class='title'>
                        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                    </h2>
                    <p class='body'>{{ $article->body}}</p>
                    @if($article->tags)
                        @foreach($article->tags as $tag)
                            <a>{{ $tag->name }}</a>
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{ $articles->links() }}
        </div>
        
        <a href="/">ホーム</a>
        
</x-app-layout>
