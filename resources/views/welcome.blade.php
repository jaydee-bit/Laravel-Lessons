<x-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <h1>Welcome to Laravel Practice</h1>
    <p>Click the button below to view the list of ninjas</p>
    <a href="/heroes" class="btn">
        Find Heroes!
    </a>
</x-layout>
