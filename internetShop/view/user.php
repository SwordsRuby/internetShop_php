<?
require("../model/db.php");
require("../controller/user_controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/auto_reg.css">
</head>

<body>

    <form class="form" method="post">
        <div class="form_block">
            <h1>USER DATA</h1>
            <img class="img_user_update" src="<?= $result_user["img_user"] ?>" alt="#">
            <input value="<?= $result_user['id_authorization'] ?>" type="hidden" name="id_update">
            <input value="<?= $result_user['login'] ?>" placeholder="login" required="required" autocomplete="off" type="text" name="login_update">
            <input value="<?= $result_user['pass'] ?>" placeholder="password" required="required" autocomplete="off" type="text" name="password_update">
            <input value="<?= $result_user['img_user'] ?>" placeholder="img" required="required" autocomplete="off" type="text" name="img_update">
            <input type="submit" value="update user data">
        </div>
    </form>

</body>

</html>