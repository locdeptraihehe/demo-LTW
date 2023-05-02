<?php
session_start();
require_once __DIR__ . '/../libraries/Database.php';
require_once __DIR__ . '/../libraries/Function.php';

$db = new Database;
if (isset($_SESSION['admin_name'])) {
    echo "<script>location.href='" . base_url() . "/admin/'</script>";
}

$data =
    [
        'email' => postInput("email"),
        'password' => postInput("password")
    ];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $error = [];
    if (postInput('email') == '') {
        echo "<script type='text/javascript'>alert('Email không được để trống!!');</script>";
        // $error['email'] = "Email không được để trống!!";
    }

    if (postInput('password') == '') {
        echo "<script type='text/javascript'>alert('Mật khẩu không được để trống!!!!');</script>";
    } else {
        $data['password'] = MD5(postInput('password'));
    }

    //dang nhap thanh cong

    if (empty($error)) {

        $isset = $db->fetchOne("admin", "email = '" . $data['email'] . "' AND password = '" . $data['password'] . "' ");
        if ($isset > 0) {
            $_SESSION['admin_name'] = $isset['name'];
            $_SESSION['admin_id'] = $isset['id'];
            $_SESSION['admin_lv'] = intval($isset['level']);
            echo "<script>location.href='" . base_url() . "admin/'</script>";
        } else {
            $_SESSION['error'] = "Đăng nhập thất bại";
        }
    }
}
?>
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/css/util.css">
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/admin/assets/css/main.css">
<!--===============================================================================================-->
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

    body {
        background: #456;
        font-family: 'Open Sans', sans-serif;
    }

    .login {
        width: 400px;
        margin: 16px auto;
        font-size: 16px;
    }

    /* Reset top and bottom margins from certain elements */
    .login-header,
    .login p {
        margin-top: 0;
        margin-bottom: 0;
    }

    /* The triangle form is achieved by a CSS hack */
    .login-triangle {
        width: 0;
        margin-right: auto;
        margin-left: auto;
        border: 12px solid transparent;
        border-bottom-color: #28d;
    }

    .login-header {
        background: #28d;
        padding: 20px;
        font-size: 1.4em;
        font-weight: normal;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
    }

    .login-container {
        background: #ebebeb;
        padding: 12px;
    }

    /* Every row inside .login-container is defined with p tags */
    .login p {
        padding: 12px;
    }

    .login input {
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        padding: 16px;
        outline: 0;
        font-family: inherit;
        font-size: 0.95em;
    }

    .login input[type="email"],
    .login input[type="password"] {
        background: #fff;
        border-color: #bbb;
        color: #555;
    }

    /* Text fields' focus effect */
    .login input[type="email"]:focus,
    .login input[type="password"]:focus {
        border-color: #888;
    }

    .login input[type="submit"] {
        background: #28d;
        border-color: transparent;
        color: #fff;
        cursor: pointer;
    }

    .login input[type="submit"]:hover {
        background: #17c;
    }

    /* Buttons' focus effect */
    .login input[type="submit"]:focus {
        border-color: #05a;
    }
</style>

<body>
    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Đăng nhập</h2>

        <form class="login100-form validate-form" style="padding-top:20px" action="" method="POST" enctype="multipart/form-data">

            <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Vui lòng điền Email">
                <input class="input100" type="text" name="email" placeholder="Vui lòng điền Email">
                <span class="focus-input100" data-placeholder="Email"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-50" data-validate="Vui lòng điền mật khẩu">
                <input class="input100" type="password" placeholder="Vui lòng điền mật khẩu" name="password">
                <span class="focus-input100" data-placeholder="Password"></span>
            </div>
            <div class="container-login100-form-btn">
                <input class="login100-form-btn" type="submit" name="login" id="login" value="Đăng nhập">
                </input>
            </div>
        </form>
    </div>

    <!--===============================================================================================-->
    <script src="/shop-do-an-nhanh/admin/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/shop-do-an-nhanh/admin/assets/vendor/animsition/js/animsition.min.js"></script>
    <script src="/shop-do-an-nhanh/admin/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="/shop-do-an-nhanh/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/shop-do-an-nhanh/admin/assets/vendor/select2/select2.min.js"></script>
    <script src="/shop-do-an-nhanh/admin/assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="/shop-do-an-nhanh/admin/assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/shop-do-an-nhanh/admin/assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="/shop-do-an-nhanh/admin/assets/js/main.js"></script>