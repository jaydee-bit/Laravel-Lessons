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
       @foreach ($heroes as $hero) <!--blade directive for looping through heroes-->
            <li>
                <p>{{$hero['name']}}</p>
                <a href="/heroes/{{$hero['id']}}">View Details</a> <!--link to hero details page-->
            </li>
           
       @endforeach
    </ul>

</body>
</html>