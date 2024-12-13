<?php
require_once('datebase.php');
    // Получение данных из формы
    $avatar = file_get_contents($_FILES['image']['tmp_name']);

    // Запрос для сохранения данных
    $stmt = $conn->prepare("UPDATE `user` SET image = '$avatar' WHERE logon = '");
    $stmt->bind_param("sb", $_COOKIE['user'], $avatar);
    $stmt->send_long_data(1, $avatar);
    $stmt->execute();

    echo "Avatar uploaded successfully!";
    $stmt->close();
    $conn->close();
?>