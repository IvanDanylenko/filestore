<?php

include 'vendor/autoload.php';

use IvanDanylenko\FileStore\FileStore;

$fileStore = new FileStore(__DIR__ . '/long-file.txt');

foreach ($fileStore as $key => $line) {
    echo 'Key ' . $key . '. Content: ' . $line;
}
