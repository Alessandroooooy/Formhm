<?php

//Быстрый звонок

// Подключение к базе данных
$db = new mysqli('a_level_mysql', 'myapp', 'myapp', 'iq');

// Проверка соединения
if ($db->connect_error) {
    die("Ошибка соединения: " . $db->connect_error);
}

// Получение данных из формы
if (isset($_POST['phone'])) {
    $phone = trim($_POST['phone']);
    
    // Сохранение данных в базе данных
    $query = "INSERT INTO calls (phone, created_at, updated_at, process) VALUES ('$phone', NOW(), NOW(), false)";
    $result = $db->query($query);
    
    if ($result) {
        echo "Ваша заявка была отправлена успешно!";
    } else {
        echo "Ошибка при отправке заявки!";
    }
}

var_dump($_POST);