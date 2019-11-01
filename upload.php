<?php

// Завантаження файлу
$file = $_FILES["file"];

// Переміщення файлу в папку "uploads"
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);

// Повертаємо список
header("Location: " . $_SERVER["HTTP_REFERER"]);

?>