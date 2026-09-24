<?php

namespace App\Controllers;

use App\Config\ResponseHttp;
use App\Models\UserModel;

class UserController
{
    private static string $method;
    private static string $route;
    private static array $params;
    private static $data;
    private static $headers;


    private static $validate_rol = '/^[1-3]$/';
    private static $validate_number = '/^[0-9]+$/';
    private static $validate_text = '/^[a-zA-Z\s]+$/';


    public function __construct(
        $method,
        $route,
        $params,
        $data,
        $headers
    ) {
        self::$method = $method;
        self::$route = $route;
        self::$params = $params;
        self::$data = $data;
        self::$headers = $headers;
    }

    final public static function post(string $endPoint)
    {
        if (self::$method == 'post' && $endPoint == self::$route) {

            if (
                empty(self::$data['name']) || empty(self::$data['username']) || empty(self::$data['email'])
                || empty(self::$data['role_id']) || empty(self::$data['password']) || empty(self::$data['confirmPassword'])
            ) {
                echo json_encode(ResponseHttp::status400('Todos los campos son requeridos'));
            }

            $required = [
                'name',
                'username',
                'email',
                'role_id',
                'password',
                'confirmPassword'
            ];

            foreach ($required as $field) {
                if (
                    !isset(self::$data[$field]) ||
                    self::$data[$field] === ''
                ) {
                    echo json_encode(
                        ResponseHttp::status400(
                            "El campo {$field} es requerido"
                        )
                    );
                    exit;
                }
            }

            var_dump(self::$data);
            new UserModel(self::$data);

            echo json_encode(
                UserModel::post()
            );

            exit;
        }
    }
}
