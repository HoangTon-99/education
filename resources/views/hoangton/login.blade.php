<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <section class="login-block">
        <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login </h2>

        <form class="login-form" action="{{ route('login.custom') }}" method="POST">
                    @csrf
      <div class="form-group">
        <label for="exampleInputEmail1" class="text-uppercase">Email</label>
        <input type="text" class="form-control" placeholder="Email" name="email" required autofocus>
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>


        <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="remember">
          <small>Remember Me</small>
        </label>
        <button type="submit" class="btn btn-login float-right">Submit</button>
      </div>

    </form>
    <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Education.dev</a></div>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2 class="">B???n mu???n tr??? th??nh l???p tr??nh vi??n ?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
      </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>B???n mu???n tr??? th??nh l???p tr??nh vi??n ?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>B???n mu???n tr??? th??nh l???p tr??nh vi??n ?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
      </div>
                </div>

            </div>
        </div>
    </div>
    </section>
</body>
</html>
