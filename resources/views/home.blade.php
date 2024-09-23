<x-layout>
    <x:slot:heading>
        Home Page
    </x:slot:heading>

    @foreach($jobs as $job)
        {{ $title }} . {{ $description }}
    @endforeach

    <h1>Welcome {{ $name }} on the home page</h1>
</x-layout>
