<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes Network</title>
</head>
<body>
    <header>
        <nav>
            <h1>Heroes Network</h1>
            <a href="/heroes">Heroes</a>
            <a href="/heroes/create">Create New Hero</a>
        </nav>
    </header>
    
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>