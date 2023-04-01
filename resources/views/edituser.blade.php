@extends('master')

@section('konten')
  @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.update',$user->id) }}" method="POST">

      @csrf
      @method('PUT')
 
      <div class="possition-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
          <div class="shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 28rem;">
            <h6 class="text-center">Edit User</h6>
            <h3 class="text-center">{{ $user->email }}</h3>
            <hr>

            <div class="mb-3">
                <label>
                    <i class="fa-regular fa-envelope"></i>
                    Email
                </label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email" required="">
            </div>

            <div class="mb-3">
                <label>
                    <i class="fa-regular fa-user"></i>
                    Username
                </label>
                <input type="text" name="username" value="{{ $user->username }}" class="form-control" placeholder="Username" required="">
            </div>
            
            <div class="mb-3">
              <label>
                  <i class="fa-solid fa-mobile-screen"></i>
                  Phone
              </label>
              <input type="phone" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="Phone" required="">
            </div>

            <div class="d-grid gap-2 d-md-block">
              <button type="submit" class="btn btn-success">
                <i class="fa-regular fa-floppy-disk"></i>
                Submit
              </button>
              
              <a href="{{ route("home") }}" class="btn btn-primary" type="button">
                <i class="fa-solid fa-house-user"></i>
                Back
              </a>
          </div>
        </div>
      </div>
 
  </form>
@endsection