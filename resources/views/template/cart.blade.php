<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Giỏ hàng</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('ajax/deletetocart.js') }}"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/css/theme.css" rel="stylesheet" />

    <script src="{{ asset('ajax/deletecart.js') }}"></script>
    <script>
        function deletetocart($id) {
            console.log($id)
            $.ajax({
                url: '{{ route('deletetocart') }}',
                type: "get",
                dateType: "text",
                data: {
                    idProduct: $id,
                },
            });
            if ($.ajax) {
                alert('xóa thanh cong');
            }
            window.location = "{{ route('cart') }}";
        }
    </script>
    <script>
        function number(e, c) {
            var x = document.getElementById('number' + c).value
            document.getElementById('price' + c).value = x * e;
        }
    </script>
    <script>
        function edittocart(idProduct) {
            var x = document.getElementById('number' + idProduct).value
            $.ajax({
                url: '{{ route('edit-to-cart') }}',
                type: "get",
                dateType: "text",
                data: {
                    idProduct: idProduct,
                    number: x,
                },
                success: function(result) {
                    $('#totalnumber').html(result);
                }
            });
        }
    </script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

    body {
        background-color: white;
        font-family: 'Open Sans', serif;
        font-size: 14px
    }

    .container-fluid {
        margin-top: 70px
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.40rem
    }

    .img-sm {
        width: 80px;
        height: 80px
    }

    .itemside .info {
        padding-left: 15px;
        padding-right: 7px
    }

    .table-shopping-cart .price-wrap {
        line-height: 1.2
    }

    .table-shopping-cart .price {
        font-weight: bold;
        margin-right: 5px;
        display: block
    }

    .text-muted {
        color: #969696 !important
    }

    a {
        text-decoration: none !important
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0px
    }

    .itemside {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }

    .dlist-align {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    [class*="dlist-"] {
        margin-bottom: 5px
    }

    .coupon {
        border-radius: 1px
    }

    .price {
        font-weight: 600;
        color: #212529
    }

    .btn.btn-out {
        outline: 1px solid #fff;
        outline-offset: -5px
    }

    .btn-main {
        border-radius: 2px;
        text-transform: capitalize;
        font-size: 15px;
        padding: 10px 19px;
        cursor: pointer;
        color: #fff;
        width: 100%
    }

    .btn-light {
        color: #ffffff;
        background-color: #F44336;
        border-color: #f8f9fa;
        font-size: 12px
    }

    .btn-light:hover {
        color: #ffffff;
        background-color: #F44336;
        border-color: #F44336
    }

    .btn-apply {
        font-size: 11px
    }
</style>

<body>
    @include('template.component.header')

    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col" width="120">Số lượng</th>
                                    <th scope="col" width="120">Giá</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $products)
                                    <div id="result">
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img
                                                            src="/assets/images/{{ $products->images }}" class="img-sm">
                                                    </div>
                                                    <figcaption class="info"> <a href="#"
                                                            class="title text-dark"
                                                            data-abc="true">{{ $products->name }}</a>
                                                        <p class="text-muted small">SIZE: L <br> Brand: MAXTRA</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> <input type="number" class="form-control"
                                                    id="number{{ $products->idProduct }}"
                                                    value="{{ $products->number }}"
                                                    onchange="number({{ $products->price }},{{ $products->idProduct }})">
                                            </td>
                                            <td>
                                                <div class="price"> <var class="price"><input
                                                            id="price{{ $products->idProduct }}" class="form-control"
                                                            style="width:200px" value="{{ $products->price*$products->number }}"></var>
                                                </div>
                                            </td>
                                            <td class="text-right d-none d-md-block">
                                                <button class="btn btn-danger"
                                                    onclick="edittocart({{ $products->idProduct }})"> <i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button id="deletecart"
                                                    onclick="deletetocart({{ $products->idProduct }})"
                                                    class="btn btn-danger"> <i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Tổng tiền:</dt>
                            <dd class="text-right ml-3"><div id="totalnumber">
                                @if (!empty($delete))
                                {{$delete}} vnđ
                                @else
                                {{$total}} vnđ
                                @endif
                        </dl>
                        {{-- <dl class="dlist-align">
                            <dt>Tổng tiền:</dt>
                            <dd class="text-right text-dark b ml-3"><strong id="totalnumber"></strong></dd>
                        </dl> --}}
                        <hr>
                         <a href="/payment" class="btn btn-out btn-primary btn-square btn-main" data-abc="true">
                            Thanh toán </a> <a href=""
                            class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </aside>
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
    <script src="{{ asset('assets/js/js.js') }}"></script>
</body>

</html>
