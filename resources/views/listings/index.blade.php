<x-layout>

<h1>{{ $heading }}</h1>

@if(count($listings) == 0)
    <p>No listings found</p>
@endif

@foreach($listings as $listing)
    <x-listing-card :listing="$listing" />
@endforeach

</x-layout>