<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
       
       
    
    </head>
    <body>
        <h1>blog name</h1>
            <form action="/posts" method="POST">
                {{csrf_field() }}
                <dev class="title">
                    <h2>title</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" />
                </dev>
                <dev class="body">
                    <h2>body</h2>
                    <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。"></textarea>
                    </textarea>
                </dev>    
                <input type="submit" value="保存"/>
                
            </form>
            
            <div class = 'back'>[<a href = '/'>back</a>]
            </div>
    </body>
</html>
