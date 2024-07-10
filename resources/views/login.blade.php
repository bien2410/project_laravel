<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<div class="login-container">
    <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
    <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
    <div class="login-form">
        <div class="form-section">
            <h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label for="email">EMAIL:<span> *</span></label>
                <input type="email" id="email" name="email" required>

                <label for="password">MẬT KHẨU:<span> *</span></label>
                <input type="password" id="password" name="password" required>

                <button type="submit">ĐĂNG NHẬP</button>
            </form>
        </div>
        <div class="form-section">
            <h2>TẠO TÀI KHOẢN MỚI</h2>
            <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
            <a href="{{ route('signup') }}" class="signup-button">ĐĂNG KÝ</a>
        </div>
    </div>
</div>
</body>
</html>
