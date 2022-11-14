<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/HeaderCss.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        class="css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

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
                    alert('them thanh cong');
                }
            } else {
                alert('vui lòng đăng nhập')
            }
        }
    </script>

</head>

<body>
    <header>
        @include('components.header')
    </header>
    <br>
    <div>
        <div class="container">
            <div class="row mt-3">
                <h2 class="list-product-title">New product</h2>
                <div class="list-product-subtitle">
                    <p>List product description</p>
                </div>
                <div class="product-group">
                    <div class="row">
                        @foreach ($data as $product)
                            <div class="col-md-3 col-sm-10 col-12">
                                <div class="card card-product mb-3">
                                    <img class="card-img-top" src="/assets/images/{{ $product->images }}">
                                    <div class="card-body">
                                        <h5 class="card-title product-title">1</h5>
                                        <div class="card-text product-price">
                                            <span class="del-price">100.000 vnd</span>
                                            <span class="new-price">1</span>
                                        </div>
                                        <button class="btn btn-info btn-add-to-cart"
                                            onclick="addtocart({{ $product->idProduct }},{{ session()->get('name') }})"><i
                                                class="fas fa-shopping-cart"></i></button>
                                        <a class="btn btn-outline-info btn-detail">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12">
                <br><br>
                <nav aria-label="Page navigation">
                    {!! $data->links() !!}
                </nav>
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
