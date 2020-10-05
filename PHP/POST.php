<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            <table>
            <tr>
                <th>
                    Username: 
                </th>
                <th>
                    <input type="text" name="username1" value=""/> <br/>
                </th>
            </tr>
            <tr>
                <th>
                    password: 
                </th>
                <th>
                    <input type="password" name="password" value=""/><br/>
                </th>
            </tr>
            </table>
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
            <?php
                // Nếu người dùng click vào button Gửi Dữ Liệu
                // Vì button đó tên là form_click nên đó cũng là
                // tên của key nằm trong biến $_POST
                if (isset($_POST['form_click'])){
                    echo '<br/>';
                    echo 'Tên đăng nhập là: ' . $_POST['username1'];
                    echo '<br/>';
                    echo 'Mật khẩu là: ' . $_POST['password'];
                }
           ?>
        </form>
    </body>
</html>