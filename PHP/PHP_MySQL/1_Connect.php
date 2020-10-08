<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "demo";      // Khai báo database

// Kết nối database tintuc
$conn = mysqli_connect($server, $username, $password, $dbname)
or die ('Không thể kết nối tới database');
 
// BƯỚC 2: TẠO CÂU TRUY VẤN
$sql = 'SELECT * FROM sinhvien';
 
// BƯỚC 3: YÊU CẦU THỰC THI CÂU TRUY VẤN
$result = mysqli_query($conn, $sql);
 
// BƯỚC 4: XỬ LÝ KẾT QUẢ MYSQL TRẢ VỀ
while ($row = mysqli_fetch_assoc($result)){
    foreach ($row as $key => $value) {
        echo $key . '=>' . $value . '</br>';
    }
}
?>