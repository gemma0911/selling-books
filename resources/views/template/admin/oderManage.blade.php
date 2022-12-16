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
                                            <th scope="col">Mã đơn hàng</th>
                                            <th scope="col">Tên người đặt</th>
                                            <th scope="col">Ngày đặt hàng</th>
                                            <th scope="col">Tổng số sản phẩm</th>
                                            <th scope="col">Tổng tiền đơn hàng</th>
                                            <th scope="col">Tình trạng</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $product)
                                            <tr>
                                                <td> {{ $product->idPayment }} </td>
                                                <td> <img alt="..."
                                                        src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                        class="avatar avatar-sm rounded-circle me-2"> <a
                                                        class="text-heading font-semibold" href="#"> {{$product->name}}
                                                    </a>
                                                </td>
                                                <td> {{ $product->create_at }} </td>
                                                <td> <img alt="..."
                                                        src="https://preview.webpixels.io/web/img/other/logos/logo-1.png"
                                                        class="avatar avatar-xs rounded-circle me-2"> <a
                                                        class="text-heading font-semibold" href="#"> Dribbble
                                                    </a>
                                                </td>
                                                <td> {{ $product->total }} </td>
                                                @if ($product->status == 1)
                                                    <td> <span class="badge badge-lg badge-dot"> <i
                                                                class="bg-success"></i>Chưa duyệt </span> </td>
                                                    <td class="text-end">
                                                        <a href="{{ route('admin-oder', ['idPayment' => $product->idPayment]) }}"
                                                            class="btn btn-sm btn-neutral">View</a>
                                                        <a href="{{ route('admin-update-oder', ['idPayment' => $product->idPayment]) }}"
                                                            class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                            <i class="bi bi-check2-circle"></i></a>
                                                        <a href="{{ route('admin-delete-oder', ['idPayment' => $product->idPayment]) }}"
                                                            class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                            <i class="bi bi-trash"></i></a>
                                                    </td>
                                                @else
                                                    <td> <span class="badge badge-lg badge-dot"> <i
                                                                class="bg-success"></i>Đã duyệt </span> </td>
                                                    <td class="text-end">
                                                        <a href="{{ route('admin-oder', ['idPayment' => $product->idPayment]) }}"
                                                            class="btn btn-sm btn-neutral">View</a>
                                                        <a href="{{ route('admin-delete-oder', ['idPayment' => $product->idPayment]) }}"
                                                            class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                            <i class="bi bi-trash"></i></a>
                                                @endif
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
