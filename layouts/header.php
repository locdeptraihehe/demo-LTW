<?php
require_once __DIR__ . '/../autoload/autoload.php';


$name = getInput('keywork');

if (getInput('keywork') != '') {

    header("location:search.php?key=" . $name);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/chitietsanpham.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/bootstrap.min.css">
    <!-- Jquery -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>
    <!---->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick-theme.css" />
    <!--slide-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style.css">
    <!-- owl carousel libraries -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/lib/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/lib/owlcarousel/owl.theme.default.min.css">
    <script src="<?php echo base_url() ?>public/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/frontend/js/navmenu.js"></script>
</head>

<body>
    <section>


        <div class="item t1" style="margin-top: 2px;font-weight: bold;">
            <?php if (isset($_SESSION['name_user'])) : ?>
                Xin chào : <?php echo $_SESSION['name_user'] ?>
        </div>
    </section>
    <section class="topnav" id="myTopnav">
        <div class="container">
            <a href="index.php"><img src="<?php echo base_url() ?>public/uploads/product/logo3.jpg" alt="" width="30" height=""></a>
            <a href="index.php">Trang chủ</a>
            <a href="dienthoai.php">THỰC ĐƠN</a>
            <div class="dropdown">
                <button class="dropbtn">TÀI KHOẢN
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">



                <?php else : ?>
                    <section class="topnav" id="myTopnav">
                        <a href="index.php">TRANG CHỦ</a>
                        <a href="gioithieu.php">GIỚI THIỆU</a>

                        <div class="dropdown">
                            <button class="dropbtn">TÀI KHOẢN
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="http://localhost:30/blog-main/admin/login.php/"><i class="fa fa-unlock" style="color:#fff;"></i> Đăng nhập</a>

                            <?php endif ?>
                            </div>
                        </div>
                        <a class="search1">
                            <form class="form-inline">
                                <input type="text" name="keywork" placeholder=" Tìm kiếm" class="form-control">
                                <button type="submit" href="#" class="btn btn-default ban1"><i class="fa fa-search"></i></button>
                                <?php if (isset($_SESSION['error_s'])) : ?>
                                    {
                                    echo "<script>
                                        alert('<?php echo $_SESSION['error_s'];
                                                unset($_SESSION['error_s']); ?>');
                                        location.href = 'index.php'
                                    </script>";
                                    }
                                <?php endif; ?>
                            </form>
                        </a>
                        <a href="javascript:void(0);" class="icon trai" onclick="myFunction()">&#9776;</a>
                </div>
    </section>
    </section>
    </div>
    </div>
    </div>
    <!--ENDMENUNAV-->
    <style>
        .topnav {
            margin: 25px auto;
            width: 950px;
        }
    </style>