<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Tabung</title>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Anton');
      .nav-link {
        color: #FFFFFF;
      }
      .nav-link:hover {
        color: #F0E2C4;
      }
      .navbar-brand {
        font-family: 'Anton', sans-serif;
        color: #E6D82F;
      }
      .navbar-brand:hover {
        color: #E6D82F;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Hitung Cepat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hitung Volume
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/tabung">Tabung</a>
              <a class="dropdown-item" href="/kerucut">Kerucut</a>
              <a class="dropdown-item" href="/bola">Bola</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <form class="container mt-5"  method="GET" action="/hitungtabung">
      <div class="row justify-content-center">
        <div class="col-6">
          <div class="card border-primary">
            <div class="card-header font-weight-bold text-white bg-primary mb-3">
              <div class="row">
                <div class="col text-left">Hitung Volume Tabung</div>
                <div class="col text-right">
                  <a href="/tabung" class="btn btn-sm btn-dark">
                    <i class="fa fa-backspace"></i> Back 
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-5">
              <div class="form-group row">
                <label for="emailusername" class="col-12 p-0">Jari-Jari</label>
                <input type="number" name="jari2" id="" class="form-control col-12" placeholder="Masukkan Jari-Jari Disini">
              </div>
              <div class="form-group row">
                <label for="text" class="col-12 p-0">Tinggi</label>
                <input type="number" name="tinggi" id="" class="form-control col-12" placeholder="Masukkan Tinggi Disini">
              </div>
              <div class="form-group row">
                <input type="submit" value="submit" name="submit" id="submit" class="btn btn-info">
              </div>
              <div>
                  @if(session('info'))
                    <div class="alert alert-info">
                        {{session('info')}}
                    </div>
                  @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
  </body>
</html>