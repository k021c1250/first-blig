<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
       
       
    
    </head>
    <body>
        <h1>blog name</h1>
        <p class="edit">[<a href="/posts/{{$post->id}}/edit">edit</a>]</p>
        <form action="/posts/{{$post->id}}" id="form_delete" method="post">
            @csrf
            @method('delete')
            <input type="submit" style="display:none">
            <button class='delete'>[<span onclick="return deletePost(this);">delete</span>]</button>
        </form>
            <div class = 'post'>
                <h2 class = 'title'>{{$post->title}}</h2>
                <p class = 'body'>{{$post->body}}</p>
                 <p class = 'updated_at'>{{$post->updated_at}}</p>
            </div>
            <div class = 'back'>[<a href = '/'>back</a>]</div>
            <script>
                function deletePost(e){
                    'use strict';
                    if(confirm('削除すると復元できません'. \n'本当に削除しますか？')) {
                        document.getElementById('form_delete').submit();
                    }
                }
            </script>
    </body>
</html>
