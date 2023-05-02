<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    if($_SESSION['admin_lv'] == 1)
    {
        $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này!";
        redirectAdmin("admin");
    }

    $id = intval(getInput('id'));

    $product = $db->fetchID("product",$id);
    if( empty($product))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("admin");
    }

    $num = $db->delete("product",$id);
    if($num > 0)
    {
            $_SESSION['success'] = "Xóa thành công!";
            redirectAdmin("product");
    }
    else
    {
             $_SESSION['error'] = "Xóa thất bại!";
             redirectAdmin("product");
    }

?>