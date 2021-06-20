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
                <input type="submit" name="" value="Đăng nhập" /><br />
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
                <form action="" method="post" role="form">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Đăng Kí Thành viên</h3>
                            <div class="row register-form">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" Name *" value="" name="name" />

                                            @if ($errors->has('name'))
                                            {{ $errors->first('name') }}
                                            @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" name="password" />
                                        @if ($errors->has('password'))
                                        {{ $errors->first('password') }}
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *"value="" name="confirmpass" />
                                        @if ($errors->has('confirmpass'))
                                        {{ $errors->first('confirmpass') }}
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" checked name="sex">
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female" name="sex">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
                                        @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" minlength="10" maxlength="10"
                                            class="form-control" placeholder="Your Phone *" value="" name="phone" />
                                            @if ($errors->has('phone'))
                                            {{ $errors->first('phone') }}
                                            @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Your Address *" value="" name="address" />
                                        @if ($errors->has('address'))
                                        {{ $errors->first('address') }}
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Đăng kí thành viên</h3>
                            <div class="row register-form">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" Name *" value="" name="name" />
                                        @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" value="" name="email" />
                                        @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" maxlength="10" minlength="10" class="form-control"
                                            placeholder="Phone *" value="" name="phone" />
                                        @if ($errors->has('phone'))
                                        {{ $errors->first('phone') }}
                                        @endif
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" name="password" required />
                                        @if ($errors->has('password'))
                                        {{ $errors->first('password') }}
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="confirmpass" />
                                        @if ($errors->has('confirmpass'))
                                        {{ $errors->first('confirmpass') }}
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="`Address *" value="" name="address" />
                                        @if ($errors->has('address'))
                                        {{ $errors->first('address') }}
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Đăng ký</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
