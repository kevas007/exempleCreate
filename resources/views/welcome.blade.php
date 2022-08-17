<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="create" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter your name">
    <textarea name="body" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
</form>
@foreach ($posts as $post)
<p>

    {{ $post->title }}

</p>
@endforeach
</body>
</html>
