<?php

$var = '0';
var_dump(empty($var));
 
$var = 0;
var_dump(empty($var));
 
$var = '';
var_dump(empty($var));
 
$var = FALSE;
var_dump(empty($var));
 
$var = NULL;
var_dump(empty($var));
 
var_dump(empty($bien_khong_ton_tai));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //kiểm tra dữ liệu khi người dùng đăng nhập
        if (empty($_POST['username'])){
            echo 'Bạn chưa nhập tên đăng nhập';
        }

        //tương tự với isset
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        if ($username == '') {
            echo 'Bạn chưa nhập tên đăng nhập';
        }
        
        if ($password == '') {
            echo 'Bạn chưa nhập mật khẩu';
        }
    ?>
</body>
</html>