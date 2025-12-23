<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes Network</title>
    @vite('resources/css/app.css')
</head>

<body class="text-center px-8 py-12">
    <h1>Welcome to Laravel Practice</h1>
    <p>Click the button below to view the list of ninjas</p>
    <br>
    <a href="/heroes" class="btn border-2 border-gray-400 hover:border-red-600">
        Find Heroes!
    </a>
</body>

</html>
