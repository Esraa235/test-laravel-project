<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @extends('layouts.app')
        @section('title', 'Home Page')
        @section('content')
        @if($post)
        
            @foreach($posts as $post)
                {{ $post['title'] }}
                {{ $post['description'] }}
            @endforeach
        
    @else
        <p> no thing to post</p>
    @endif
        
        @endsection
  
</body>
</html>