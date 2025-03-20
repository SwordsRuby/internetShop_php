<?
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_SERVER['REQUEST_METHOD'])) {
    $url = "../view/insert_view_db.php?notification=true";
    if (isset($_POST['id_update']) && isset($_POST['img_update']) && isset($_POST['title_update']) && isset($_POST['price_update'])) {
        $query_update = "UPDATE clothes SET `img` = :img_update, `price` =  :price_update, `title` =  :title_update WHERE :id_update = `id_clothes`";

        $stmt = $sql->prepare($query_update);
        $stmt->bindParam(":img_update", $_POST['img_update']);
        $stmt->bindParam(":title_update", $_POST['title_update']);
        $stmt->bindParam(":price_update", $_POST['price_update']);
        $stmt->bindParam(":id_update", $_POST['id_update']);
        $stmt->execute();

        $_SESSION['notification'] = 'товар обновлен';
        header("Location: " . $url);
    }

    if (isset($_POST['id_delete'])) {
        $query_delete = "DELETE FROM clothes WHERE `id_clothes` = :id_delete";

        $stmt = $sql->prepare($query_delete);
        $stmt->bindParam(":id_delete", $_POST['id_delete']);
        $stmt->execute();

        $_SESSION['notification'] = 'товар удален';
        header("Location: " . $url);
    }



    if (isset($_GET['id'])) {
        $query = "SELECT * FROM clothes WHERE id_clothes = :id_update";

        $stmt = $sql->prepare($query);
        $stmt->bindParam(":id_update", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch();
        if (empty($result)) {
            die("product not found");
        }
    } else {
        die("product not found");
    }
}
