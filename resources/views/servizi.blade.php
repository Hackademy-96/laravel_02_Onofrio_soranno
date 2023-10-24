<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    </head>
  <body>



    {{-- Inizio Navbar --}}
    <nav class="navbar navbar-expand-lg blu " data-bs-theme= "dark">
        <div class="container-fluid  ">
          <a class="navbar-brand" href="#">IL MIO BLOG</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('servizi')}}">I Nostri Servizi</a>
              </li>
       
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('chiSiamo')}}">Chi siamo</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- Fine Navbar --}}

      
      {{-- card --}}
    <div class="container">
      <div class="row">
        @foreach ($articoli as $articolo)
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="{{$articolo['img']}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$articolo['name']}}</h5>
              <p class="card-text">{{substr($articolo['description'], 15)}}</p>
              <p class="card-text">{{$articolo['price']}}</p>
              <a href="{{route('article',['articleName'=> $articolo['name']])}}" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
      {{-- fine card  --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>