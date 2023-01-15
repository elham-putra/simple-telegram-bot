<?php

$content = file_get_contents("php://input");
$update = json_decode($content, true);
if (($update['message']) != null) {
    
    $from_id = $update['message']['from']['id'];
    $chat_id = $update['message']['chat']['id'];
    $text = $update['message']['text'];
    $message_id = $update['message']['message_id']; 
    $type_msg = "message";

} 

$bot_id = "5752116016:AAGyzk1qkohFORsxxWGYIuewn0BWNJRS53A";
$bot_url = "https://api.telegram.org/bot$bot_id";


function kirim($chat_id,$text){
    global $bot_url;

    $text_fix = urlencode($text);

    file_get_contents($bot_url."/sendMessage?chat_id=$chat_id&text=$text_fix");
}


if($text == "kontol"){
	kirim($chat_id,"hallo selamat datang nyet");
}

?>