<?php
// Подключение к базе данных

// Параметры подключения к базе данных
$servername = "localhost";
$username = "egorsiao_temp";
$password = "123Qwe";
$dbname = "egorsiao_temp";


// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    header('HTTP/1.1 404 Not Found');
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из GET-параметров
$Temp = $_GET['Temp'] ?? '';
$Stat = $_GET['Stat'] ?? '';

// Запрос данных из таблицы
$stmt = $conn->prepare("INSERT INTO Temperature(Temp, Stat) VALUES (?, ?)");
$stmt->bind_param("ss", $Temp, $Stat);
$stmt->execute();

// Закрытие подготовленного выражения
$stmt->close();

// Закрытие соединения
$conn->close();
?>