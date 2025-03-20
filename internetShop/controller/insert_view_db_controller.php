<?
$url = "../index.php";
$urlAdmin = "insert_view_db.php?notification=true";
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_SERVER['REQUEST_METHOD'])) {
    if (isset($_POST['title_insert']) && isset($_POST['price_insert']) && isset($_POST['img_insert'])) {
        $query_insert = "INSERT INTO clothes (`img`, `price`, `title`) VALUES (:img_insert,  :price_insert, :title_insert) ";

        $stmt = $sql->prepare($query_insert);
        $stmt->bindParam(":img_insert", $_POST['img_insert']);
        $stmt->bindParam(":title_insert", $_POST['title_insert']);
        $stmt->bindParam(":price_insert", $_POST['price_insert']);
        $stmt->execute();

        $_GET['notification'] = false;
        $_SESSION['notification'] = 'товар добавлен';
        header('Location: ' . $urlAdmin);
    }

    if (isset($_POST['login_user']) && isset($_POST['pass_user']) && isset($_POST['stat_user'])) {
        if (empty($_POST['img_user'])) {
            $_POST['img_user'] = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYAhBdjd5Dc183RfLQZmtTfkKt34zxUU5iEw&s';
        }
        $query_insert_user = "INSERT INTO authorization (`img_user`, `login`, `pass`, `stat`) VALUES (:img_user,  :login_user, :pass_user, :stat_user) ";

        $stmt = $sql->prepare($query_insert_user);
        $stmt->bindParam(":img_user", $_POST['img_user']);
        $stmt->bindParam(":login_user", $_POST['login_user']);
        $stmt->bindParam(":pass_user", $_POST['pass_user']);
        $stmt->bindParam(":stat_user", $_POST['stat_user']);
        $stmt->execute();

        $_GET['notification'] = false;
        $_SESSION['notification'] = 'пользователь добавлен';
        header('Location: ' . $urlAdmin);
    }
}

if (isset($_POST['log_out'])) {
    echo "<script> alert('Log out'); </script>";
    unset($_SESSION["name_user"]);
    unset($_SESSION["admin"]);
    header('Location: ' . $url);
}

if (!isset($_SESSION["name_user"]) or !isset($_SESSION["admin"]) or $_SESSION["admin"] == false) {
    header('Location: ' . $url);
}

if (isset($_SESSION['notification']) && isset($_GET['notification']) && $_GET['notification'] == true) {
    echo '<h1 class="notification_title">' . $_SESSION['notification'] . '</h1>';
    unset($_SESSION['notification']);
    $_GET['notification'] = false;
    unset($_GET['notification']);
}

$query_select = "SELECT * FROM clothes";
$stmt = $sql->prepare($query_select);
$stmt->execute();
$result = $stmt->fetchAll();

$query_select_users = "SELECT * FROM authorization";
$stmt = $sql->prepare($query_select_users);
$stmt->execute();
$result_users = $stmt->fetchAll();

if (isset($_POST['db_view'])) {
    $_SESSION['db_view'] = $_POST['db_view'];
}
