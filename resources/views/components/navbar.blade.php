<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav d-flex align-items-center mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("homepage")}}">Homepage</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("card libri")}}">collezione libri</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("inserimento libri")}}">inserimento libri</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("card musei")}}">collezione musei</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("inserimento musei")}}">inserimento musei</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("film_upload")}}">inserimento film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("film_collection")}}">collezione film </a>
        </li>
      </ul>
    </div>
  </div>
</nav>