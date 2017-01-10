<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 4-1-2017
 * Time: 10:04
 */

$telegram->sendVoice(array('chat_id' => CHAT_ID, 'voice' => new CURLFile("./assets/moetdatnou.mp3")));