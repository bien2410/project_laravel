## Setup project
### 1. Chuẩn bị môi trường

- Nếu dùng Windows: Cài [xampp](https://www.apachefriends.org/download.html) _(Lưu ý chọn phiên bản PHP 8.1)_
- Nếu dùng Mac hoặc Linux: Cài riêng lẻ các thành phần sau:
    - PHP 8.1
    - nginx _(hoặc apache)_
    - MySql
- Trên MySql vừa cài, tạo 1 DB mới với tên là `dkt-store`, collation `utf8mb4_general_ci`
- Cài composer 2

### 2. Setup
- Setup file `.env`:
    - Tạo file `.env` clone từ file `.env.example`
    - Edit file `.env` set `DB_DATABASE=dkt-store`
- Mở terminal, `cd` đến project và chạy các commands:
    - `composer install`
    - `php artisan key:generate`
- Config virtual host _(optional)_
