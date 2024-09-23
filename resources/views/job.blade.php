<x-layout>
    <x:slot:heading>
        Home Page
    </x:slot:heading>

    <strong>{{ $job['id'] }}</strong> {{ $job->title }} {{ $job['salary'] }}

</x-layout>
