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
            @include('template.admin.nav')
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
                                        </a> <a href="{{ route('admin-manageuser-add-post') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
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
                                <h5 class="mb-0">Sản phẩm</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table table table-hover table-nowrap">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Xem sản phẩm</th>
                                            <th scope="col">Xóa sản phẩm</th>
                                            <th scope="col">Mã sản phẩm</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">%Sale</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Thể loại</th>
                                            <th scope="col">Số người mua</th>
                                            <th scope="col">Ảnh</th>
                                            <th scope="col">Ngày tạo</th>
                                            <th scope="col">Ngày cập nhật</th>
                                            <th scope="col">Nội dung</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $product)
                                            <tr>
                                                <td> <a href="" class="btn btn-sm btn-neutral">View</a></td>
                                                <td><a href="{{ route('admin-manageproduct-delete', ['idProduct'=>$product->idProduct]) }}"
                                                        class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                        <i class="bi bi-trash"></i></a></td>
                                                <td>{{ $product->idProduct }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->numberSale }}</td>
                                                <td>{{ $product->numberProduct }}</td>
                                                <td>{{ $product->nameCategory }}</td>
                                                <td>{{ $product->buy }}</td>
                                                <td>{{ $product->images }}</td>
                                                <td>{{ $product->Create_at }}</td>
                                                <td>{{ $product->Update_at }}</td>
                                                <td>{{ $product->content }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>

    </html>
@endif
