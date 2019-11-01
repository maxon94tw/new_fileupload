<?php

// Видалення файлу
unlink($_GET["name"]);

// Повертаємо список
header("Location: " . $_SERVER["HTTP_REFERER"]);

?>