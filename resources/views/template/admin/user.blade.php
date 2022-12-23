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
                                        <th scope="col">Xem người dùng</th>
                                        <th scope="col">Xóa tài khoản</th>
                                        <th scope="col">Mã người dùng</th>
                                        <th scope="col">Tên người dùng</th>
                                        <th scope="col">Gmail người dùng</th>
                                        <th scope="col">Thời gian tạo</th>
                                        <th scope="col">Thời gian sửa đổi</th>
                                        <th scope="col">Vị trí</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $user)
                                    <tr>
                                        <td> <a href="" class="btn btn-sm btn-neutral">View</a></td>
                                        <td><a href="{{ route('admin-manageuser-delete', ['id'=>$user->id]) }}" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i></a></td>
                                        <td>{{ $user->id }}</td>
                                        <td>1</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>{{ $user->level }}</td>
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
