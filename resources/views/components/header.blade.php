{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('product') }}">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Giỏ hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">Liên hệ</a>
                </li>
                @if (empty(session()->get('name')))
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('register.get') }}">Đăng kí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login.get') }}">Đăng nhập</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('logout') }}">{{ session()->get('name') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Đăng xuất</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav> --}}
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand name" href="#">Favy.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product') }}">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart') }}">Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
                <form class="d-flex searchitem">
                    <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                    <i class="fa fa-search"></i>
                </form>
            </div>
        </div>
    </nav>
</div>
