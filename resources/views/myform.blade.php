<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Document</title>
</head>
<body>
    <h1>
        This is myform
    </h1>
    <form action="/postform" method="post">
        @csrf
        <label for="firstname">Firstname</label>
        <input type="text" name= "firstname">

        <label for="lastname">Lastname</label>
        <input type="text" name= "lastname">

        <label for="Age">Age</label>
        <input type="number" name= "age">

        <input type="submit" value="submit">
    </form>

    <a href="/posts">go to posts</a>
</body>
</html>

