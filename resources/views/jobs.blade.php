<x-layout>
    <x:slot:heading>
        Home Page
    </x:slot:heading>

   @foreach($jobs as $job)
       <li>
           <a href="/jobs/{{ $job['id'] }}">
               <strong>{{ $job['title'] }}</strong> {{ $job['salary'] }}
           </a>
       </li>
   @endforeach

</x-layout>
