<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">

  <title>LOGIN</title>
</head>

<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        
        <form method="post" action="/login"> 
          @csrf
          
          <div class="form-signin m-auto">
              {{-- Alert --}}
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              {{-- End Alert --}}

              {{-- Alert --}}
              @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              {{-- End Alert --}}

          <h1 class="card-title text-center mt-4">LOGIN</h1>
            <div class="form-group mt-4">
              <label for="name">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Masukkan Email" autocomplete="off">
            </div>
            <div class="form-group mt-4">
              <label for="name">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
            </div>
  
            <div class="d-grid mt-3">
              <button name="submit" type="submit" class="btn btn-primary btn-login">LOGIN</button>
            </div>
          </div>

          <div class="mt-3 text-center" style="font-size: 15px;">
            <label>Don't have account ? <a href="/register" class="link" style="color: red;">Register Now</a></label>
          </div>
          <div class="mt-1 text-center" style="font-size: 15px;">
            <label>Forgot Password ? <a href="/register" class="link" style="color: red;">Reset Password</a></label>
          </div>

        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>