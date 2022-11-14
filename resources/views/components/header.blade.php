{{--
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand name" href="#">Favy.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                @if (empty(session()->get('name')))
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register.get') }}">Đăng kí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login.get') }}">Đăng nhập</a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user">{{ session()->get('name') }}</i>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Đăng xuất</a>
                        </li>
                    </ul>
                @endif
                <form class="d-flex searchitem">
                    <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                    <i class="fa fa-search"></i>
                </form>
            </div>
        </div>
    </nav>
</div> --}}
<div class="container mt-3" style="background-color: wheat">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            {{-- <img src="" height="50px" width="50px" /> --}}
            <a class="navbar-brand name" href="#">Cloud<span class="go">Go</span></a> <button
                class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page"
                            href="{{ route('index') }}"><span class="home">Trang chủ</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('product') }}">Sản phẩm</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('cart') }}">Giỏ hàng</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Liên hệ</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Đăng nhập</a> </li>
                </ul>
                @if (empty(session()->get('name')))
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('login.get') }}" role="button">Đăng nhập</a>
                        <a class="btn btn-primary" href="{{ route('register.get') }}" role="button">Đăng kí</a>
                    </div>
                @else
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{(session()->get('name'))}}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout">Đăng xuất</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </nav>
</div>
