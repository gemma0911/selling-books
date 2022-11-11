<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product') }}">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Liên hệ</a>
                </li>
                @if (empty(session()->get('name')))
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
</nav>
<div class="p-5 text-center bg-light" style="margin-top: 10px;">
</div>
