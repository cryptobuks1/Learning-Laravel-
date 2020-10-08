<!DOCTYPE html>
  
<?php
    //khi ấn vào submit có name delete-cookie
    if (isset($_POST['delete-cookie'])) {
        // Xóa cookie name
        // để xóa cookie => thiết lập thời gian âm >= thời gian sống của cookie
        setcookie("username", "", time()-3600);
    }
    //khi ấn vào submit có name delete-cookie
    if (isset($_POST['save-cookie'])) {
        // SAVE cookie name
        // set name, value, thời gian sống của cookie
        setcookie('username', 'thehalfheart', time() + 3600);
    }
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST" action="">
            <h1>
                <?php
                    if (isset($_COOKIE['username']))
                    {
                        echo 'COOKIE là '.$_COOKIE['username'];
                    }
                    else{
                        echo 'Đã Xóa COOKIE';
                    }
                ?>
            </h1>
            <input type="submit" name="delete-cookie" value="Xóa COOKIE"/>
            <input type="submit" name="save-cookie" value="SAVE COOKIE"/>
        </form>
    </body>
</html>