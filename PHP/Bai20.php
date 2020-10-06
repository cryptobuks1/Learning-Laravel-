<?php

$fp = @fopen('demo.txt', "r");
  
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    // Đọc file và trả về nội dung
    $data = fread($fp, filesize('demo.txt'));
    echo $data;
}