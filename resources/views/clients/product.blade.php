<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/HeaderCss.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <script>
        function addtocart($id) {
            console.log($id)
            $.ajax({
                url: '{{route('add-to-cart')}}',
                type: "get",
                dateType: "text",
                data: {
                    id: $id,
                },
            });
            if($.ajax) {
                alert('them thanh cong');
            }
        }
    </script>
</head>
<style>
    .btn-light {
        color: #ffffff;
        background-color: #F44336;
        border-color: #f8f9fa;
    }

    .btn-light:hover {
        color: #ffffff;
        background-color: #f8f9fa;
        border-color: #F44336
    }
</style>

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
                            <div class="col-md-2 col-sm-4 col-12">
                                <div class="card card-product mb-3">
                                    <img class="card-img-top" src="/assets/images/{{ $product->images }}">
                                    <div class="card-body">
                                        <h5 class="card-title product-title">1</h5>
                                        <div class="card-text product-price">
                                            <span class="del-price">100.000 vnd</span>
                                            <span class="new-price">1</span>
                                        </div>
                                        <button class="btn btn-info btn-add-to-cart"
                                            onclick="addtocart({{ $product->id }})"><i
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
    <script src="{{ asset('assets/clients/js/HeaderJs.js') }}"></script>
</body>

</html>
