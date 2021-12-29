@extends('layouts.main')

@section('container')



<div class="b-example-divider"></div>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-9 fw-bold lh-1 mb-3">Login ke Website mooo</h1>
      <p class="col-lg-10 fs-4">aokwoawkawoakowk kok suka ngejar yg ga pasti sih anjing?</p>
    </div>

    <div class="col-md-10 mx-auto col-lg-5">
    <form method="POST" action="{{ route('login') }}" class="p-4 p-md-5 border rounded-3 bg-light">
        @csrf
        <h3 class="text-center">Form Login</h3>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
          @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

          <label for="floatingInput">Email address</label>
        </div>


        <div class="form-floating mb-3">{{ __('Password') }}
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
          @error('password') is-invalid @enderror name="password" required autocomplete="current-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

      </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit"> {{ __('Login') }}</button>
        <hr class="my-4">
        <small class="text-muted">Belum Memiliki Akun? <a href="/register">Daftar</a></small>
      </form>
    </div>
  </div>
</div>
@endsection
