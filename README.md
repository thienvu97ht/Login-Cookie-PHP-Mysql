### Nội dung kiến thức:

    - Tìm hiểu cookie
    - Ứng dụng cookie trong dự án web
        Mini Project:
            register.php -> Cho phép đăng ký tài khoản người dùng
                - Đăng ký thành công -> login.php
                - Nếu người dùng đã đăng nhập -> users.php

            login.php -> cho phép đăng nhập vào hệ thống
                - Khi người dùng login thành công -> user.php
                - Người dùng đã login trước đó -> tự động chuyển sang user.php

            user.php -> hiển thị danh sách người dùng đã đăng ký trong hệ thống.
                - Nếu người dùng chưa login -> tự chuyển sang trang login.php

================================================================================

### Mục 1: Tìm hiểu cookie

- Cookie là gì?
- So sanh Cookie & localStorage
  - Điểm chung:
    Cùng lưu trữ và quản lý bởi trình duyệt web
  - Khác biệt:
    Cookie:
  - Thiết lập thời gian tồn tại của cookie đó -] tới hạn -] trình duyệt web sẽ tự động xoá dữ liệu đó đi.
  - Cookie: thêm/sửa/xoá bằng js (frontend) hoặc từ phía server - backend (PHP)
  - Khi gửi yêu cầu lên server (request URL) -] gửi toàn bộ cookie tương ứng (phù hợp) -] gửi kèm lên server -] đọc được nội dung của cookie.

### Mục 2: Ứng dụng -] Mini Project

### B1. Xây dựng database

    ```
    CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(50) NOT NULL,
    email VARCHAR(150),
    birthday DATE,
    password VARCHAR(32),
    address VARCHAR(200)
    )
    ```

### B2. Phat trien du an

    ```
    - Build thư viện dùng chung cho dự án
    - config.php
    - dbhelper.php
    - utility.php
    - Xay dung page
    - register.php
    - login.php
    - users.php
    - Phat trien them cac chuc nang theo yeu cau.
    (document.cookie = 'login=true;path=/')
    - Yeu quan ly login tren he thong website:
    - Xac dinh duoc tai khoan nao dang dang nhap vao he thong
    - Quan ly duoc trang thai dang nhap cua tai khoan do
    - Dam bao duoc tinh nang bao mat -] rat kho hack
    - Giai phap:
    - Login thanh cong -] token (cookie) -] value (token) khac nhau voi tung tai khoan nguoi dung & khac nhau tai tung thoi diem login
    - token (value) -] xac thuc dc token hop le khong -] tuong ung vs tai khoan nguoi dung nao
    -] Yeu cau: luu token do vao trong database

    alter table users
    add token varchar(32)
    ```
