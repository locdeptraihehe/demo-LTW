<?php
// import file autoload.php
require_once __DIR__ . '/autoload/autoload.php';

// lấy tham số "key" từ yêu cầu GET và tìm kiếm các sản phẩm có tên chứa từ khóa đó trong cơ sở dữ liệu.
$name = getInput('key');

// truy vấn từ csdl các danh mục lv=0 và đc chọn hiển thị trên trang chủ home=1
// kiểm tra số trang xem có đúng là 1 hay không để xác định đúng số trang người dùng đang xem
$category = $db->fetchsql("SELECT * FROM category WHERE level=0 AND home=1");
if (isset($_GET['page'])) {
    $p = $_GET['page'];
    if ($p == 0) $p = 1;
} else {
    $p = 1;
}
// tạo biến $sql = select từ bảng product    với name từ db sau đó đếm bằng biến total
$sql = "select * from product where name like '%$name%'";
// 'fetchsql' thực thị truy vấn và trả về kết quả tương ứng. Đếm số lượng bằng hàm 'count' và gán cho biến '$total'.
$total = count($db->fetchsql($sql));
// fetchJones truy vấn csdl và lấy ra sp tương ứng. Tham số đầu là bảng, tham số 2 câu truy vấn sql, tham số 3 tổng sluong,
// tham số 4 là số trang hiện tại,tham số 5 là số lượng sản phẩm mỗi trang, tham số 6 là cờ để cho phép phân trang
$product = $db->fetchJones('product', $sql, $total, $p, 3, true);
// kiểm tra biến product có phân trang hay k
if (isset($product['page'])) {
    $sotrang = $product['page'];
    unset($product['page']);
}
// số trang tìm kiếm lớn hơn số trang tổng cộng thì gán ngược lại
if ($sotrang < $p) $p = $sotrang;
?>
<!-- Kết nối với header.php -->
<?php require_once __DIR__ . '/layouts/header.php'; ?>
<div class="wrap">
    <aside class="sidebar">

        <div class="widget">
            <h2>Search</h2>
            <div class="wrapp">
                <div class="search">
                    <input type="text" placeholder="What are you looking for?" class="searchTerm">
                    <input type="submit" class="searchButton">
                    <div style="clear: both;">
                    </div>
                </div>
            </div>
        </div>

        <?php require_once __DIR__ . '/layouts/introduce.php'; ?>

        <div class="widget">
            <h2>DANH MỤC</h2>
            <!-- Duyệt qua mảng các phần tử category, trong div profile chứa div link, trong div link có 1 a href là id, xuất ra tên của cate -->
            <?php foreach ($category as $cate) : ?>
                <div class="profile-seemore">
                    <div class="seemore-link-icon">
                        <a href="category.php?id=<?php echo $cate['id'] ?>">
                            <p class="profile-link-icon-seemore">
                                <?php echo $cate['name'] ?>
                            </p>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </aside>
    <div class="blog">
        <!-- Duyệt qua mảng phần tử product để show ra tên,img,link vào blog_detail theo id -->
        <?php foreach ($product as $pro) : ?>
            <div class="conteudo">
                <div class="post-info">
                    
                </div>
                <h1> <?php echo $pro['name'] ?> </h1>
                <hr>
                <img src="<?php echo uploads() ?>product/<?php echo $pro['thundar'] ?>" alt="">
                <a href="<?php echo base_url() ?>blog_detail.php?id=<?php echo $pro['id'] ?>"" class=" continue-lendo">Xem chi tiết→</a>
            </div>
        <?php endforeach ?>

        <ul class="pagination pullright">
            <li class="page-item"><a class="page-link" href="?page=<?php echo --$p ?>">Previous</a></li>

            <?php for ($i = 1; $i <= $sotrang; $i++) : ?>

                <?php
                if (isset($_GET['page'])) {
                    $p = $_GET['page'];
                    if ($p == 0) $p = 1;
                } else {
                    $p = 1;
                }
                if ($sotrang < $p) $p = $sotrang;
                ?>

                <li class="page-item <?php echo ($i == $p) ? 'active' : '' ?>">
                    <a class="page-link" href="?page= <?php echo $i; ?>"><?php echo $i; ?></a>
                </li>

            <?php endfor; ?>

            <li class="page-item"><a class="page-link" href="?page=<?php echo ++$p ?>">Next</a></li>
        </ul>
        </nav>

    </div>
