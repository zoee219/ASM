<!-- header.blade.php -->
<div class="header bg-secondary text-light p-3 d-flex justify-content-between align-items-center">
    <h3 class="layer mb-0">
        <span>ShopAccGame</span>
        <span>Quản lý Acc</span>
    </h3>

    <div class="dropdown">
        <img class="dropdown-toggle" src="https://genk.mediacdn.vn/2019/9/18/lmht-15687833481821692890713.jpg" alt="Avatar" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" style="width: 40px; height: 40px; border-radius: 50%;">
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">My profile</a></li>
            <li><a class="dropdown-item" href="#">Language</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>
</div>
