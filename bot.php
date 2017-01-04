<?php
// Houdt de Github pagina goed in de gaten voor updates en andere coole dingen die de bot nog alleen maar beter maken! 
include("Telegram.php");
include("api.php");
$telegram = new Telegram($bot_id);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();
$command = strtolower(str_replace('/', '', $text));

define('CHAT_ID', $chat_id);

if($text[0] == '/')
{
    $path = 'commands/command.' . $command . '.php';
    if (file_exists($path))
        require_once($path);
} else
{
    if(strpos(strtolower($text), 'fix') !== false)
    {
        $path = 'commands/command.fix.php';
        require_once($path);
    }
}