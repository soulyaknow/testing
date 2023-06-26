@props(['listing'])

<x-card class="p-10 bg-black">
<h2>
    <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
</h2>
<p>
    {{$listing['description']}}
</p>
<x-listing-tags :tagsCsv="$listing->tags" />

</x-card>