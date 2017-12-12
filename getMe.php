<?php require('../lib/core.inc');	
$core = new \BtcRelax\Core();
$core->init(false); 
$bot_api_key  = BOT_TOKEN;
//$bot_api_key  = '568417237:AAHDo_ylAMZcdq1zZ6rLHkqxshew7EACnsU';
$vUrl = sprintf('https://api.telegram.org/bot%s/getWebhookInfo',$bot_api_key);
header('Location: ' . $vUrl );
