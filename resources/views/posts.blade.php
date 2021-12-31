<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Document</title>
</head>
<body>
    <ul>
        @if ($posts->isEmpty())
            There are no posts yet
        @else
        @foreach ($posts as $post)
        <li><a href="posts/post/{{$post->id}}"> Firstname: {{$post->firstname}} </a> </li> 
        <a href="posts/{{$post->id}}"> <input type="submit" value="Delete" ></a>
        @endforeach
        @endif
    </ul>

</br>
    <a href="/">Go Back</a>
</body>
</html>