<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
       
       
    
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <dev class="content">
            <form action="/posts/{{$post->id}}" method="POST">
                @csrf
                @method('put')
                <dev class="content_title">
                    <h2>title</h2>
                    <input type="text" name='post[title]'  value="{{$post->title}}" />
                    <p class = "title_error" style="color:red">{{$errors->first('post.title')}}</p>
                </dev>
                <dev class="content_body">
                    <h2>body</h2>
                    <input type ='text' name='post[body]' value="{{$post->body}}">
                    <p class = "body_error" style="color:red">{{$errors->first('post.body')}}</p>
                </dev>    
                <input type="submit" value="保存"/>
                
            </form>
            
            
            </div>
    </body>
</html>
