<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
<header class="header">
    <div class="top-bar">
        <div class="container">
            <div class="contact-info">
                <span>📞 (04) 6674 2332</span>
                <span>✉ support@gmail.com</span>
            </div>
            <div class="auth-links">
                <a href="{{ route('login') }}">Đăng Nhập</a>
                <a href="{{ route('signup') }}">Đăng Ký</a>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Nhập từ khóa tìm kiếm...">
                <button type="submit">🔍</button>
            </div>
            <div class="cart-info">
                <a href="/sp">🛒 1 sản phẩm</a>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container">
            <ul>
                <li><a href="/">Trang Chủ</a></li>
                <li><a href="/about">Giới Thiệu</a></li>
                <li><a href="/news">Tin Tức</a></li>
                <li><a href="/contact">Liên Hệ</a></li>
            </ul>
        </div>
    </nav>
</header>
</body>
</html>
