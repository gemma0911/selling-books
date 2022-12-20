<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Thanh toán</title>

    <link rel="stylesheet" href="{{ asset('assets/css/payment.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="form-validation.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        function thanhtoan() {
            var s = document.getElementsByName('methodgiaohang')
            for (var i = 0; i < s.length; i++) {
                if (s[i].checked === true) {
                    ss = s[i].value
                }
            }
            var p = document.getElementsByName('methodpayment')
            var pp
            for (var i = 0; i < p.length; i++) {
                if (p[i].checked === true) {
                    pp = p[i].value
                }
            }
            console.log(document.getElementById('name').value);
            var url = "{{ route('payment') }}";
            var data = {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                city: document.getElementById('city').options[document.getElementById('city').selectedIndex].text,
                district: document.getElementById('district').options[document.getElementById('district').selectedIndex].text,
                ward: document.getElementById('ward').options[document.getElementById('ward').selectedIndex].text,
                address: document.getElementById('address').value,
                idShip: ss,
                idPaymentMethod: pp,
                note: document.getElementById('note').value,
                total: document.getElementById('total').innerHTML
            };
            var dataType = 'text';
            $.get(url, data, dataType);
            window.location = "/payment"
        }
    </script>
</head>
@include('template.component.header')
<br>
<body class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach ($product as $product)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $product->name }}</h6>
                                <small class="text-muted">Số lượng : {{ $product->number }}</small>
                            </div>
                            <span class="text-muted">{{ $product->number * $product->price }}</span>
                        </li>
                    @endforeach
                </ul>
                <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Tổng tiền</h6>
                            </div>
                            <span id="total" class="text-muted">{{ $total }}</span>
                        </li>
                </ul>
                <form class="card p-2">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="button" onclick="thanhtoan()" class="btn-check" name="btnradio" id="btnradio2">
                        <label class="btn btn-outline-primary" for="btnradio2">Thanh toán</label>
                    </div>
                </form>
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
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="email">Họ và tên người nhận</label>
                        <input type="text" class="form-control" id="name"
                            placeholder="Nhập họ và tên người nhận">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username">Số điện thoại</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="phone"
                                placeholder="Nhập số điện thoại người nhận" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Số nhà,đường,thôn,ấp ,....</label>
                        <input type="text" class="form-control" id="address" placeholder="số nhà" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">Ghi chú</label>
                        <input type="text" class="form-control" id="note" placeholder="Ghi chú">
                    </div>
                    <div class="mb-3">
                        <label for="email">Địa chỉ</label>
                        <div class="input-group">
                            <select class="form-select form-select-sm" id="city" aria-label=".form-select-sm">
                                <option value="" selected>Chọn tỉnh thành</option>
                            </select>
                            <select class="form-select form-select-sm" id="district" aria-label=".form-select-sm">
                                <option value="" selected>Chọn quận huyện</option>
                            </select>

                            <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                                <option value="" selected>Chọn phường xã</option>
                            </select>
                        </div>
                        <hr class="mb-4">
                        @foreach ($ship as $ship)
                            <div class="">
                                <input id="methodgiaohang" name="methodgiaohang" type="checkbox" class=""
                                    value="{{ $ship->idShip }}">
                                <label class="" for="credit">{{ $ship->nameShip }}</label>
                            </div>
                        @endforeach
                        <hr class="mb-4">

                        <h4 class="mb-3">Phương thức thanh toán</h4>
                        <div class="d-block my-3">
                            @foreach ($paymentmethod as $paymentmethod)
                                <div class="">
                                    <input id="methodpayment" name="methodpayment" type="checkbox" class=""
                                        value="{{ $paymentmethod->idPaymentMethod }}">
                                    <label class="" for="credit">{{ $paymentmethod->namePaymentMethod }}</label>
                                </div>
                            @endforeach
                        </div>
                        <hr class="mb-4">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
    </script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
</body>

</html>
