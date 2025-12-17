<x-layout>
    <h1>Create a New Hero</h1>
    <form action="/heroes" method="POST">
        @csrf
        <label for="name">Hero Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create Hero</button>
    </form>

</x-layout>    