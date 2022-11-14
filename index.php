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
include_once './controllers/dashboard_controller.php';
include_once './controllers/ql_product_controller.php';

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
    case 'ql_product':
        show_page_qlProduct();
        break;
    case 'add_product':
        show_add_product();
        break;
    default:
        show_page_404();
}
// thay đổi commit