<?php
// Подключение к базе данных

// Параметры подключения к базе данных
$servername = "localhost";
$username = "egorsiao_temp";
$password = "123Qwe";
$dbname = "egorsiao_temp";
$Temp = $_GET['Temp'];
$Stat = $_GET['Stat'];

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Запрос данных из таблицы 
$sql = "INSERT INTO `Temperature`(Temp, Stat) VALUES ($Temp, $Stat)"; 


 $result = $conn->query($sql); 

?>
