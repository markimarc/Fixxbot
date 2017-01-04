<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 4-1-2017
 * Time: 09:58
 */

$telegram->sendPhoto(array('chat_id' => CHAT_ID, 'photo' => new CURLFile("./assets/foto.jpg")));
$telegram->sendMessage(array('chat_id' => CHAT_ID, 'text' => "Test"));