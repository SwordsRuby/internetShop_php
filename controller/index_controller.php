<?
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_SERVER['REQUEST_METHOD'])) {
    $url = "../index.php";
    if (isset($_POST['title_review_form']) && isset($_POST['text_review_form']) && isset($_POST['img_review_form'])) {
        $query_review_send = "SELECT title_review FROM reviews WHERE :title_review = `title_review`";

        $stmt = $sql->prepare($query_review_send);
        $stmt->bindParam(":title_review", $_POST['title_review_form']);
        $stmt->execute();
        $result_review_send = $stmt->fetch();

        if ($result_review_send === false) {
            $query_insert_review = "INSERT INTO reviews (`img_review`, `text_review`, `title_review`) VALUES (:img_review,  :text_review, :title_review) ";

            $stmt = $sql->prepare($query_insert_review);
            $stmt->bindParam(":img_review", $_POST['img_review_form']);
            $stmt->bindParam(":title_review", $_POST['title_review_form']);
            $stmt->bindParam(":text_review", $_POST['text_review_form']);
            $stmt->execute();
            echo "<script> alert('Review send'); </script>";
            header('Location: ' . $url);
        } else {
            echo "<script> alert('Review not send'); </script>";
        }
    }

    if (isset($_POST['log_out'])) {
        echo "<script> alert('Log out'); </script>";
        unset($_SESSION["name_user"]);
        unset($_SESSION["img_user"]);
        header('Location: ' . $url);
    }
}

$query_select = "SELECT * FROM clothes";
$stmt = $sql->prepare($query_select);
$stmt->execute();
$result = $stmt->fetchAll();

$query_select_reviews = "SELECT * FROM reviews ORDER BY id_review DESC LIMIT 15";
$stmt = $sql->prepare($query_select_reviews);
$stmt->execute();
$result_reviews = $stmt->fetchAll();
