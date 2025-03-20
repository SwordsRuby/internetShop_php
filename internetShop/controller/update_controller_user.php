<?
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_SERVER['REQUEST_METHOD'])) {

    $url = "../view/insert_view_db.php?notification=true";

    if (isset($_POST['login_user_update']) && isset($_POST['pass_user_update']) && isset($_POST['id_user_update'])) {
        $query_update = "UPDATE authorization SET `img_user` = :img_user, `login` =  :login_user, `pass` =  :pass WHERE :id_user = `id_authorization`";

        $stmt = $sql->prepare($query_update);
        $stmt->bindParam(":img_user", $_POST['img_user_update']);
        $stmt->bindParam(":login_user", $_POST['login_user_update']);
        $stmt->bindParam(":pass", $_POST['pass_user_update']);
        $stmt->bindParam(":id_user", $_POST['id_user_update']);
        $stmt->execute();

        $_SESSION['notification'] = 'пользователь обновлен';
        header("Location: " . $url);
    }

    if (isset($_POST['id_user_delete'])) {
        $query_delete = "DELETE FROM authorization WHERE `id_authorization` = :id";

        $stmt = $sql->prepare($query_delete);
        $stmt->bindParam(":id", $_POST['id_user_delete']);
        $stmt->execute();

        $_SESSION['notification'] = 'пользователь удален';
        header("Location: " . $url);
    }

    if (isset($_GET['id'])) {
        $query = "SELECT * FROM authorization WHERE id_authorization = :id_update";

        $stmt = $sql->prepare($query);
        $stmt->bindParam(":id_update", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch();
        if (empty($result)) {
            die("user not found");
        }
    } else {
        die("user not found");
    }
}
