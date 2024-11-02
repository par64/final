<?php
// Включаем файл для подключения к базе данных
include '../db/connect.php';

// Проверяем, что запрос был отправлен методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_name = $_POST['name'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    // Проверка на корректность данных 
    if (empty($user_name) || empty($rating) || empty($comment)) { 
        die("Все поля обязательны для заполнения."); 
    } 
     // Подготовленный запрос для вставки данных в базу 
     $sql = "INSERT INTO reviews (username, rating, comment) VALUES (:user_name, :rating, :comment)";
         try {
            $stmt = $pdo->prepare($sql);

            // Привязываем значения
            $stmt->bindParam(':user_name', $user_name);
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':comment', $comment);

            // Выполняем запрос
            $stmt->execute(); 

            // перенаправляем...
            header("Location: ../details.php");
            exit();
     
            echo "Отзыв успешно добавлен!"; 
        } catch (PDOException $e) { 
            echo "Ошибка при записи в базу данных: " . $e->getMessage(); 
        } 
