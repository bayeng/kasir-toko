@extends('layouts.auth')

@section('login')

<div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <p class="login-box-msg">Toko Isun</p>

        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group has-feedback @error('email') has-error @enderror ">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group has-feedback @error('password') has-error @enderror ">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>
    
@endsection