
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('assets/clients/css/HeaderCss.css') }}">
        <link rel="stylesheet" href="{{asset('assets/clients/css/LoginCss.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            @include('components.header')
        </header>
        <div class="login_form_wrapper">
            <div class="">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="login_wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <a href="#" class="btn btn-primary facebook"> <span>Login with Facebook</span>
                                        <i class="fa fa-facebook"></i> </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <a href="#" class="btn btn-primary google-plus"> Login with Google <i
                                            class="fa fa-google-plus"></i> </a>
                                </div>
                            </div>
                            <h2>or</h2>
                            <form method="POST" action="{{ route('login.post') }}">
                                @csrf
                                <div class="formsix-pos">
                                    <div class="form-group i-email">
                                        <input type="email" name="email" class="form-control" required=""
                                            id="email2" placeholder="Email Address *">
                                    </div>
                                </div>
                                <div class="formsix-e">
                                    <div class="form-group i-password">
                                        <input type="password" name="password" class="form-control" required=""
                                            id="password2" placeholder="Password *">
                                    </div>
                                </div>
                                <div class="login_remember_box">
                                    <a href="#" class="forget_password">
                                        Forgot Password
                                    </a>
                                </div>
                                <div class="login_btn_wrapper">
                                    <button type="submit" class="btn btn-primary login_btn"> Login </button>
                                </div>
                                <div class="login_message">
                                    <p>Don&rsquo;t have an account ? <a href="#"> Sign up </a> </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.footer')
        <script src="{{asset('assets/clients/js/HeaderJs.js') }}"></script>
    </body>
    </html>
