<?php

// ����������� ������������ ����� composer
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    $response->getBody()->write('Welcome to Slim!');
    return $response;
    // ��������� ������ slim/http ���� �� ��� ����� �������� ������
    // return $response->write('Welcome to Slim!');
});
$app->run();