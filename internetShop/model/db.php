<?
try {
    $dbn = "mysql:host=localhost;dbname=clothesDB;charset=utf8;";
    $username = "root";
    $password = "";
    $sql = new PDO($dbn, $username, $password);
} catch (PDOException $e) {
    die($e->getMessage());
}
?>