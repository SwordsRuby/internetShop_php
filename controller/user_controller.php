<?
$url = "../index.php";
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_SERVER['REQUEST_METHOD'])) {
    if (isset($_POST['password_update']) && isset($_POST['img_update']) && isset($_POST['login_update'])) {
        $query_user_update = "UPDATE `authorization` SET `img_user` = :img_update, `login` = :login_user, `pass` = :pass_update WHERE :id_update = `id_authorization`";

        $_SESSION["name_user"] = $_POST['login_update'];
        $_SESSION["img_user"] = $_POST['img_update'];

        $stmt = $sql->prepare($query_user_update);
        $stmt->bindParam(':img_update', $_POST['img_update']);
        $stmt->bindParam(':pass_update', $_POST['password_update']);
        $stmt->bindParam(':login_user', $_POST['login_update']);
        $stmt->bindParam(':id_update', $_POST['id_update']);
        $stmt->execute();
        header('Location: ' . $url);
    }
}

if (isset($_SESSION["name_user"])) {
    $query_user = "SELECT * FROM `authorization` WHERE `login` = :name_user";

    $stmt = $sql->prepare($query_user);
    $stmt->bindParam(":name_user", $_SESSION["name_user"]);
    $stmt->execute();
    $result_user = $stmt->fetch();
}

if (!isset($_SESSION["name_user"]) or !isset($_SESSION["admin"]) or $_SESSION["admin"] == true or !isset($_SESSION["img_user"])) {
    header('Location: ' . $url);
}
