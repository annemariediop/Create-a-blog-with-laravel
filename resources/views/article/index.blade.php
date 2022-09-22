@extends('base')

@section('content')
<div class="container" >
    
    <h1 class="text-center my-5">Articles</h1>
    <div class="d-flex justify-content-center">
        <a href="{{route('articles.create')}}" class="btn btn-info  my-2"> <i class="fas fa-plus"></i> Ajouter un article</a>
    </div>
    <table class="table table-hover my-2">
        <thead>
          <tr  class="table-active">
            <th scope="col">ID</th>
            <th scope="col"> Titre</th>
            <th scope="col">Créé le</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->formatDate()}}</td>
                <td class="d-flex">
                    <a href="#" class="btn btn-warning mx-3">Editer</a>
                    <a href="#" class="btn btn-danger mx-3">Supprimer</a>
                    
                </td>
              </tr>
            @endforeach
     
        </tbody>
      </table>
      <div class="d-flex justify-content-center mt-5">
        {{$articles->links('vendor.pagination.custom')}}
    </div>
  </div>
@endsection