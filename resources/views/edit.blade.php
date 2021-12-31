<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>This is Edit Post Form</h1>
<form action="/posts/editpost/{{$post->id}}" method="get">
        @csrf
        <label for="firstname">Firstname</label>
        <input type="text" name= "firstname" value="{{$post->firstname}}">

        <label for="lastname">Lastname</label>
        <input type="text" name= "lastname" value="{{$post->lastname}}">

        <label for="Age">Age</label>
        <input type="number" name= "age" value="{{$post->age}}">

        <input type="submit" value="submit">
    </form>

</body>
</html>