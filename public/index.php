<?php

define('LARAVEL_START', microtime(true));

// 加载vendor中对应的类
require __DIR__.'/../vendor/autoload.php';

// 启动 laravel container, 初始化一个Application
$app = require_once __DIR__.'/../bootstrap/app.php';

// 处理网络请求
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// 处理response
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// 发送response
$response->send();

// 扫尾工作
$kernel->terminate($request, $response);
