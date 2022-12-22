<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
    id="navbarVertical">
    <div class="container-fluid">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
            aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span> </button>
        <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#"> <img src="assets/img/logo.svg"
                style="height: 25px;" alt="..."> </a>
        <div class="navbar-user d-lg-none">
            <div class="dropdown">
                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="avatar-parent-child"> <img alt="Image Placeholder"
                            src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                            class="avatar avatar- rounded-circle"> <span
                            class="avatar-child avatar-badge bg-success"></span> </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar"> <a href="#"
                        class="dropdown-item">Profile</a> <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Billing</a>
                    <hr class="dropdown-divider"> <a href="#" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin-index') }}"> <i class="bi bi-house"></i>
                        Trang chủ
                    </a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin-manageproduct')}}"> <i class="bi bi-bar-chart"></i>
                        Quản lý sản phẩm </a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin-manageoder') }}"> <i class="bi bi-chat"></i>
                        Quản lý đơn hàng
                        <span
                            class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                    </a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin-manageuser') }}"> <i class="bi bi-people"></i> Quản
                        lý người dùng
                    </a> </li>
                <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-bookmarks"></i>
                        Thông tin liên hệ </a> </li>
                <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-bookmarks"></i>
                        Thống kê </a> </li>
            </ul>
            <hr class="navbar-divider my-5 opacity-20">
            <ul class="navbar-nav mb-md-4">
                <li>
                    <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
                        Contacts <span
                            class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span>
                    </div>
                </li>
            </ul>
            <div class="mt-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-person-square"></i> Admin </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}"> <i
                            class="bi bi-box-arrow-left"></i> Logout </a> </li>
            </ul>
        </div>
    </div>
</nav>
