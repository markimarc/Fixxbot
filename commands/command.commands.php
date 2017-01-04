<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 4-1-2017
 * Time: 10:00
 */

$commands = [
    '/huh',
    '/commands',
    '/help',
    '/boedie'
];
$str = "";
foreach($commands as $command)
{
    $str .= "$command\n";
}
$str .= "Meer commands binnenkort\n\nEn natuurlijk reageren op een bericht waar fix in voorkomt ;)";

$telegram->sendMessage(array('chat_id' => CHAT_ID, 'text' => $str));