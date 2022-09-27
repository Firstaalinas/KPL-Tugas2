<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('css/register.css') }}">

  <title>Sign Up</title>
</head>

<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">Register</h1>

        <form method="post" action="/register">
            @csrf
        <input type="hidden" name="jam_login" value="<?= date('Y-m-d H:i') ?>">
          <div class="form-group mt-3">
            <label for="name">Username</label>
            <input type="text" class="form-control @error('username')is-invalid @enderror" id="name" name="username" placeholder="Masukkan Username"autocomplete="off" >
            @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
          </div>
          <div class="form-group mt-3">
            <label for="name">Email</label>
            <input type="text" class="form-control @error('email')is-invalid @enderror" id="name" name="email" placeholder="Masukkan Alamat Email" autocomplete="off">
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group mt-3">
            <label for="name">No Handphone</label>
            <input type="number" class="form-control @error('nomer')is-invalid @enderror" id="name" name="nomer" placeholder="Masukkan No Handphone"pattern="(\+62|62|0)8[1-9][0-9]{6,12}$" autocomplete="off">
            @error('nomer')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group mt-3">
            <label for="name">Password</label>
            <input type="password" class="form-control @error('password')is-invalid @enderror" id="name" name="password" placeholder="Masukkan Password">
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="row form-group mt-3">
            <label class="text-dark mb-2"><i class="bi bi-calendar"></i> Tanggal</label>
            <div class="col-sm-12">
                    <input type="datetime-local" class="form-control" placeholder="Enter Date">
            </div>
        </div>
        <script type="text/javascript">
          $(function() {
              $('#datepicker').datepicker();
          });
        </script>
          <div class="d-grid mt-3">
            <button name="submit" type="submit" class="btn btn-primary btn-login">SIGN UP</button>
          </div>

          <div class="mt-1 text-center" style="font-size: 15px;">
            <label>Already have an Account? <a href="/" class="link" style="color: red;">Login Now</a></label>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>