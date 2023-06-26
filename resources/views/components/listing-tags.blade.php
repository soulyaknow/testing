@props(['tagsCsv'])

@php
   $tags = explode(',', $tagsCsv); 
@endphp

@foreach ($tags as $tag)
    <a href="/?tag={{$tag}}">{{$tag}}</a>
@endforeach