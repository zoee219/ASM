<!-- footer.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

<div class="footer bg-dark text-light p-3">
    <style>
        .footer {
            position: relative; /* Đảm bảo footer không chồng lên các phần tử khác */
            bottom: 0;
            width: 100%;
            background-color: #343a40; /* Màu nền đen của footer */
            padding: 20px 0; /* Padding top và bottom */
        }

        .footer .container {
            padding: 0;
        }

        .footer .row {
            margin-bottom: 0;
        }

        .footer .col-md-4 {
            margin-bottom: 15px; /* Khoảng cách giữa các cột trong footer */
        }

        .footer h5 {
            margin-bottom: 10px;
        }

        .footer ul {
            padding-left: 0;
            list-style: none;
        }

        .footer ul li {
            margin-bottom: 5px;
        }

        .footer .text-light {
            color: #f8f9fa !important;
        }

        .footer .d-flex a {
            margin-right: 10px;
        }
    </style>

    <div class="container">
        <div class="row">
            <!-- Thông tin liên hệ -->
            <div class="col-md-4">
                <h5 class="text-light">Liên hệ</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-house-door"></i> Địa chỉ: 123 Đường Game, Thành phố Gaming</li>
                    <li><i class="bi bi-envelope"></i> Email: support@shopaccgame.com</li>
                    <li><i class="bi bi-phone"></i> Điện thoại: +123 456 789</li>
                </ul>
            </div>
            <!-- Chính sách và hỗ trợ -->
            <div class="col-md-4">
                <h5 class="text-light">Chính sách và hỗ trợ</h5>
                <ul class="list-unstyled">
                    <li><a class="text-light" href="#">Chính sách bảo mật</a></li>
                    <li><a class="text-light" href="#">Điều khoản sử dụng</a></li>
                    <li><a class="text-light" href="#">Hỗ trợ khách hàng</a></li>
                    <li><a class="text-light" href="#">Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <!-- Theo dõi chúng tôi -->
            <div class="col-md-4">
                <h5 class="text-light">Theo dõi chúng tôi</h5>
                <div class="d-flex">
                    <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-light me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <p class="mb-0">&copy; {{ date('Y') }} ShopAccGame. Tất cả quyền lợi được bảo lưu.</p>
        </div>
    </div>
</div>
