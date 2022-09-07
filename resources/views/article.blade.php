@extends('base')

@section('content')
<div class="jumbotron"  style="background-color: beige">
    <h2 class="display-7  text-center" text-center>{{$article->title}}</h2>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary my-4  " href="{{route('articles')}}">
            <i class="fa-solid fa-arrow-left"></i>
            Retour
        </a>
    </div>
    <h5 class="text-center my-4 ">{{ $article->subtitle}}</h5>
  </div>
  <div class="container">
    <p class="text-center mt-5"> {{$article->content}}</p>
  </div>
@endsection