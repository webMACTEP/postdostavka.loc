<?php

// Подключаем библиотеку PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//$mail = new PHPMailer(true);

$mail->isSMTP();                   // Отправка через SMTP

$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->Host   = 'smtp.yandex.ru';  // Адрес SMTP сервера
$mail->SMTPAuth   = true;          // Enable SMTP authentication
$mail->Username   = 'login';       // ваше имя пользователя (без домена и @)
$mail->Password   = 'password';    // ваш пароль
$mail->SMTPSecure = 'ssl';         // шифрование ssl
$mail->Port   = 465;               // порт подключения

//От кого письмо
$mail->setFrom('test@postdostavka.eu', 'Админ сайта');
//Кому отправить
$mail->addAddress('gloombg@gmail.com');
//Тема письма
$mail->Subject = 'Привет!';

//Рука
$hand = "Правая";
if ($_POST['hand'] == "left") {
	$hand = "Левая";
}

//Тело письма
$body = '<h1>Встречайте супер письмо!</h1>';

if (trim(!empty($_POST['name']))) {
	$body .= '<p><strong>Имя:</strong> ' . $_POST['name'] . '</p>';
}
if (trim(!empty($_POST['email']))) {
	$body .= '<p><strong>E-mail:</strong> ' . $_POST['email'] . '</p>';
}
if (trim(!empty($_POST['hand']))) {
	$body .= '<p><strong>Рука:</strong> ' . $hand . '</p>';
}
if (trim(!empty($_POST['age']))) {
	$body .= '<p><strong>Возраст:</strong> ' . $_POST['age'] . '</p>';
}

if (trim(!empty($_POST['message']))) {
	$body .= '<p><strong>Сообщение:</strong> ' . $_POST['message'] . '</p>';
}

//Прикрепить файл
if (!empty($_FILES['image']['tmp_name'])) {
	//путь загрузки файла
	$filePath = __DIR__ . "/files/" . $_FILES['image']['name'];
	//грузим файл
	if (copy($_FILES['image']['tmp_name'], $filePath)) {
		$fileAttach = $filePath;
		$body .= '<p><strong>Фото в приложении</strong>';
		$mail->addAttachment($fileAttach);
	}
}

$mail->Body = $body;

//Отправляем
if (!$mail->send()) {
	$message = 'Ошибка';
} else {
	$message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
