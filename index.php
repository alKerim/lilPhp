<?
$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->message;
$chat_id = '1971171809';
$text = $message->text;
$token = '5671386279:AAH8R5yNUM6RoqpKtpOiaBxWWa7L2ZjoKVI';
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=hi");