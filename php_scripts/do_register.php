<?php

require_once __DIR__.'/boot.php';

// Проверим, не занято ли имя пользователя
$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `login` = :login");
$stmt->execute(['login' => $_POST['login']]);
if ($stmt->rowCount() > 0) {
    flash('Этот логин уже занят.');
    header('Location: ../register.php'); // Возврат на форму регистрации
    die; // Остановка выполнения скрипта
}

// Добавим пользователя в базу
$stmt = pdo()->prepare("INSERT INTO `users` (`login`, `password`, `firstName`, `lastName`, `email`, `telephone`)"
        . " VALUES (:login, :password, :firstName, :lastName, :email, :telephone)");
$stmt->execute([
    'login' => $_POST['login'],
    'password' =>  password_hash($_POST['password'], PASSWORD_DEFAULT),
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'email' => $_POST['email'],
    'telephone' => $_POST['phone']
]);

header('Location: ../login.php');

