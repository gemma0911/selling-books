@foreach ($data as $data)
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chi tiết sản phẩm</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <script src="{{ asset('ajax/index.js') }}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
        <link rel="manifest" href="assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">

        <link href="assets/css/theme.css" rel="stylesheet" />
        <script>
            function changeImage(element) {
                var main_prodcut_image = document.getElementById('main_product_image');
                main_prodcut_image.src = element.src;
            }
        </script>
        <script>
            function addtocart($id, $idUser) {
                console.log($id)
                $.ajax({
                    url: '{{ route('add-to-cart') }}',
                    type: "get",
                    dateType: "text",
                    data: {
                        id: $id,
                    },
                });
                if ($idUser) {
                    if ($.ajax) {
                        window.location = "product-detail?idProduct=" + $id;
                    }
                } else {
                    alert('vui lòng đăng nhập')
                    window.location = "{{ route('login.get') }}";
                }
            }
        </script>
    </head>
    <style>
        body {
            background-color: white
        }

        .card {
            border: none;
            overflow: hidden
        }

        .thumbnail_images ul {
            list-style: none;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-top: 10px
        }

        .thumbnail_images ul li {
            margin: 5px;
            padding: 10px;
            border: 2px solid #eee;
            cursor: pointer;
            transition: all 0.5s
        }

        .thumbnail_images ul li:hover {
            border: 2px solid #000
        }

        .main_image {
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #eee;
            height: 400px;
            width: 100%;
            overflow: hidden
        }

        .heart {
            height: 29px;
            width: 29px;
            background-color: #eaeaea;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .content p {
            font-size: 12px
        }

        .ratings span {
            font-size: 14px;
            margin-left: 12px
        }

        .colors {
            margin-top: 5px
        }

        .colors ul {
            list-style: none;
            display: flex;
            padding-left: 0px
        }

        .colors ul li {
            height: 20px;
            width: 20px;
            display: flex;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer
        }

        .colors ul li:nth-child(1) {
            background-color: #6c704d
        }

        .colors ul li:nth-child(2) {
            background-color: #96918b
        }

        .colors ul li:nth-child(3) {
            background-color: #68778e
        }

        .colors ul li:nth-child(4) {
            background-color: #263f55
        }

        .colors ul li:nth-child(5) {
            background-color: black
        }

        .right-side {
            position: relative
        }

        .search-option {
            position: absolute;
            background-color: #000;
            overflow: hidden;
            align-items: center;
            color: #fff;
            width: 200px;
            height: 200px;
            border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
            left: 30%;
            bottom: -250px;
            transition: all 0.5s;
            cursor: pointer
        }

        .search-option .first-search {
            position: absolute;
            top: 20px;
            left: 90px;
            font-size: 20px;
            opacity: 1000
        }

        .search-option .inputs {
            opacity: 0;
            transition: all 0.5s ease;
            transition-delay: 0.5s;
            position: relative
        }

        .search-option .inputs input {
            position: absolute;
            top: 200px;
            left: 30px;
            padding-left: 20px;
            background-color: transparent;
            width: 300px;
            border: none;
            color: #fff;
            border-bottom: 1px solid #eee;
            transition: all 0.5s;
            z-index: 10
        }

        .search-option .inputs input:focus {
            box-shadow: none;
            outline: none;
            z-index: 10
        }

        .search-option:hover {
            border-radius: 0px;
            width: 100%;
            left: 0px
        }

        .search-option:hover .inputs {
            opacity: 1
        }

        .search-option:hover .first-search {
            left: 27px;
            top: 25px;
            font-size: 15px
        }

        .search-option:hover .inputs input {
            top: 20px
        }

        .search-option .share {
            position: absolute;
            right: 20px;
            top: 22px
        }

        .buttons .btn {
            height: 50px;
            width: 150px;
            border-radius: 0px !important
        }
    </style>

    <body>
        <header>
            @include('template.component.header')
        </header>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6 border-end">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="main_image"> <img src="/assets/images/{{ $data->images }}"
                                    id="main_product_image" width="350"> </div>
                            <div class="thumbnail_images">
                                <ul id="thumbnail">
                                    <li><img onclick="changeImage(this)" src="/assets/images/{{ $data->images }}"
                                            width="70"></li>
                                    <li><img onclick="changeImage(this)" src="/assets/images/{{ $data->images }}"
                                            width="70"></li>
                                    <li><img onclick="changeImage(this)" src="/assets/images/{{ $data->images }}"
                                            width="70"></li>
                                    <li><img onclick="changeImage(this)" src="/assets/images/{{ $data->images }}"
                                            width="70"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 right-side">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>{{ $data->name }}</h3> <span class="heart"><i class='bx bx-heart'></i></span>
                            </div>
                            <div class="mt-2 pr-3 content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua</p>
                            </div>
                            <h4>Giá : {{ $data->price }} Vnd</h4>
                            <div class="ratings d-flex flex-row align-items-center">
                                <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i
                                        class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <h4 class="">{{ $data->buy }} Người mua</h4>
                            <div class="buttons d-flex flex-row mt-5 gap-3"> <button class="btn btn-outline-dark">Thanh
                                    toán</button> <button type="submit"
                                    onclick="addtocart({{ $data->idProduct }},{{ session()->get('name') }})"
                                    class="btn btn-dark">Giỏ hàng</button>
                            </div>
                            <br><br>
                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <strong>{{ Session::get('error') }}</strong>
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endforeach
