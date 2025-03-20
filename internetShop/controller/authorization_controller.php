<?
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_SERVER['REQUEST_METHOD'])) {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $query_authorization = "SELECT * FROM `authorization` WHERE :login_user = `login`";
        $stmt = $sql->prepare($query_authorization);
        $stmt->bindParam(":login_user", $_POST['login']);
        $stmt->execute();
        $user = $stmt->fetch();

        $urlAdmin = "../view/insert_view_db.php";
        $urlUser = "../index.php";
        if (!empty($user) && isset($_POST['password'])) {
            if ($user['pass'] == $_POST['password'] && $user['stat'] == "admin") {
                header("Location: " . $urlAdmin);
                $_SESSION["name_user"] = $user['login'];
                $_SESSION["admin"] = true;
            } else if ($user['pass'] == $_POST['password'] && $user['stat'] == "user") {
                header("Location: " . $urlUser);
                $_SESSION["name_user"] = $user['login'];
                $_SESSION["img_user"] = $user['img_user'];
                $_SESSION["admin"] = false;
            } else {
                echo "<script> alert('Incorrect user or password'); </script>";
            }
        }
    }

    if (isset($_POST['login_reg']) && isset($_POST['password_reg'])) {
        $query_reg = "INSERT INTO `authorization` (`login`, `pass`, `stat`) VALUE (:login_reg, :password_reg, 'user')";

        $stmt = $sql->prepare($query_reg);
        $stmt->bindParam(":login_reg", $_POST['login_reg']);
        $stmt->bindParam(":password_reg", $_POST['password_reg']);
        $stmt->execute();
        $url = "authorization.php";
        header('Location: ' . $url);
    }
}
