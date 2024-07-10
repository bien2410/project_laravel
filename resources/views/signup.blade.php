<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
<div class="signup-container">
    <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
    <p>Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng</p>
    <div class="signup-form">
        <div class="form-section">
            <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
            <form action="{{ route('signup') }}" method="POST">
                @csrf
                <label for="name">HỌ VÀ TÊN:<span> *</span></label>
                <input type="text" id="name" name="name" required>

                <label for="email">EMAIL:<span> *</span></label>
                <input type="email" id="email" name="email" required>

                <label for="address">ĐỊA CHỈ:<span> *</span></label>
                <input type="text" id="address" name="address" required>

                <label for="tel">ĐIỆN THOẠI:<span> *</span></label>
                <input type="tel" id="tel" name="tel" required>

                <label for="password">MẬT KHẨU:<span> *</span></label>
                <input type="password" id="password" name="password" required>

                <button type="submit">ĐĂNG KÝ</button>
            </form>
        </div>
        <div class="form-section">
            <h2>ĐĂNG NHẬP</h2>
            <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi</p>
            <a href="{{ route('login') }}" class="login-button">ĐĂNG NHẬP</a>
        </div>
    </div>
</div>
</body>
</html>
