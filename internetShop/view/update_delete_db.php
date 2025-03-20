<?
require("../model/db.php");
require("../controller/update_controller_product.php");
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
            <img class="card_img" src="<?= $result['img'] ?>" alt="#">
            <hr>
            <div class="card_subblock">
                <h3><?= $result['title'] ?></h3>
                <h3><?= $result['price'] ?> ₽</h3>
            </div>
        </div>

        <div class="update_delete_forms_block">
            <form method="post">
                <input type="hidden" value="<?= $result['id_clothes'] ?>" name="id_update">
                <input class="input" required="required" autocomplete="off" type="text" value="<?= $result['title'] ?>"
                    name="title_update">
                <input class="input" required="required" autocomplete="off" type="number"
                    value="<?= $result['price'] ?>" name="price_update">
                <input class="input" required="required" autocomplete="off" type="text" value="<?= $result['img'] ?>"
                    name="img_update">
                <input id="update_button" type="submit" value="update">
            </form>

            <form method="post">
                <input type="hidden" value="<?= $result['id_clothes'] ?>" name="id_delete">
                <input id="delete_button" type="submit" value="delete">
            </form>
        </div>
    </div>

</body>

</html>