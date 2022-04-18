@extends('layouts.main')

@section('container')
  <h1 class="py-6 text-4xl font-light text-center">Posts</h1>
  @foreach ($posts as $post)
    <h2 class="mt-5 text-2xl font-semibold">
      <a class="underline" href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    </h2>
    <h5 class="mb-5 font-medium">by. {{ $post["author"] }}</h5>
    <p class="mb-12 font-light text-justify">{{ $post["body"] }}</p>
  @endforeach 
@endsection
