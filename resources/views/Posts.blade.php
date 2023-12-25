<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @extends('master')
        @section('content')
        <div class="container">
        <h1>Posts</h1>

        @if(count($posts) > 0)
            <ul>
                @foreach($posts as $post)
                    <li>
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->description }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No posts available</p>
        @endif
    </div>
@endsection

</body>
</html>