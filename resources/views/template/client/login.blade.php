<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productly | Design Agency Landing Page UI</title>

    <link rel="stylesheet" href="{{ asset('assets/css/LoginCss.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        class="css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/css/theme.css" rel="stylesheet" />
    <script>
        const onSubmitForm = (form) => {
            if (true) {
                document.getElementById("loading").style.display = "flex";
                setTimeout(() => {
                    const hideLoading = () => {
                        iconLoading.style.display = "none";
                    };
                }, 1000);
            }
        };
    </script>
</head>
<style>
    .loading {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: none;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.479);
    }

    .loading img {
        width: 7rem;
        margin-bottom: 600px
    }
</style>

<body>
    <div class="loading" id="loading">
        <img src="https://thumbs.gfycat.com/HighCorruptIsabellineshrike-max-1mb.gif" alt="loading">
    </div>
    <main class="main" id="top">
        @include('template.component.header')

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
                            <form method="POST" class="form" onsubmit="onSubmitForm(this)">
                                @csrf
                                <div class="formsix-pos">
                                    <div class="form-group i-email">
                                        <input type="text" name="email" class="form-control" id="email2"
                                            placeholder="Email Address *">
                                    </div>
                                </div>
                                <div class="formsix-e">
                                    <div class="form-group i-password">
                                        <input type="password" name="password" class="form-control" id="password2"
                                            placeholder="Password *">
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
                                <p id="errorPassword"></p>
                            </form>
                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <strong>{{ Session::get('error') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('template.component.footer')

        <section class="text-center py-0">

            <div class="container">
                <div class="container border-top py-3">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-auto mb-1 mb-md-0">
                            <p class="mb-0">&copy; 2022 Your Company Inc </p>
                        </div>
                        <div class="col-12 col-md-auto">
                            <p class="mb-0">
                                Made with<span class="fas fa-heart mx-1 text-danger"> </span>by <a
                                    class="text-decoration-none ms-1" href="https://themewagon.com/"
                                    target="_blank">ThemeWagon</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <iframe class="rounded" style="width:100%;height:500px;"
                        src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="vendors/fontawesome/all.min.js"></script>
        <script src="assets/js/theme.js"></script>

        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
            rel="stylesheet">
</body>

</html>
