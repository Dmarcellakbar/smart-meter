@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>

    <p>By. {{ $post->category->name }}</p>
    {!! $post->body !!}
</article>
    
<a href="/market">Back to Market</a>
@endsection