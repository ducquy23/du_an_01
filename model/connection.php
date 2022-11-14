<?php
/*
    function connection database
*/
function connection($query,$data)
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=du_an_01;charset=utf8", "root", "");
        $stmt = $conn->prepare($query);
        $stmt->execute($data);
        return $stmt;
    } catch (PDOException $e) {
        echo "Lỗi kết nối dữ liệu :" . $e->getMessage();
    }
}
/*
   function lấy tất cả trường dữ liệu 
*/
function getAll($query)
{
    $result = connection($query,[])->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
/*
   function lấy một trường dữ liệu 
*/
function getOne($query)
{
    $result = connection($query,[])->fetch(PDO::FETCH_ASSOC);
    return $result;
}



