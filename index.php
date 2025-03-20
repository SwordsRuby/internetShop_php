<?
require("model/db.php");
require("controller/index_controller.php");
if (session_status() == PHP_SESSION_NONE)
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Легенда</title>

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <!-- style -->

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logo/favicon.svg" type="image/x-icon">
    <!-- favicon -->
</head>

<body>
    <!-- header -->
    <?
    require("view/header.php");
    ?>
    <!-- header -->

    <!-- main -->
    <?
    require("view/main.php");
    ?>
    <!-- main -->

    <!-- footer -->
    <?
    require("view/footer.php");
    ?>
    <!-- footer -->

    <!-- script -->
    <script src="js/main.js"></script>
    <!-- script -->
</body>

</html>