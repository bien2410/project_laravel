<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>
<body>
@include('header')
<div class="container-fluid">
    <!-- Vùng trên -->
    <div class="row">
        <!-- Sidebar phần 1 -->
        <div class="col-lg-3">
            <div class="sidebar-section">
                <h3>Section 1</h3>
                <p>Nội dung phần 1 của sidebar</p>
            </div>
        </div>
        <!-- Ảnh tĩnh -->
        <div class="col-lg-9">
            <div class="image-container">
                <img src="path/to/your/image.jpg" alt="Static Image" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Vùng dưới -->
    <div class="row mt-4">
        <!-- Sidebar phần 2 và phần 3 -->
        <div class="col-lg-3">
            <div class="sidebar">
                <div class="sidebar-section">
                    <h3>Section 2</h3>
                    <p>Nội dung phần 2 của sidebar</p>
                </div>
                <div class="sidebar-section">
                    <h3>Section 3</h3>
                    <p>Nội dung phần 3 của sidebar</p>
                </div>
            </div>
        </div>
        <!-- Nội dung chính -->
        <div class="col-lg-9">
            <div class="content">
                <h2>Nội dung chính</h2>
                <p>Đây là nội dung chính của trang.</p>
            </div>
        </div>
    </div>
</div>
@include('footer')

</body>
</html>