</div>
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300);
    @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    body {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
        background: #eee;
    }

    hr {
        background: #dedede;
        border: 0;
        height: 1px;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: #1abc9c;
    }

    .header {
        overflow: hidden;
        display: block;
        position: fixed;
        top: 0;
        margin: 0;
        width: 100%;
        height: 4px;
        text-align: center;
    }

    .header ul {
        margin: 0;
        padding: 0;
    }

    .header ul li {
        overflow: hidden;
        display: block;
        float: left;
        width: 20%;
        height: 4px;
    }

    .header .cor-1 {
        background: #f1c40f;
    }

    .header .cor-2 {
        background: #e67e22;
    }

    .header .cor-3 {
        background: #e74c3c;
    }

    .header .cor-4 {
        background: #9b59b6;
    }

    .header .cor-5 {
        background-color: hsla(10, 40%, 50%, 1);
    }

    .wrap {
        width: 950px;
        margin: 25px auto;
    }

    nav.menu ul {
        overflow: hidden;
        float: left;
        width: 650px;
        padding: 0;
        margin: 0 0 0;
        list-style: none;
        color: #fff;
        background: #1abc9c;
        -webkit-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.55);
        -moz-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.55);
        box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.55);
    }

    nav.menu ul li {
        float: left;
        margin: 0;
    }

    nav.menu ul a {
        display: block;
        padding: 25px;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        color: #fff;
        text-decoration: none;
        transition: all 0.5s ease;
    }

    nav.menu ul a:hover {
        background: #16a085;
        text-decoration: underline;
    }

    .sidebar {
        width: 275px;
        float: right;
    }

    .sidebar .widget {
        margin: 0 0 25px;
        padding: 25px;
        background: #fff;
        transition: all 0.5s ease;
        border-bottom: 2px solid #fff;
    }

    .sidebar .widget:hover {
        border-bottom: 2px solid #3498db;
    }

    .sidebar .widget h2 {
        margin: 0 0 15px;
        padding: 0;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 800;
        color: #3498db;
    }

    .sidebar .widget p {
        font-size: 14px;
    }

    .sidebar .widget p:last-child {
        margin: 0;
    }

    .blog {
        float: left;
    }

    .conteudo {
        width: 652px;
        margin: 25px auto;
        padding: 25px;
        background: #fff;
        border: 1px solid #dedede;
        -webkit-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
        -moz-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
        box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
    }

    .conteudo img {
        margin: 0 0 25px -25px;
        max-width: 650px;
        min-width: 650px;
    }

    .conteudo h1 {
        margin: 0 0 15px;
        padding: 0;
        font-family: Georgia;
        font-weight: normal;
        color: #666;
    }

    .conteudo p:last-child {
        margin: 0;
    }

    .conteudo .continue-lendo {
        color: #000;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.5s ease;
    }

    .conteudo .continue-lendo:hover {
        margin-left: 10px;
    }

    .post-info {
        float: right;
        margin: -10px 0 15px;
        font-size: 12px;
        text-transform: uppercase;
    }

    @media screen and (max-width: 960px) {

        .header {
            position: inherit;
        }

        .wrap {
            width: 90%;
            margin: 25px auto;
        }

        .sidebar {
            width: 100%;
            float: right;
            margin: 25px 0 0;
        }

        .sidebar .widget {
            padding: 5%;
        }

        nav.menu ul {
            width: 100%;
        }

        nav.menu ul {
            float: inherit;
        }

        nav.menu ul li {
            float: inherit;
            margin: 0;
        }

        nav.menu ul a {
            padding: 15px;
            font-size: 16px;
            border-bottom: 1px solid #16a085;
            border-top: 1px solid #1abf9f;
        }

        .blog {
            width: 90%;
        }

        .conteudo {
            float: inherit;
            width: 101%;
            padding: 5%;
            margin: 0 auto 25px;
            background: #fff;
            border: 1px solid #dedede;
        }

        .conteudo img {
            margin: 0 0 25px -5%;
            max-width: 110%;
            min-width: 110%;
        }

        .conteudo .continue-lendo:hover {
            margin-left: 0;
        }


    }

    @media screen and (max-width: 460px) {

        nav.menu ul a {
            padding: 15px;
            font-size: 14px;
        }

        .sidebar {
            display: none
        }

        .post-info {
            display: none;
        }

        .conteudo {
            margin: 25px auto;
        }

        .conteudo img {
            margin: -5% 0 25px -5%;
        }


    }



    .search {
        clear: both;
        width: 100%;
        position: relative
    }

    .searchTerm {
        float: left;
        width: 100%;
        border: 3px solid #00B4CC;
        padding: 5px;
        height: 20px;
        border-radius: 5px;
        outline: none;
        color: #9DBFAF;
    }

    .searchTerm:focus {
        color: #00B4CC;
    }

    .searchButton {
        position: absolute;
        right: -50px;
        width: 40px;
        height: 36px;
        opacity: 0;
        cursor: pointer;
    }

    .search:before {
        position: absolute;
        right: -50px;
        width: 40px;
        height: 36px;
        line-height: 36px;
        background: #00B4CC;
        text-align: center;
        color: #fff;
        border-radius: 5px;
        font-family: 'FontAwesome';
        content: '\f002';
    }

    /*Resize the wrap to see the search bar change!*/
    .wrapp {
        width: 50%;
        margin: 10% auto;
    }

    .conteudo {
        margin-top: 0px;
    }
</style>