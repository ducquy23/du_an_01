<?php
/*
    Models
*/
include_once './model/connection.php';
/*
    Controllers
*/
include_once './controllers/render_controller.php';
include_once './controllers/home_controller.php';
/*
    Admin
*/
include_once './controllers/dashboard_controller.php';
include_once './controllers/ql_product_controller.php';
include_once './controllers/ql_user_controller.php';
include_once './controllers/ql_category_controller.php';
include_once './controllers/ql_category_controller.php';
include_once './controllers/ql_comment_controller.php';
include_once './controllers/ql_thongke_controller.php';

$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : "/"; // Kiểm tra trên URL có tồn tại biến $ctr không
switch ($ctr) {
    case '/':
    case 'home':
        show_page_home();
        break;
    case 'home_collection':
        show_page_home_collection();
        break;
    case 'dashboard':
        show_page_dashboard();
        break;
        //
    case 'ql_product':
        show_page_qlProduct();
        break;
    case 'add_product':
        show_add_product();
        break;
    case 'update_product':
        show_update_product();
        break;
        //
    case 'ql_user':
        show_page_user();
        break;
    case 'add_user':
        show_add_user();
        break;
        //
    case 'ql_cate':
        show_page_cate();
        break;
    case 'add_cate':
        show_add_cate();
        break;
    case 'update_cate':
        show_update_cate();
        break;
        //
    case 'ql_comment':
        show_page_cmt();
        break;
        //
    case 'ql_thongke':
        show_page_thongke();
        break;
        //
    case 'detail_product':
        show_page_detail();
        break;
    default:
        show_page_404();
}
// thay đổi commit 123f