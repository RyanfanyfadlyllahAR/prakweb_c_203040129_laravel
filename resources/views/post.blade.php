
@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $post->title }}</h1>

<p>By.Ryan fany fadlyllah Ar in <a href="/categories/">{{$post->category->name}}</a> </p>

{!! $post->body !!}

<a href="/posts">Back to Posts</a>
@endsection