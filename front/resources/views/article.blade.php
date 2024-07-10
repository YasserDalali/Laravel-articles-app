
@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div style="min-height: 500px">
    <img class="rounded w-100 animate__animated animate__fadeIn animate__delay-3s" src="https://picsum.photos/820/312?grayscale" alt="" srcset="">
</div>
<article>
    <div class="my-4 animate__animated animate__fadeInUp mt-5">
<h1 class="display-1">{{$article->title}}</h1>
    <hr>
</div>
<p class="pe-4 h5 animate__animated animate__fadeInUp animate__delay-1s">{{$article->body}}</p>
</article>
@endsection