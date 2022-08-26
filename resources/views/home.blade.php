<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1> Movies:</h1>
    <ul>
        @foreach ($movies as $item)
            <li> <span>Original Title:</span> {{ $item->original_title }}, <span>Title:</span>{{ $item->title }},
                <span>Vote:</span> {{ $item->vote }} </li>
        @endforeach
    </ul>
</body>

</html>
