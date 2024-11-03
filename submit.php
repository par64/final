<?php
// Включаем файл для подключения к базе данных
include './db/connect.php';

// Проверяем, что запрос был отправлен методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_name = $_POST['name'];
    $rev_message = $_POST['message'];
    $product_id = $_POST['product_id'];

    // Проверка на корректность данных 
    if (empty($user_name) || empty($rev_message)) { 
        die("Все поля обязательны для заполнения."); 
    } 
     // Подготовленный запрос для вставки данных в базу 
     $sql = "INSERT INTO reviews (user_name, rev_message, product_id) VALUES (:user_name, :rev_message, :product_id)";
         try {
            $stmt = $pdo->prepare($sql);

            // Привязываем значения
            $stmt->bindParam(':user_name', $user_name);
            $stmt->bindParam(':rev_message', $rev_message);
            $stmt->bindParam(':product_id', $product_id);

            // Выполняем запрос
            $stmt->execute();

            echo "Отзыв успешно добавлен!";
            
            // перенаправляем (обновляем страницу продукта с новым сообщением)
            header("Location: details.php?details_id='$product_id'");
            exit();
     
        } catch (PDOException $e) { 
            echo "Ошибка при записи в базу данных: " . $e->getMessage(); 
        } 
    }