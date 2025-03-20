   <link rel="stylesheet" href="../css/header.css">

   <div class="header_baner_block">
       <!-- header -->
       <header>
           <div class="header">
               <img src="img/logo/logo.png" alt="logo" class="logo">
               <div class="header_block">
                   <? if (isset($_SESSION["name_user"]) && isset($_SESSION["img_user"])): ?>
                       <div class="img_header_block">
                           <img class="img_header" src="<?= $_SESSION["img_user"] ?>" alt="#">
                           <a href="view/user.php"><?= $_SESSION["name_user"] ?></a>
                       </div>
                   <? else: ?>
                       <a class="button_reg" href="view/registration.php">Регистрация</a>
                       <a class="button_auth" href="view/authorization.php">Авторизация</a>
                   <? endif; ?>
               </div>
           </div>
       </header>
       <!-- header -->

       <!-- banner -->
       <div id="banner" class="banner">
           <div class="banner_block">
               <h1>Легенда - это ты</h1>
               <a href="#catalog">К коллекции</a>
           </div>
       </div>
       <!-- banner -->
   </div>