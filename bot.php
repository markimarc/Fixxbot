<?php
include("Telegram.php");
$bot_id = "API KEY";
$telegram = new Telegram($bot_id);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();

// /foto, dikke rip off van Leanne hihi
if ($text == "/foto") {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/foto.jpg")));
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Test"));
}

// /huh
else if ($text == "/huh") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Tuurlijk werkt de bot nog, wat denken jij?!?"));
}

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

// Als iemand scheld met het favoriete scheldwoord van de jeugd van tegenwoordig
else if (strpos($text, 'kanker') !== false) {
	$telegram->sendVoice(array('chat_id' => $chat_id, 'voice' => new CURLFile("./assets/moetdatnou.mp3")));
}

?>