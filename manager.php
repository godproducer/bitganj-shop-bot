<?php

use TelegramBot\TelegramBotManager\BotManager;

// Load composer.
require_once __DIR__ . '/vendor/autoload.php';

try {
    $bot = new BotManager([
        // Vitals!
        'api_key'      => '586426691:AAFCVpTFdnByIWFXyAGGr-FJZa0WAv0hDlU',

        // Extras.
        'bot_username' => 'FastFenShopBot',
        'secret'       => 'konopelka',
        'webhook'      => [
            'url' => 'https://bot.fastfen.club/manager.php',
        ]
    ]);
    $bot->run();
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}