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
        <script>
            function test() {
                var name = document.getElementById('name')
                var content = document.getElementById('content')
                var number = document.getElementById('number')
                var price = document.getElementById('price')
                var images = document.getElementById('images')

                var category = document.getElementById('select1')
                var sale = document.getElementById('select2')
                $.ajax({
                    url: "{{ route('add-product') }}",
                    type: "get",
                    dataType: "text",
                    data: {
                        name: name.value,
                        content: content.value,
                        price: price.value,
                        number: number.value,
                        images: images.value,
                        category: category.value,
                        sale: sale.value,
                    },
                });
                if ($.ajax) {
                    alert('thêm thanh cong');
                }
                window.location = "/admin/add"
            }
        </script>
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
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add-product') }}"> <i
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
                    <div class="col d-flex justify-content-center">
                        <div class="row g-6 mb-6">
                            <div class="col-xl-12 col-sm-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp"
                                        id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Nội dung</label>
                                    <input type="text" class="form-control" id="content">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Số lượng</label>
                                    <input type="text" class="form-control" id="number">
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Images</label>
                                    <input type="file" class="form-control" id="images">
                                  </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price">
                                </div><br>
                                <div class="mb-3">
                                    <select class="form-select" id="select1" aria-label="Default select example">
                                        <option selected>Thể loại</option>
                                        @foreach ($category as $category)
                                            <option value="{{ $category->idcategory }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                                <div class="mb-3">
                                    <select class="form-select" id="select2" aria-label="Default select example">
                                        <option selected>Phần trăm sale</option>
                                        @foreach ($sale as $sale)
                                            <option value="{{ $sale->idSale }}">{{ $sale->numberSale }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <button type="button" onclick="test()" class="btn btn-primary">Primary</button>
                                </div>
                            </div>
                            <div class="col-xl-5 col-sm-6 col-12">
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>

    </html>
@endif
