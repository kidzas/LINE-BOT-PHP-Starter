<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'c1c2ea87268aa0b9dd768522349e50c1';
$access_token  = 'qKPUpoabrPGOzlbGXaOkyNHDA6RzQXLk1qD/1An/AJkB6sKwgY79pb/lY6at9komRuJHRO49zndSnToj045CWh6H/O464wZTU2Sp078bIbwyf5K5xME0SFjfc92bmcGxl+f7R9mk8B11B25WKiS6JQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}