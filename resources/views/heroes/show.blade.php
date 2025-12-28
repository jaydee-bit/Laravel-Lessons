<x-layout>
    <h1>Hero Details Page</h1>
    <h2>ID: {{ $hero->id }}</h2>
    <h2>Hero Name: {{ $hero->name }}</h2>
    <h3>Quirk: {{ $hero->quirk }}</h3>
    <h3>Skill Level: {{ $hero->skill }}</h3>
    <h3>Created At: {{ $hero->created_at->format('M d, Y') }}</h3>
</x-layout>
