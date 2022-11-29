<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="{{ asset('ajax/index.js') }}"></script>
    <script src="{{ asset('ajax/checkbox.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="assets/css/theme.css" rel="stylesheet" />

</head>

<body>
    @include('template.component.header')
    <div class="container mt-5">
        <table class="table table-borderless main">
            <thead>
                <tr class="head">
                    <th scope="col" class="ml-2">
                    </th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá Tiền</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                    <tr class="rounded bg-white">
                        <th scope="row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </th>
                        <td class="order-color">{{$product->idPayment}}</td>
                        <td>{{$product->create_at}}</td>
                        <td class="d-flex align-items-center">
                            <img src="/assets/images/{{ $product->images }}" class="rounded-circle" width="25">
                            <span class="ml-2">{{ $product->name }}</span>
                        </td>
                        <td>
                            {{ $product->number }}
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->price * $product->number }}</td>
                        <td>
                            <div class="dropdown">
                                @if ($product->status == 1)
                                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                        Chưa duyệt
                                    </button>
                                @elseif ($product->status == 3)
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                        Đã duyệt
                                    </button>
                                @endif
                            </div>
                        </td>
                        <td>Today</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
