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
  - Thiết lập thời gian tồn tại của cookie đó -> tới hạn -> trình duyệt web sẽ tự động xoá dữ liệu đó đi.
  - Cookie: thêm/sửa/xoá bằng js (frontend) hoặc từ phía server - backend (PHP)
  - Khi gửi yêu cầu lên server (request URL) -> gửi toàn bộ cookie tương ứng (phù hợp) -> gửi kèm lên server -> đọc được nội dung của cookie.

### Mục 2: Ứng dụng -] Mini Project

### B1. Xây dựng database

```sql
    CREATE TABLE users (
        id INT PRIMARY KEY AUTO_INCREMENT,
        fullname VARCHAR(50) NOT NULL,
        email VARCHAR(150),
        birthday DATE,
        password VARCHAR(32),
        address VARCHAR(200)
    )
```

### B2. Phát triển dự án

    > Build thư viện dùng chung cho dự án
    - config.php
    - dbhelper.php
    - utility.php
    - Xây dựng page
    - register.php
    - login.php
    - users.php

    > Phát triển thêm các chức năng theo yêu cầu.
    (document.cookie = 'login=true;path=/')
    - Yêu cầu quản lý login trên hệ thống website:
    - Xác định được tài khoản nào đang đăng nhập vào hệ thống
    - Quản lý được trạng thái đăng nhập của tài khoản đó
    - Đảm bảo được tính năng bảo mật -> rất khó để hack

    > Giải pháp:
    - Login thành công -> token (cookie) -> value (token) khác nhau với từng tài khoản người dùng & khác nhau với từng thời điểm login
    - token (value) -> xác thực được token hợp lệ hay không -> tương ứng với tài khoản người dùng nào
    -> Yêu cầu: lưu token vào trong database

```sql
    ALTER TABLE users ADD token VARCHAR(32)
```
