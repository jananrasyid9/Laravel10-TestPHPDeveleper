<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMAS - TEST PHP DEVELOPER</title>
    <link href="{{ asset('/') }}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center" style="background-color: #00AA13;">
    <div class="container-fluid">
      <a href="/" class="navbar-brand w-50 mr-auto">
        <i class="fa-solid fa-gauge"></i>
        Dashboard
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
          <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-regular fa-user"></i>
                  {{Auth::user()->email}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="{{ route('actionlogout') }}">
                      <i class="fa-solid fa-power-off"></i>
                      Sign out
                    </a>
                  </li>
                </ul>
              </li>
          </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid mt-3 p-4">
    @yield('konten')
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}assets/bootstrap/js/bootstrap.min.js"></script>
</html>