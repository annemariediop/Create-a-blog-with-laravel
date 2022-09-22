@extends('base')

@section('content')
<div class="container" >
    <h1 class="text-center my-3">Poster un nouvel article</h1>
    <form method="POST" action="{{route('articles.store')}}">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Titre de votre article">
            </div>
        </div>

        <div class="col-12 mt-3 ">
            <div class="form-group">
                <label for="subtitle">Sous-Titre</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Sous-Titre de votre article">
                <small class="form-text text-muted">Décrivez le contenu de votre article</small>
            </div>
        </div>

        <div class="col-12 mt-3">
            <div class="form-group">
                <label for="content">Contenu</label>
              <textarea name="content" id="tinymce"  class=" form-control w-100"></textarea>
            </div>
            <script>
                tinymce.init({
                  selector: '#tinymce'
                });
              </script>
        </div>
        <div class=" d-flex justify-content-center mt-3">
            <button class="btn btn-primary" type="submit">Poster l'article</button>
        </div>
    </form>
   
      
  </div>
@endsection