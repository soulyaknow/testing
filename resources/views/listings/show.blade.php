<x-layout>
@include('partials._text')

<h2>{{$listing['title']}}</h2>
<p>{{$listing['description']}}</p>

</x-layout>
<a href="/listings/{{$listing->id}}/edit">Edit</a>
<form method="POST" action="/listings/{{$listing->id}}">
    @csrf
    @method('DELETE')
    <button>Delete</button>
</form>
