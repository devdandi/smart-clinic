<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('img/logo/logo.png') }}" rel="icon">
  <title>Smart-Clinic - Masuk</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Smart-Clinic Masuk</h1>
                  </div>
                  <form class="user" method="post" action="{{ route('login') }}">
                    @csrf
        
                    <div style="color: red;" class="form-group">
                    @error('email')
                      <p>{{ $message }}</p>
                    @enderror
                      <input type="email" class="form-control" id="exampleInputEmail" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingat Saya
                          </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-block">Masuk</button>
                    </div>

                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="{{ route('register') }}">Buat Akun!</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>

</html>