<?php

//Быстрый звонок


$db = new mysqli('a_level_mysql', 'myapp', 'myapp', 'iq');


if ($db->connect_error) {
    die("Ошибка соединения: " . $db->connect_error);
}


if (isset($_POST['phone'])) {
    $phone = trim($_POST['phone']);
    

    $query = "INSERT INTO calls (phone, created_at, updated_at, process) VALUES ('$phone', NOW(), NOW(), false)";
    $result = $db->query($query);
    
    if ($result) {
        echo "Ваша заявка была отправлена успешно!";
    } else {
        echo "Ошибка при отправке заявки!";
    }
}

var_dump($_POST);
