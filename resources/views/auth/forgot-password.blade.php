@extends('auth.layout.app')

@section('content')
    <div class="login-content">
        <div class="login-logo">
            <a href="index.html">
                <img class="align-content" src="images/logo.png" alt="">
            </a>
        </div>
        <div class="login-form">
            <form>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>

            </form>
        </div>
    </div>
@endsection
