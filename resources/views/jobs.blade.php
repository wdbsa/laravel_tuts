<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <!-- <h1>Jobs Listing</h1> -->

    <ul>
    @foreach ($jobs as $job)    
        
        <a href="/jobs/{{ $job['id'] }}">
            <li>
                <strong>{{ $job['title'] }}</strong>. Pays {{ $job['salary'] }}
            </li>
        </a>
    @endforeach

    </ul>
</x-layout>