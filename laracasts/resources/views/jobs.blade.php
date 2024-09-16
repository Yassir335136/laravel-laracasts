<x-layout>
    <x:slot:heading>
        Home Page
    </x:slot:heading>

   @foreach($jobs as $job)
       <li>
           <a href="/jobs/}">
               <strong>{{ $job['title'] }}</strong> {{ $job['description'] }}
           </a>
       </li>
   @endforeach

</x-layout>
