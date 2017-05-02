<?php

$recepient = "jionyx89@gmail.com";
$sitename = "Strict";

$name = trim($_POST["name"]);
$phone = trim($_POST["mail"]);
$text = trim($_POST["message"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nE-mail: $phone \nСообщение: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");