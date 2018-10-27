<?php
session_start();
ini_set('display_errors', 'On');// для отображения ошибок
error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: vrusanov
 * Date: 10/26/18
 * Time: 3:42 PM
 */
$errName = "";
$errEmail = "";
$errUser = "";
$errPass = "";


//  Полное имя должно иметь букввы начинаться только с большой буквы
if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["name"]) === 0)
    $errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash</p>';
// для проверки Емейлов
// w = [0-9A-Za-z_] Класс включает цифры, буквы и символ подчеркивания.
// d = [0-9] Класс включает только цифры
//полная маска дял проверки Имелов
$reg_mask_email= "/^[a-zA-Z]w+(.w+)*@w+(.[0-9a-zA-Z]+)*.[a-zA-Z]{2,4}$/";
if (preg_match("$reg_mask_email", $_POST["email"]) === 0){
    $errEmail = '<p class="errText">Email must comply with this mask: chars(.chars)@chars(.chars).chars(2-4)</p>';
}

// Пользователь должен иметь в Логине больше 5 символов
$reg_mask_user = "/^[0-9a-zA-Z_]{5,}$/";
if(preg_match("$reg_mask_user", $_POST["user"]) === 0)
    $errUser = '<p class="errText">User must be bigger that 5 chars and contain only digits, letters and underscore</p>';

// Жесткий пароль
$reg_mask_pass = "/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/";
if(preg_match("$reg_mask_pass", $_POST["pass"]) === 0){
    $errPass = '<p class="errText">Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';
}
 $password = "";
 $email = "";
 if (isset($_POST["email"]) || isset($_POST["pass"])) {
     if (empty($_POST["email"])) {
         $errMassage = "Email and password is required";
     } else {
         $email = test_input($_POST['email']);
     }
     if (empty($_POST["password"])) {
         $errMassage = "Email and password is required";
     } else {
         $password = test_input($_POST['password']);
     }
     if (empty($errMassege)) {
//         try {
//             $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
//
//         }
 }
 }

