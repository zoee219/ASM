<!-- Header -->
<nav class="navbar navbar-expand-sm bg-dark justify-content-around">
    <div class="container">
        <!-- Links -->
        <ul class="navbar-nav w-100">
            <div class="d-flex">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.products.listProductUser') }}">Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Thể loại</a>
                </li>
            </div>
            <div class="ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Đăng xuất</a>
                </li>
            </div>
        </ul>
    </div>
</nav>
