<!DOCTYPE html>
  
<?php
    //set name, value, thời gian sống của cookie
    setcookie('username', 'thehalfheart', time() + 3600);

    //khi ấn vào submit có name delete-cookie
    if (isset($_POST['delete-cookie'])) {
        // Xóa cookie name
        // để xóa cookie => thiết lập thời gian âm >= thời gian sống của cookie
        setcookie("username", "", time()-3600);
    }
?>
  
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>
            <?php
                if (isset($_COOKIE['username']))
                {
                echo $_COOKIE['username'];
                }
            ?>
        </h1>
        <form method="POST" action="">
            <input type="submit" name="delete-cookie" value="Xóa COOKIE"/>
        </form>
    </body>
</html>