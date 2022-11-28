<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/css/theme.css" rel="stylesheet" />
</head>
<style>
    .payment-info {
        background: blue;
        padding: 10px;
        border-radius: 6px;
        color: #fff;
        font-weight: bold;
    }

    .product-details {
        padding: 10px;
    }

    body {
        background: #eee;
    }

    .cart {
        background: #fff;
    }

    .p-about {
        font-size: 12px;
    }

    .table-shadow {
        -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
        box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
    }

    .type {
        font-weight: 400;
        font-size: 10px;
    }

    label.radio {
        cursor: pointer;
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none;
    }

    label.radio span {
        padding: 1px 12px;
        border: 2px solid #ada9a9;
        display: inline-block;
        color: #8f37aa;
        border-radius: 3px;
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 300;
    }

    label.radio input:checked+span {
        border-color: #fff;
        background-color: blue;
        color: #fff;
    }

    .credit-inputs {
        background: rgb(102, 102, 221);
        color: #fff !important;
        border-color: rgb(102, 102, 221);
    }

    .credit-inputs::placeholder {
        color: #fff;
        font-size: 13px;
    }

    .credit-card-label {
        font-size: 9px;
        font-weight: 300;
    }

    .form-control.credit-inputs:focus {
        background: rgb(102, 102, 221);
        border: rgb(102, 102, 221);
    }

    .line {
        border-bottom: 1px solid rgb(102, 102, 221);
    }

    .information span {
        font-size: 12px;
        font-weight: 500;
    }

    .information {
        margin-bottom: 5px;
    }

    .items {
        -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
        box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
    }

    .spec {
        font-size: 11px;
    }
</style>
<body>
    @include('template.component.header')
    <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span
                            class="ml-2">Continue Shopping</span></div>
                    <hr>
                    <h6 class="mb-0">Sản phẩm</h6>
                    <div class="d-flex justify-content-between"><span>You have 4 items in your cart</span>
                        <div class="d-flex flex-row align-items-center"><span class="text-black-50">Số lượng</span>
                            <div class="price ml-2"><span class="mr-1">Tổng tiền</span><i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    @foreach ($product as $product)
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="/assets/images/{{$product->images}}"
                                width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">{{$product->name}}</span><span
                                    class="spec">256GB, Navy Blue</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">2</span><span
                                class="d-block ml-5 font-weight-bold">$900</span><i
                                class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    @endforeach
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="https://i.imgur.com/GQnIUfs.jpg"
                                width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">One pro 7T</span><span
                                    class="spec">256GB, Navy Blue</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">2</span><span
                                class="d-block ml-5 font-weight-bold">$900</span><i
                                class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="https://i.imgur.com/o2fKskJ.jpg"
                                width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">Google pixel 4 XL</span><span
                                    class="spec">256GB, Axe black</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">1</span><span
                                class="d-block ml-5 font-weight-bold">$800</span><i
                                class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="https://i.imgur.com/Tja5H1c.jpg"
                                width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">Samsung galaxy Note
                                    10&nbsp;</span><span class="spec">256GB, Navy Blue</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">1</span><span
                                class="d-block ml-5 font-weight-bold">$999</span><i
                                class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-info">
                    <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img
                            class="rounded" src="https://i.imgur.com/WU501C8.jpg" width="30"></div><span
                        class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio"
                            name="card" value="payment" checked> <span><img width="30"
                                src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>

                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img
                                width="30" src="https://img.icons8.com/officel/48/000000/visa.png" /></span>
                    </label>

                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img
                                width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" /></span>
                    </label>


                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img
                                width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" /></span>
                    </label>
                    <div><label class="credit-card-label">Name on card</label><input type="text"
                            class="form-control credit-inputs" placeholder="Name"></div>
                    <div><label class="credit-card-label">Card number</label><input type="text"
                            class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text"
                                class="form-control credit-inputs" placeholder="12/24"></div>
                        <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text"
                                class="form-control credit-inputs" placeholder="342"></div>
                    </div>
                    <hr class="line">
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>$3000.00</span>
                    </div>
                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>$20.00</span>
                    </div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl.
                            taxes)</span><span>$3020.00</span></div><button
                        class="btn btn-primary btn-block d-flex justify-content-between mt-3"
                        type="button"><span>$3020.00</span><span>Checkout<i
                                class="fa fa-long-arrow-right ml-1"></i></span></button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div>
        <div class="bg-white-100">
            <div class="py-4">
                <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg md:max-w-xl mx-2">
                    <div class="md:flex ">
                        <div class="w-full p-4 px-5 py-5">
                            <div class="flex flex-row">
                                <h2 class="text-3xl text-green-400 font-semibold">ĐỊA CHỈ GIAO HÀNG</h2>
                            </div>
                            <span>Tên người nhận</span>
                            <input type="text" name="mail"
                                class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                placeholder="Tên người nhận">
                            <span>Số điện thoại</span>
                            <input type="text" name="mail"
                                class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-1 text-sm"
                                placeholder="Số điện thoại người nhận">
                            <div>
                                <select
                                    class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                    id="city" aria-label=".form-select-sm">
                                    <option value="" selected>Chọn tỉnh thành</option>
                                </select>

                                <select
                                    class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                    id="district" aria-label=".form-select-sm">
                                    <option value="" selected>Chọn quận huyện</option>
                                </select>

                                <select
                                    class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                    id="ward" aria-label=".form-select-sm">
                                    <option value="" selected>Chọn phường xã</option>
                                </select>
                            </div>
                            <input type="text" name="mail"
                                class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                placeholder="Nhập địa chỉ giao hàng">
                            <div class="flex justify-between items-center pt-2"> <button type="button"
                                    class="h-12 w-24 text-blue-500 text-xs font-medium">Quay về giỏ hàng</button> <button
                                    type="button"
                                    class="h-12 w-48 rounded font-medium text-xs bg-blue-500 text-white">Thanh toán</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js">
        < /> <
        script >
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
                var opt = document.createElement('option');
                opt.value = x.Name;
                opt.text = x.Name;
                opt.setAttribute('data-id', x.Id);
                citis.options.add(opt);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.options[this.selectedIndex].dataset.id != "") {
                    const result = data.filter(n => n.Id === this.options[this.selectedIndex].dataset.id);

                    for (const k of result[0].Districts) {
                        var opt = document.createElement('option');
                        opt.value = k.Name;
                        opt.text = k.Name;
                        opt.setAttribute('data-id', k.Id);
                        district.options.add(opt);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.options[citis.selectedIndex].dataset.id);
                if (this.options[this.selectedIndex].dataset.id != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.options[this.selectedIndex]
                        .dataset.id)[0].Wards;

                    for (const w of dataWards) {
                        var opt = document.createElement('option');
                        opt.value = w.Name;
                        opt.text = w.Name;
                        opt.setAttribute('data-id', w.Id);
                        wards.options.add(opt);
                    }
                }
            };
        }
    </script>
</body>

</html>
