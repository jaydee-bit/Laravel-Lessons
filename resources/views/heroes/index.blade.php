<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes Network | Home</title>
</head>
<body>
    <h1>{{$greeting}}</h1>
    <h2>Currently Available Heroes</h2>
    <ul>
        <li>
            <a href="/heroes/{{$heroes[0]['id']}}">
                {{$heroes[0]['name']}} 
            </a>
        </li>
        <li>
            <a href="/heroes/{{$heroes[1]['id']}}">
                {{$heroes[1]['name']}} 
            </a>
        </li>
        <li>
            <a href="/heroes/{{$heroes[2]['id']}}">
                {{$heroes[2]['name']}}  
            </a>
        </li>
    </ul>

</body>
</html>