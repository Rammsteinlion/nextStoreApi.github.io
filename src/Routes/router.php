<?php

use App\Controllers\UserController;
use App\Controllers\ProductController;
use App\Config\ResponseHttp;

$method = strtolower($_SERVER['REQUEST_METHOD']);
$route = $_GET['route'] ?? '';

$params = explode('/', trim($route, '/'));
$data = json_decode(file_get_contents("php://input"), true);
$headers = getallheaders();

switch ($params[0] ?? '') {

    case 'user':

        $app = new UserController(
            $method,
            $route,
            $params,
            $data,
            $headers
        );

        $app->post('user/');
       // $app->post('user/login');

        break;

    /*case 'product':

        $app = new ProductController(
            $method,
            $route,
            $params,
            $data,
            $headers
        );

        $app->get('product/list');
        $app->post('product/create');

        break;*/

    default:

        echo json_encode(ResponseHttp::status404());
        break;
}