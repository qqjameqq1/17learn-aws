<?php
require "predis/autoload.php";
Predis\Autoloader::register();

try {
    $redis = new Predis\Client(array(
        "scheme" => "tcp",
        "host" => "testshahow.xgsfji.0001.apne1.cache.amazonaws.com",
        "port" => 6379));

    $redis->del("hello_world");
} catch (Exception $e) {
    echo "Couldn't connected to Redis";
    echo $e->getMessage();
}
