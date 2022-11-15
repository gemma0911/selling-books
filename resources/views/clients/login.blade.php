<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/HeaderCss.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/LoginCss.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        class="css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script>
        const togglePassword = document.getElementById("togglePassword");
        const inputPassword = document.getElementById("password");
        const inputUsername = document.getElementById("username");
        const iconLoading = document.getElementById("loading");

        const onToggleTypePassword = () => {
            togglePassword.classList.toggle("fa-eye-slash");

            if (inputPassword.type === "password") {
                inputPassword.type = "text";
            } else {
                inputPassword.type = "password";
            }
        };

        togglePassword.addEventListener("click", onToggleTypePassword);

        // VALIDATION FORM LOGIN
        const checkUsername = (username) => {
            if (!username) return "Hãy nhập Username !";
            else if (username.length < 5)
                return "Username cần chưa tối thiểu 5 kí tự !";
            else return true;
        };
        const checkPassword = (password) => {
            if (!password) return "Hãy nhập Password !";
            else if (password.length < 5)
                return "Password cần chưa tối thiểu 5 kí tự !";
            else return true;
        };
        const showError = (element, message) => {
            element.style.display = "block";
            element.innerHTML = message;
            element.className = "message__error";
        };

        const hideError = (element) => {
            element.style.display = "none";
        };
        const validation = (username, password) => {
            const errorUsername = document.getElementById("errorUsername");
            const errorPassword = document.getElementById("errorPassword");

            // validation username;
            let messageErrorUsername = checkUsername(username);
            if (typeof messageErrorUsername === "string") {
                showError(errorUsername, messageErrorUsername);
            } else {
                hideError(errorUsername);
            }

            // validation password;
            let messageErrorPassword = checkPassword(password);
            if (typeof messageErrorPassword === "string") {
                showError(errorPassword, messageErrorPassword);
            } else {
                hideError(errorPassword);
            }

            if (messageErrorUsername === true && messageErrorPassword === true) {
                return true;
            }
            return false;
        };
        const login = (username, password) => {
            if (username === "admin" && password === "admin") {
                window.location.assign("./dashboard.html");
                return true;
            }
            return false;
        };

        const showLoading = () => {
            iconLoading.style.display = "flex";
        };
        const hideLoading = () => {
            iconLoading.style.display = "none";
        };
        const onSubmitForm = (form) => {
            const username = form.username.value;
            const password = form.password.value;
            const checkValidation = validation(username, password);
            if (checkValidation === true) {
                showLoading();
                setTimeout(() => {
                    const checkLogin = login(username, password);
                    if (checkLogin === false) {
                        swal(
                            "",
                            "Tên đăng nhập hoặc mật khẩu không chính xác !",
                            "error"
                        );
                    }
                    hideLoading();
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
    }
</style>

<body>
    <div class="loading" id="loading" >
        <img src="https://thumbs.gfycat.com/HighCorruptIsabellineshrike-max-1mb.gif" alt="loading">
    </div>
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
                        <form method="POST" class="form">
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
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
