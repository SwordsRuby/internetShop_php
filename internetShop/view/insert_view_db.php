<?
if (session_status() == PHP_SESSION_NONE)
    session_start();
require("../model/db.php");
require("../controller/insert_view_db_controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/catalog.css">
</head>

<body>
    <div class="form_db_block">
        <form class="type_select" method="post">
            <div>
                <input type="radio" name="db_view" value="product" id="product_radio">
                <label for="product_radio">product</label>
            </div>

            <div>
                <input type="radio" name="db_view" value="users" id="users_radio">
                <label for="product_radio">users</label>
            </div>

            <input type="submit" value="select type">
        </form>

        <form class="type_select" method="post">
            <input type="hidden" value="true" name="log_out">
            <input class="log_out_link" type="submit" value="Log out">
        </form>
    </div>

    <? if (isset($_SESSION['db_view']) && $_SESSION['db_view'] == 'product'): ?>
        <div class="catalog_main_block">
            <div class="cards">
                <? if (isset($result)): ?>
                    <? foreach ($result as $prod): ?>
                        <a href="update_delete_db.php?id=<?= $prod['id_clothes'] ?>">
                            <div class="card">
                                <img class="card_img" src="<?= $prod['img'] ?>" alt="#">
                                <hr>
                                <div class="card_subblock">
                                    <h3><?= $prod['title'] ?></h3>
                                    <h3><?= $prod['price'] ?> ₽</h3>
                                </div>
                            </div>
                        </a>
                    <? endforeach; ?>
                <? endif; ?>
            </div>

            <form method="post" class="insert_block">
                <h2>Insert data</h2>
                <input class="input" placeholder="title" required="required" autocomplete="off" type="text"
                    name="title_insert">
                <input class="input" placeholder="price" required="required" required autocomplete="off" type="number"
                    name="price_insert">
                <input class="input" placeholder="img" required="required" required autocomplete="off" type="text"
                    name="img_insert">
                <input type="submit" value="enter">
            </form>
        </div>

    <? else: ?>

        <div class="catalog_main_block">
            <div class="cards">
                <? if (isset($result_users)): ?>
                    <? foreach ($result_users as $user): ?>
                        <a href="update_delete_user_db.php?id=<?= $user['id_authorization'] ?>">
                            <div class="card">
                                <img class="card_img" src="<?= $user['img_user'] ?>" alt="#">
                                <h3><?= $user['stat'] ?></h3>
                                <br>
                                <div class="card_subblock">
                                    <h3><?= $user['login'] ?></h3>
                                    <h3><?= $user['pass'] ?></h3>
                                </div>
                            </div>
                        </a>
                    <? endforeach; ?>
                <? endif; ?>
            </div>

            <form method="post" class="insert_block">
                <h2>Insert data</h2>
                <input class="input" placeholder="login" required="required" autocomplete="off" type="text"
                    name="login_user">
                <input class="input" placeholder="password" required="required" autocomplete="off" type="text"
                    name="pass_user">

                <input class="input" placeholder="img" autocomplete="off" type="text" name="img_user">
                <div>
                    <input required="required" type="radio" name="stat_user" value="admin" id="product_radio">
                    <label for="product_radio">admin</label>
                </div>
                <div>
                    <input checked A required="required" type="radio" name="stat_user" value="user" id="users_radio">
                    <label for="product_radio">user</label>
                </div>
                <input type="submit" value="enter">
            </form>
        </div>
    <? endif; ?>
</body>

</html>