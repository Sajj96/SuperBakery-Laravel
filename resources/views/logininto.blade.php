<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('layouts.head')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Login|Page</title>
</head>
<body>
    <section class="content-section">
        <div class="container">
            <div class="row row-one">
                @if(isset(Auth::user()->email))
                    <script>window.location = "/main/successlogin";</script>
                @endif

                @if( $message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <p>
                            @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </p>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="card-group">
                        <div class="card card-one">
                            <img src="{{asset('images/bakery-basket-bread-bake-512.png')}}" alt="logo" id="logoimage" class="card-img">
                            <div class="card-body">
                                <h5 class="brand-name white-text text-center">
                                <strong>Super Bakery</strong>
                                </h5> 
                            </div>  
                        </div>
                        <div class="card card-two">
                            <div class="card-body px-lg-3 pt-0">
                                <form class="login-form" action={{ url('/main/checklogin')}} method="post">
                                    {{ csrf_field() }}
                                    <div class="md-form">
                                        <input type="email" name="email" id="input-email" class="form-control" required autocomplete="email">
                                        <label for="email">{{__('Email')}}</label>
                                    </div>
                                    <div class="md-form">
                                        <input type="password" name="password" id="input-password" class="form-control" required>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                                <label for="remember" class="form-check-label">Remember me </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-brown btn-rounded btn-block my-4 waves-effect z-depth-0">Sign in</button>
                                    <div>
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <p>Not a member?
                                        <a href="">Register</a>
                                    </p>
                                    <p>or sign in with:</p>
                                    <a type="button" class="btn-floating btn-fb btn-sm" href="">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a type="button" class="btn-floating btn-tw btn-sm" href="">
                                            <i class="fab fa-twitter"></i>
                                    </a>
                                    <a type="button" class="btn-floating btn-li btn-sm" href="">
                                            <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a type="button" class="btn-floating btn-git btn-sm" href="">
                                            <i class="fab fa-instagram"></i>
                                    </a>
                                </form>
                            </div>
                        </div>   
                </div>
            </div>
        </div>
    </section>
@include('layouts.footerscripts') 
</body>
</html>