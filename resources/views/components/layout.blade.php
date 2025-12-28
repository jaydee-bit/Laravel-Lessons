<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes Network</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <nav>
            <h1 class="">Heroes Network</h1>
            <!--this is how you use route names in blade files -->
            <a href="{{ route('heroes.index') }}" class="hover:text-red-600">Heroes</a>
            <a href="{{ route('heroes.create') }}" class="hover:text-red-600">Create New Hero</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>

</html>
