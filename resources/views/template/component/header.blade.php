<nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll"
    style="height: 100px">
    <div class="container"><a class="navbar-brand" href="{{ route('index') }}"><img src="assets/img/logo.svg" height="31"
                alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon">
            </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="#feature">Product</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="#validation">Sản phẩm</a>
                </li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="#superhero">Mã Giảm Giá</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="#marketing">Liên hệ</a>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('cart') }}"><i class="bi bi-cart-check-fill"></i></a>
                </li>
            </ul>
            @if (empty(session()->get('name')))
                <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="{{ route('login.get') }}">Sign
                        In</a><a class="btn btn-warning ms-3" href="{{ route('register.get') }}">Sign Up</a></div>
            @else
                <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline"
                        href="{{ route('login.get') }}">{{ session()->get('idUser') }}</a><a
                        class="btn btn-warning ms-3" href="{{ route('logout') }}">Logout</a></div>
            @endif
        </div>
    </div>
</nav>
