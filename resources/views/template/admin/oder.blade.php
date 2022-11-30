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
    </head>
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
    </style>

    <body>
        <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
            <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
                id="navbarVertical">
                <div class="container-fluid">
                    <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <!-- Brand -->
                    <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#"> <img
                            src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="..."> </a>
                    <div class="navbar-user d-lg-none">
                        <div class="dropdown">
                            <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-parent-child"> <img alt="Image Placeholder"
                                        src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                        class="avatar avatar- rounded-circle"> <span
                                        class="avatar-child avatar-badge bg-success"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar"> <a
                                    href="#" class="dropdown-item">Profile</a> <a href="#"
                                    class="dropdown-item">Settings</a>
                                <a href="#" class="dropdown-item">Billing</a>
                                <hr class="dropdown-divider"> <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="sidebarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-house"></i>
                                    Dashboard
                                </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-bar-chart"></i>
                                    Analitycs </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add') }}"> <i
                                        class="bi bi-chat"></i>
                                    Thêm sản phẩm
                                    <span
                                        class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                                </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-bookmarks"></i>
                                    Collections </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-people"></i> Users
                                </a> </li>
                        </ul>
                        <hr class="navbar-divider my-5 opacity-20">
                        <ul class="navbar-nav mb-md-4">
                            <li>
                                <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide"
                                    href="#"> Contacts <span
                                        class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item"> <a class="nav-link" href="#"> <i
                                        class="bi bi-person-square"></i> Admin </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}"> <i
                                        class="bi bi-box-arrow-left"></i> Logout </a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="h-screen flex-grow-1 overflow-y-lg-auto">
                <header class="bg-surface-primary border-bottom pt-6">
                    <div class="container-fluid">
                        <div class="mb-npx">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                    <h1 class="h2 mb-0 ls-tight">Application</h1>
                                </div>
                                <div class="col-sm-6 col-12 text-sm-end">
                                    <div class="mx-n1"> <a href="#"
                                            class="btn d-inline-flex btn-sm btn-neutral border-base mx-1"> <span
                                                class=" pe-2"> <i class="bi bi-pencil"></i> </span> <span>Edit</span>
                                        </a> <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                            <span class=" pe-2"> <i class="bi bi-plus"></i> </span>
                                            <span>Create</span>
                                        </a> </div>
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
                <main class="py-6 bg-surface-secondary">
                    <div class="container-fluid">
                        <div class="card shadow border-0 mb-7">
                            <div class="card-header">
                                <h5 class="mb-0">Đơn hàng</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Người nhận</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Thôn</th>
                                            <th scope="col">Xã</th>
                                            <th scope="col">Huyện</th>
                                            <th scope="col">Tỉnh</th>
                                            <th scope="col">Phương thức giao hàng</th>
                                            <th scope="col">Hình thức thanh toán</th>
                                            <th scope="col">Ghi chú</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $product )
                                            <tr>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->phone}}</td>
                                                <td>{{$product->address}}</td>
                                                <td>{{$product->ward}}</td>
                                                <td>{{$product->district}}</td>
                                                <td>{{$product->city}}</td>
                                                <td>{{$product->namePaymentMethod}}</td>
                                                <td>{{$product->nameShip}}</td>
                                                <td>{{$product->note}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-header">
                                <h5 class="mb-0">Sản phẩm</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Mã đơn hàng</th>
                                            <th scope="col">Mã sản phẩm</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Ngày thêm vào giỏ hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product2 as $product2 )
                                            <tr>
                                                <td>{{$product2->idPayment}}</td>
                                                <td>{{$product2->idProduct}}</td>
                                                <td>{{$product2->name}}</td>
                                                <td>{{$product2->price}}</td>
                                                <td>{{$product2->number}}</td>
                                                <td>{{$product2->create_at}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </main>
            </div>
        </div>
    </body>

    </html>
@endif
