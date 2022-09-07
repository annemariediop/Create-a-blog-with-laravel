<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <a class="navbar-brand" href="/">
        <i class="fa-solid fa-house-user"></i>
        Accueil
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('articles')}}">Articles </a>
        </li>
      </ul>

      <ul class=" navbar-nav  " style="margin-left: auto; ">
        @if (Auth::user())
        <li class="nav-item "  >
          <form action="/logout" method="POST" >
            @csrf
          <button class="btn btn-primary" type="submit">Déconnexion</button>
          </form>
        </li>
        @else
        <li class="nav-item ">
          <a class="nav-link btn-primary" href="/login">Se connecter </a>
        </li>
        @endif
      </ul>
     
    </div>
  </nav>