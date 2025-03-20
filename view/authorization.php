<?
require("../model/db.php");
require("../controller/authorization_controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/auto_reg.css">
</head>

<body>

    <form class="form" method="post">
        <div class="form_block">
            <h1>Authorization</h1>
            <input placeholder="login" required="required" autocomplete="off" type="text" name="login">
            <input placeholder="password" required="required" autocomplete="off" type="text" name="password">
            <input type="submit" value="enter">
        </div>
    </form>

</body>

</html>