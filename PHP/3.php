<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require('Bai3.php');

    // Hình chữ nhật cần tính toán
    $width = 100;
    $height = 100;

    echo "<h2>Hình chữ nhật có chiều rộng $width và chiều cao $height</h2>";

    // Tạo đối tượng từ class Rectangle và gán kích thước
    $rect = new Rectangle($width, $height);

    echo '<p>Chu vi hình chữ nhật: ' . $rect->getPerimeter() . '</p>';
    echo '<p>Diện tích hình chữ nhật: ' . $rect->getArea() . '</p>';

    if ($rect->isSquare()) {
    echo '<p>Hình chữ nhật này là hình vuông!</p>';
    } else {
    echo '<p>Hình chữ nhật này không phải là hình vuông!</p>';
    }

    // Xóa đối tượng sau khi sử dụng
    unset($rect);
    ?>
</body>
</html>