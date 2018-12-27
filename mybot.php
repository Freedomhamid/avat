<?php
$bot_token = "764811448:AAEKd1POpU6bzuCRGCeFAbzpGd2uddFnnIM";
$website = "https://api.telegram.org/bot".$bot_token;
$update = file_get_contents('php://input');
$updateArray = json_decode($update,true);
$chatid = $updateArray["message"] ["chat"] ["id"];
$text = $updateArray["message"] ["text"];
$username = $updateArray["message"] ["chat"] ["username"];
$first_name = $updateArray["message"] ["chat"] ["first_name"];
$lastname=$updateArray["message"] ["chat"] ["last_name"];
$url = $website."/sendmessage?chat_id=".$chatid."&text=haha";
file_get_contents($url);
?>
