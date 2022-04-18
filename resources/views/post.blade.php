@extends('layouts.main')

@section('container')
  <h1 class="py-6 text-4xl font-light text-center">{{ $post["title"] }}</h1>
  <h2 class="my-5 text-2xl font-medium">by. {{ $post["author"] }}</h2>
    <p class="mb-12 font-light text-justify">{{ $post["body"] }}</p>
    <div class="flex justify-end w-full">
      <a href="/posts" class="text-xl font-semibold underline">Back</a>
    </div>
@endsection