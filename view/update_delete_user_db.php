<?
require("../model/db.php");
require("../controller/update_controller_user.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/update_delete.css">
</head>

<body>

    <div class="update_delete_block">
        <div class="card">
            <img class="card_img" src="<?= $result['img_user'] ?>" alt="#">
            <h3><?= $result['stat'] ?></h3>
            <br>
            <div class="card_subblock">
                <h3><?= $result['login'] ?></h3>
                <h3><?= $result['pass'] ?></h3>
            </div>
        </div>

        <div class="update_delete_forms_block">
            <form method="post">
                <input type="hidden" value="<?= $result['id_authorization'] ?>" name="id_user_update">
                <input class="input" required="required" autocomplete="off" type="text" value="<?= $result['login'] ?>"
                    name="login_user_update">
                <input class="input" required="required" autocomplete="off" type="text" value="<?= $result['pass'] ?>"
                    name="pass_user_update">
                <input class="input" autocomplete="off" type="text" value="<?= $result['img_user'] ?>"
                    name="img_user_update">
                <input id="update_button" type="submit" value="update">
            </form>

            <form method="post">
                <input type="hidden" value="<?= $result['id_authorization'] ?>" name="id_user_delete">
                <input id="delete_button" type="submit" value="delete">
            </form>
        </div>
    </div>

</body>

</html>