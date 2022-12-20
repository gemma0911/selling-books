@if (empty(session()->get('admin')))
    <a href="{{ route('index') }}">Quay lại trang chủ</a>
@else
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            background-color: blue
        }

        .container {
            background-color: white;
            margin: 20px auto;
            padding: 30px 25px;
            max-width: 800px
        }

        .box {
            border: 2px solid #ddd;
            padding: 10px 20px
        }

        .inputbox {
            border: none;
            outline: none
        }

        .h-blue {
            color: #49bff5;
            margin-bottom: 5px;
            padding-left: 4px;
            font-size: 14px;
            font-weight: 500
        }

        ::placeholder {
            font-size: 18px;
            color: #ddd
        }

        .textmuted {
            color: #ddd
        }

        .radio {
            display: inline-block;
            margin-left: 13px;
            cursor: pointer;
            font-weight: 500
        }

        .btn.radio-btn {
            position: relative
        }

        .radio input[type="radio"] {
            display: none
        }

        .radio span {
            height: 20px;
            width: 20px;
            border: 2px solid #ddd;
            border-radius: 50%;
            display: block;
            position: absolute;
            top: 8px;
            left: 0
        }

        .radio span::after {
            content: "";
            height: 10px;
            width: 10px;
            background-color: #49bff5;
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(0);
            border-radius: 50%;
            transition: 300ms ease-in-out 0s
        }

        .radio input[type="radio"]:checked~span::after {
            transform: translate(-50%, -50%) scale(1)
        }

        .outline-none {
            outline: none
        }

        .btn.btn-primary {
            height: 60px;
            font-size: 20px;
            padding: 10px
        }

        @media (max-width:820px) {
            body {
                padding: 20px
            }
        }
    </style>

    <body>
        <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
            @include('template.admin.nav')
            <div class="h-screen flex-grow-1 overflow-y-lg-auto">
                <header class="bg-surface-primary border-bottom pt-6">
                    <div class="container-fluid">
                        <div class="mb-npx">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                    <h1 class="h2 mb-0 ls-tight">Application</h1>
                                </div>
                            </div>
                            <ul class="nav nav-tabs mt-4 overflow-x border-0">
                                <li class="nav-item "> <a href="#" class="nav-link active">All files</a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link font-regular">Shared</a>
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link font-regular">File
                                        requests</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class="container rounded shadow-sm">
                    <form action="{{ route('admin-manageuser-add-post')}}" method="POST">
                        @csrfz
                        <div class="row">
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Tên người dùng</p> <input name="name" class="inputbox"
                                        required="" placeholder="Tên người dùng" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Gmail</p> <input name="email" class="inputbox" required=""
                                        placeholder="Giá sản phẩm" type="gmail">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Mật khẩu</p> <input name="password" class="inputbox"
                                        required="" placeholder="Số lượng sản phẩm" type="password">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Nhập lại mật khẩu</p> <input name="password_confirmation"
                                        class="inputbox" required="" placeholder="Số lượng sản phẩm" type="password">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary form-control text-center" value="submit">Thêm</button>
                        @if (Session::has('R-error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
@endif
