@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Cool!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ups!</strong> {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin">
            <form action='/login' method="post">
              @csrf
              <h1 class="h3 mb-3 fw-normal">Please Login</h1>
          
              <div class="form-floating">
                <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="floatingInput" placeholder="name@example.com" autofocus required>
                <label for="floatingInput">Email address</label>
                @error('email')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
          

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              
            </form>
            <small class="d-block text-center mt-3">
                Not Registred? <a href="/register">Register Now!</a>
            </small>
            <p class="mt-5 mb-3 text-muted">&copy; Dimas M, 2024</p>
        </main>
    </div>
</div>


  

@endsection