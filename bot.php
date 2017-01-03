<?php
// Houdt de Github pagina goed in de gaten voor updates en andere coole dingen die de bot nog alleen maar beter maken! 
include("Telegram.php");
include("api.php");
$telegram = new Telegram($bot_id);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();

if ($text == "/start") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Hoi.
Wil je weten wat ik allemaal kan? doe dan /commands"));
}

// /foto, waar de dikke rip off van Leanne mee begon hihi
else if ($text == "/foto") {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/foto.jpg")));
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Test"));
}

// /huh
else if ($text == "/huh") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Tuurlijk werkt de bot nog, wat denken jij?!?"));
}

else if ($text == "/commands") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "/huh
/commands
/help
/boedie
Meer commands binnenkort

En natuurlijk reageren op een bericht waar fix in voorkomt ;)"));
}

// /help
else if ($text == "/help") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Hoi! Ik ben een bot gemaakt door @marcleanne met een beetje hulp en copy pasta werk van andere bots.
Ik sta op Github; https://github.com/markimarc/Fixxbot 
Je ziet daar ook wat gepastat is enzo. Gewoon doen. Is koel.

Groetjes thuis"));
}

// fix zonder hoofdletter
else if (strpos($text, 'fix') !== false) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Fix"));
}

// fix met hoofdletter
else if (strpos($text, 'Fix') !== false) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Fix"));
}

// /boedie
else if ($text == "/boedie") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "'het fenomeen boedie heeft zijn oorsprong gevonden in de jaren 2009/10, dit woord werd vaak gebruikt in combinatie met de vuist herhaaldelijk op het voorhoofd of onder de kin te plaatsen'"));
}

// Makkelijk een nieuwe command toevoegen
// else if ($text == "/") {
// 	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => ""));
// }

// /why met een spraakbericht output output
else if (strpos($text, '/why') !== false) {
	$telegram->sendVoice(array('chat_id' => $chat_id, 'voice' => new CURLFile("./assets/moetdatnou.mp3")));
}

?>