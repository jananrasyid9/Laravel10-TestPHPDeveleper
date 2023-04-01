<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login - Test PHP</title>
        <link href="{{ asset('/') }}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}assets/fontawesome/css/all.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container"><br>
            <div class="possition-relative">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="p-3 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 28rem;">
                        <h5 class="text-center">
                            <p class="card-text text-center">
                                <i class="fa-regular fa-user"></i>
                                Test PHP Developer
                            </p>
                        </h5>
                        <hr class="mt-1 mb-1">
                        
                        @if(session('error'))
                            <div class="alert alert-danger mt-3">
                                <b>Opps!</b> {{session('error')}}
                            </div>
                        @endif
        
                        <form action="{{ route('actionlogin') }}" method="post">
                        @csrf
                            <div class="mt-3 mb-3">
                                <label>
                                    <i class="fa-regular fa-envelope"></i>
                                    Email
                                </label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="mb-3">
                                <label>
                                    <i class="fa-solid fa-lock"></i>
                                    Password
                                </label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>
        
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success btn-block mt-2">
                                    <i class="fa-solid fa-lock-open"></i>
                                    Sign in
                                </button>

                                <hr>

                                <p class="text-center mb-1">Belum punya akun ?</p>
                                <a href="{{route('register')}}" class="btn btn-primary center btn-block">
                                    Register disini
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>