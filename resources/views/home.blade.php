@extends('master')

@section('konten')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <p>Selamat Datang <b>{{Auth::user()->username}}</b>.</p>

  @if ($message = Session::get('success'))
    <script type="text/javascript">
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: '{{ $message}}'
      })
    </script>
  @endif

  <form method="GET" class="d-flex" role="search">
    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ $search }}">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>

  <table class="table table-striped shadow-lg rounded mt-3">
      <thead>
        <tr>
            <th width="50px">No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th width="110px">Action</th>
        </tr>
      </thead>

        <tbody>
          @php
            $no = 1 + (($users->currentPage() - 1) * $users->perPage());
          @endphp

          @foreach ($users as $user)
          <tr>
              <td class="text-center"> {{ $no++ }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              <td>
                  <form id="delete_user" action="{{ route('user.destroy',$user->id) }}" method="POST">
                      <a class="btn btn-primary btn-sm" href="{{ route('user.edit',$user->id) }}">
                        <i class="fa-regular fa-pen-to-square"></i>
                      </a>
     
                      @csrf
                      @method('DELETE')
        
                      <button type="submit" class="btn btn-danger btn-sm" onclick="deleteConfirm(event)">
                        <i class="fa-regular fa-trash-can"></i>
                      </button>
                  </form>
              </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    {!! $users->appends(Request::except('page'))->render() !!}

    <script>
      window.deleteConfirm = function(e) {
        e.preventDefault();
        var form = e.target.form;

        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        })
      }
    </script>
@endsection