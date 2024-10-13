<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];
    file_put_contents('info.txt', $content);
    header('Location: lala.php');
    exit;
}
?>
