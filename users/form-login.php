<?php
$password = $email = '';

if (!empty($_POST)) {
    $password = getPOST('password');
    $email    = getPOST('email');

    if ($password != '' && $email != '') {
        //save user into database
        $password = getPwdSecurity($password);

        $sql  = "select * from users where email = '$email' and password = '$password'";
        $data = executeResult($sql);
        if ($data != null && count($data) > 0) {

            // Tạo token
            $token = getPwdSecurity(time() . $data[0]['email']);
            setcookie('token', $token, time() + 7 * 24 * 60 * 60, '/');

            $sql = "update users set token = '$token' where id = " . $data[0]['id'];
            execute($sql);

            //login thanh cong -> chuyen sang trang login.php
            header('Location: users.php');
            die();
            var_dump($data);
        }
    }
}