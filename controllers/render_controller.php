<?php 
/*   function render dữ liệu   */
function render($path,$data = []) {
    extract($data);
    $view = "view/" . $path . ".php";
    include $view;
}