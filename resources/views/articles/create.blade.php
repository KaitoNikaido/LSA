<x-app-layout>
    <x-slot name="header">
        　記事の作成
    </x-slot>
        <form action="/articles" method="POST" enctype="multipart/form-data">
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
            
            
            <input type="file" name="file" value="{{ old('post.file') }}"/>
                
            
            <div class="tag">
                <h2>Tag</h2>
                <select name="tag_id">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <button class="px-5 py-2 text-white bg-red-500 border-b-4 border-red-700 font-bold hover:bg-opacity-90 hover:b投稿するorder-opacity-90 active:border-opacity-10 active:scale-95 rounded shadow-md">投稿する</button>
            
        </form>
        
        <div class="footer">
            <a href="/articles">戻る</a>
        </div>
</x-app-layout>