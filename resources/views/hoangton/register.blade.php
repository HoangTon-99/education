<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container register">

        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>Chào mừng bạn đến với Education.dev</p>
                <form action="{{ route('login.custom') }}" method="POST">
                <input type="submit" name="" value="Login" /><br />
            </form>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Hirer</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Đăng Kí Thành viên</h3>

                            <form action="{{ route('register.custom') }}" method="post">
                                @csrf
                                <div class="row register-form">

                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder=" Name *" value="" name="name" />
                                            @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password" />
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>

                                    </div>


                                </div>
                            </form>

                        </div>
                        {{-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Đăng kí thành viên</h3>

                            <form action="register" method="post">
                                @csrf()
                                <div class="row register-form">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder=" Name *" value="" name="name" />

                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" name="email" />

                                        </div>
                                        <div class="form-group">
                                            <input type="number" maxlength="10" minlength="10" class="form-control"
                                                placeholder="Phone *" value="" name="phone" />

                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password" required />

                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="confirmpass" />

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Address *" value="" name="address" />

                                        </div>
                                        <button type="submit" class="btn btn-primary">Đăng ký</button>

                                    </div>

                                </div>
                            </form>

                         </div> --}}
                </div>

            </div>
        </div>

    </div>
</body>

</html>
