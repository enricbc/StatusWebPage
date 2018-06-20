<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
    <body>
      <div class="container">
        <h1>StatusWebPageCaptio</h1>
        <div class="row">
          <div class="col-12">
            <div class="row mt-3 mb-5">
              <h1 class="col-12" style="color:#2899c1;">Tickets <i class="fas fa-file-image" style="color:#f9ba14"></i></h1>
              <div class="col-4">
                @if ($data->ctickets==0)
                  <h3>Crear Tickets<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Crear Tickets<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
              <div class="col-4">
                @if ($data->mtickets==0)
                  <h3>Modificar Tickets<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Modificar Tickets<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
              <div class="col-4">
                @if ($data->etickets==0)
                  <h3>Eliminar Tickets<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Eliminar Tickets<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row my-5">
              <h1 class="col-12"style="color:#2899c1;">Anticipos <i class="fas fa-money-bill-alt " style="color:#f9ba14"></i></h1>
              <div class="col-4">
                @if ($data->canticipos==0)
                  <h3>Crear Anticipos<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Crear Anticipos<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
              <div class="col-4">
                @if ($data->manticipos==0)
                  <h3>Modificar Anticipos<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Modificar Anticipos<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
              <div class="col-4">
                @if ($data->eanticipos==0)
                  <h3>Eliminar Anticipos<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Eliminar Anticipos<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row my-5">
              <h1 class="col-12" style="color:#2899c1;">Viajes <i class="fas fa-plane"style="color:#f9ba14"></i></h1>
              <div class="col-4">
                @if ($data->cviajes==0)
                  <h3>Crear Viajes<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Crear Viajes<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
              <div class="col-4">
                @if ($data->mviajes==0)
                  <h3>Modificar Viajes<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Modificar Viajes<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
              <div class="col-4">
                @if ($data->eviajes==0)
                  <h3>Eliminar Viajes<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Eliminar Viajes<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row my-5">
              <h1 class="col-12" style="color:#2899c1;">Informes <i class="fas fa-file-alt"style="color:#f9ba14"></i></h1>
              <div class="col-4">
                @if ($data->cinformes==0)
                  <h3>Crear Informe<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Crear Informe<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
              <div class="col-4">
                @if ($data->minformes==0)
                  <h3>Modificar Informe<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Modificar Informe<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
              <div class="col-4">
                @if ($data->einformes==0)
                  <h3>Eliminar Informe<span class="badge badge-danger">DIE</span></h3>
                @else
                  <h3>Eliminar Informe<span class="badge badge-success">ALIVE</span></h3>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
