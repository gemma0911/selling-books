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
        <script>
            function addproduct() {
                console.log(document.getElementById('detail').options[document.getElementById('detail')
                        .selectedIndex]
                    .value)
                $.ajax({
                    url: '{{ route('admin-manageproduct-add-post') }}',
                    type: "get",
                    dateType: "text",
                    data: {
                        name: document.getElementById('name').value,
                        price: document.getElementById('price').value,
                        category: document.getElementById('category').options[document.getElementById('category')
                                .selectedIndex]
                            .value,
                        sale: document.getElementById('sale').options[document.getElementById('sale').selectedIndex]
                            .value,
                        detail: document.getElementById('detail').options[document.getElementById('detail')
                                .selectedIndex]
                            .value,
                        number: document.getElementById('number').value,
                        images: document.getElementById('images').value,
                        content: document.getElementById('content').value,
                    },
                });
                if ($.ajax) {
                    alert('them thanh cong');
                }
            }
        </script>
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
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Tên sản phẩm</p> <input id="name" class="inputbox"
                                        required="" placeholder="Tên sản phẩm" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Giá</p> <input id="price" class="inputbox" required=""
                                        placeholder="Giá sản phẩm" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Số lượng</p> <input id="number" class="inputbox" required=""
                                        placeholder="Số lượng sản phẩm" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Nội dung</p> <input class="inputbox" id="content" required=""
                                        placeholder="Nội dung" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Thể loại</p> <select class="border-0 outline-none" id="category">
                                        required=""
                                        @foreach ($category as $category)
                                            <option value="{{ $category->idcategory }}">{{ $category->namecategory }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">% Sale</p> <select class="border-0 outline-none" id="sale">
                                        <option value="" hidden selected>0</option>
                                        @foreach ($sale as $sale)
                                            <option value="{{ $sale->idSale }}">{{ $sale->numberSale }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Chi tiết </p> <select class="border-0 outline-none"
                                        id="detail">
                                        <option value="" hidden selected>0</option>
                                        @foreach ($productdetail as $detail1)
                                            <option value="{{ $detail1->idDetail }}">Tác
                                                giả:{{ $detail1->author }}-Năm:{{ $detail1->year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-7 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <div class="h-blue">
                                        <input type="file" value="Chọn ảnh" id="images">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary form-control text-center" onclick="addproduct()"
                            value="button">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endif
