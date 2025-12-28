<x-layout>
    <h2>Currently Available Heroes</h2>
    <ul>
        @foreach ($heroes as $hero)
            <!--blade directive for looping through heroes-->
            <li>
                <x-card href="/heroes/{{ $hero->id }}"
                    :highlight="$hero->skill > 80"><!--using card component and passing href attribute-->
                    <!-- :highlight binds the boolean true to the highlight attribute-->
                    <h3>{{ $hero->name }}</h3>
                </x-card>

            </li>
        @endforeach
    </ul>
</x-layout>
