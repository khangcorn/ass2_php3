@extends('auth.layout.app')

@section('content')
    <div class="login-content">
        <div class="login-logo">
            <a href="index.html">
                <img class="align-content" src="images/logo.png" alt="">
            </a>
        </div>
        <div class="login-form">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" class="form-control" placeholder="User Name">
                     @error('name')
                     <span class="text-danger"> {{$message}}</span>
                         
                     @enderror

                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email"  name="email" class="form-control" placeholder="Email">
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

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                    @error('password_confirmation')
                    <span class="text-danger"> {{$message}}</span>
                        
                    @enderror
               
                </div>
               
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                <div class="register-link m-t-15 text-center">
                    <p>Already have account ? <a href="{{route('login')}}"> Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
