    <link rel="stylesheet" href="../css/footer.css">

    <!-- footer -->
    <footer class="my_120">
        <div class="footer_block main_subblock container">
            <img src="img/logo/logo.png" alt="logo" class="logo">

            <h2>© Шарафиев Амир Рафаэльевич 325ВЕБ</h2>

            <? if (isset($_SESSION["name_user"]) && isset($_SESSION["img_user"])): ?>
                <form method="post">
                    <input type="hidden" value="true" name="log_out">
                    <input class="button_auth" type="submit" value="Log out">
                </form>
            <? else: ?>
                <a class="button_auth" href="view/authorization.php">Авторизация</a>
            <? endif; ?>
        </div>
    </footer>
    <!-- footer -->