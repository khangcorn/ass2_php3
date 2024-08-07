@extends('auth.layout.app')


@if (session('success'))
    <div class="alert alert-success">
        <h1>Hello {{ Auth::user()->name }}</h1>

        <span class="fs-3"> {{ session('success') }} </span>

    </div>
 
      
  @elseif (session('permition'))
  <div class="alert alert-danger">

    <span class="fs-1"> {{ session('permition') }} </span>

</div>
@endif

@section('content')
    <div class="login-content">
        <div class="login-logo">
            <a href="index.html">
                <img class="align-content" src="images/logo.png" alt="">
            </a>
        </div>
        <div class="login-form">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    @error('email')
                    <span class="text-danger"> {{$message}}</span>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    @error('password')
                    <span class="text-danger"> {{$message}}</span>
                        
                    @enderror
                </div>

                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                <div class="register-link m-t-15 text-center">
                    <p>Don't have account ? <a href="{{ route('register') }}"> Sign Up Here</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
