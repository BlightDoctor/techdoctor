<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$number = $_POST['number'];
$type = $_POST['type'];
$message = $_POST['message'];
$token = "5505217549:AAF5mcjaZamWyZiqWfFUksYMnGhcD6LBhW8";
$chat_id = "-715014787";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $number,
  'Что сломалось:' => $type,
  'Комментарий:' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>