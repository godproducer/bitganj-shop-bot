<?php
/**
 * README
 * This file is intended to unset the webhook.
 * Uncommented parameters must be filled
 */

// Load composer
require_once __DIR__ . '/vendor/autoload.php';

require('../lib/core.inc');	
$core = new \BtcRelax\Core();
$core->init(false); 
$bot_api_key  = BOT_TOKEN;
//$bot_api_key  = '568417237:AAHDo_ylAMZcdq1zZ6rLHkqxshew7EACnsU';
$bot_username = 'FastFenShopBot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Delete webhook
    $result = $telegram->deleteWebhook();

    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e->getMessage();
}
