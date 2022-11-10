<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/HeaderCss.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/ProductCss.css') }}">
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
</head>

<body>
    <header>
        @include('components.header')
    </header>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories
                    </div>
                    <ul class="list-group category_block">
                        <li class="list-group-item"><a href="category.html">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="category.html">Dapibus ac facilisis in</a></li>
                        <li class="list-group-item"><a href="category.html">Morbi leo risus</a></li>
                        <li class="list-group-item"><a href="category.html">Porta ac consectetur ac</a></li>
                        <li class="list-group-item"><a href="category.html">Vestibulum at eros</a></li>
                    </ul>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Last product</div>
                    <div class="card-body">
                        <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                        <h5 class="card-title">Product title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="bloc_left_price">99.00 $</p>
                    </div>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Last product</div>
                    <div class="card-body">
                        <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                        <h5 class="card-title">Product title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="bloc_left_price">99.00 $</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://cdn0.fahasa.com/media/catalog/product/_/c/_chainsaw-man_vol-01_b_a-_o-_g_c_.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://cdn0.fahasa.com/media/catalog/product/k/o/komi-nu-than-so-giao-tiep---tap-11.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://cdn0.fahasa.com/media/catalog/product/k/o/komi-nu-than-so-giao-tiep---tap-11.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">Product title</a>
                                </h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="btn btn-danger btn-block">99.00 $</p>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
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
