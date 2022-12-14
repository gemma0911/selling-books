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
<style>
    body {
        font-family: 'Poppins', sans-serif
    }
</style>
<body>
    @include('template.component.header')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
<div class="row header" style="text-align:center;color:green">
<h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Đơn hàng của bạn</h3>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%,font-family:Georgia, 'Times New Roman', Times, serif">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên người nhận</th>
                <th>Tổng tiền đơn hàng</th>
                <th>Ngày tạo đơn</th>
                <th>Ngày cập nhật</th>
                <th>Tình trạng</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $product)
            <tr>
                <td>{{$product->idPayment}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->total}}</td>
                <td>{{$product->create_at}}</td>
                <td>{{$product->update_at}}</td>
                <td>
                    @if ($product->status==1)
                        Chưa duyệt
                    @elseif ($product->status==3)
                        Đã duyệt
                    @endif
                </td>
                <td><a href="{{ route('oderdetail', ['idPayment' => $product->idPayment]) }}" class="btn btn-sm btn-neutral">Sửa</a></td>
                <td><a href="{{ route('deleteoder', ['idPayment' => $product->idPayment]) }}" class="btn btn-sm btn-neutral">Xóa</a></td>
            </tr>
            @endforeach
    </table>
    </div>
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <link
        href="https://fonts.googleapis.com/git?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
    <script src="{{ asset('assets/js/js.js') }}"></script>
</body>

</html>
