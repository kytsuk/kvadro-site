<?php

$recepient = "kutsykv@gmail.com";
$sitename = "Гурт квадро";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$date = trim($_POST["date"]);
$message = "Ім'я: $name \n Email: $email \nТелефон: $phone \nДата події: $date";

$pagetitle = "Новая заявка з сайту \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");