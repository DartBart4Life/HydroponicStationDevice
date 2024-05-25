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
// Запрос данных из таблицы

$sql = "SELECT * FROM `Status` WHERE Id = 1"; 
$result = $conn->query($sql); 

foreach ($result as $row) {
    echo '<p id=otvev>'. $row['Status'].'</p>';
}

?>
