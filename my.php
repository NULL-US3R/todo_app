<!doctype html>
<html>
    <head>
        <title>ToDoApp - My page</title>
    </head>
    <body>
        <?php
        $db_uname = "root";
        $db_psk = "rootroot";
        $db_address = "db";
        $db_name = "mydb";
        $conn = new mysqli($db_address, $db_uname, $db_psk, $db_name);
        $uname = $_POST["uname"];
        $psk = $_POST["psk"];
        $p = $conn
            ->query("SELECT psk FROM users WHERE usr='$uname'")
            ->fetch_row()[0];
        if ($psk != $p) {
            $conn->close();
            header("Location: /login.php");
            die();
        }
        $conn->close();
        echo "Welcome $uname!";
        ?>
    </body>
</html>
