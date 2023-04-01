<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Test PHP</title>
    <link href="{{ asset('/') }}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="possition-relative">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="p-3 shadow mb-5 bg-body-tertiary rounded" style="width: 28rem;">
                    <h2 class="text-center">Register</h3>
                    <hr>
        
                    @if(session('message'))
                    <div class="alert alert-success mt-3">
                        {{session('message')}}
                    </div>
                    @endif
        
                    <form action="{{route('actionregister')}}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label>
                                <i class="fa-regular fa-envelope"></i>
                                Email
                            </label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        </div>
                        
                        <div class="mb-3">
                            <label>
                                <i class="fa-regular fa-user"></i>
                                Username
                            </label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required="">
                        </div>
        
                        <div class="mb-3">
                            <label>
                                <i class="fa-solid fa-mobile-screen"></i>
                                Phone
                            </label>
                            <input type="phone" name="phone" class="form-control" placeholder="Phone" required="">
                        </div>
        
                        <div class="mb-3">
                            <label>
                                <i class="fa-solid fa-lock"></i>
                                Password
                            </label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fa-solid fa-fingerprint"></i>
                                Sign up
                            </button>
                            <hr>
                            <p class="text-center mb-1">Sudah punya akun ?</p>
                            <a href="{{route('login')}}" class="btn btn-primary btn-block">Sign in disini</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>
</html>