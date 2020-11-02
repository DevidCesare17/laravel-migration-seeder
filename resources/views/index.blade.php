<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        @foreach ($comics as $comic)
            <div class="d_flex_cont">
                <img src="{{$comic->image}}" alt="{{$comic->title}}">
                <h3>{{$comic->title}}</h3>
                <p>{{$comic->original_title}}</p>
                <p>{{$comic->author}}</p>
                <a href="">Show more</a>
            </div>
        @endforeach
    </div>
</body>
</html>