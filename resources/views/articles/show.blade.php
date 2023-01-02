<x-app-layout>
    <x-slot name="header">
        　記事
    </x-slot>
        <h1 class="title">
            {{ $article->title }}
        </h1>
        
        <div class="content">
            <div class="content_article">
                <p class="body">{{ $article->body }}</p>
                @foreach ($article->tags as $tag)
                    <a href="">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
        
            @foreach ($article->files as $file)
                @if ($file->mime_type == '1')
                    <div
                        class="flex flex-col justify-start text-center max-w-sm px-10 py-3 bg-white rounded-lg shadow-lg">
                        <video class="border border-gray-300 shadow-lg" controls src="{{ $file->file_path }}"></video>
                    </div>
                @else
                    <div
                        class="flex flex-col justify-start text-center max-w-sm px-10 py-3 bg-white rounded-lg shadow-lg">
                        <img class="border border-gray-300 shadow-lg" src="{{ $file->file_path }}" />
                    </div>
                @endif
            @endforeach
        
        <div class="footer">
            <a href="/articles">戻る</a>
        </div>
        
        <a href="/">ホーム</a>
        
        <!--コメント-->
        <div class="content">
            <div class="content_comment">
                <h2>コメント</h2>
                
                <!--コメント投稿-->
                <form action="/comments/{{$article->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="body">
                        <textarea name="body" placeholder="good">{{ old('comment.body') }}</textarea>
                        <p class="body__error" style="color:red">{{ $errors->first('comment.body') }}</p>
                    </div>
                    <button class="px-5 py-2 text-white bg-red-500 border-b-4 border-red-700 font-bold hover:bg-opacity-90 hover:b投稿するorder-opacity-90 active:border-opacity-10 active:scale-95 rounded shadow-md">投稿する</button>
                </form>
                
                <!--コメント表示-->
                @foreach ($article->comments as $comment)
                    <!--ここにユーザー名も表示したい-->
                    <p class="body">{{ $comment->body }}</p>
                @endforeach
                
            </div>
        </div>
        
</x-app-layout>
