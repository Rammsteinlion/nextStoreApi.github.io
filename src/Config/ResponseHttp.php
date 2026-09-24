<?php

namespace App\Config;

class ResponseHttp
{
    public static $message = [
        'status' => '',
        'message' => ''
    ];

    final public static function status200(string $res = 'Solicitud exitosa')
    {
        http_response_code(200);
        self::$message['status'] = 'ok';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status201(string $res = 'Recurso creado correctamente')
    {
        http_response_code(201);
        self::$message['status'] = 'ok';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status204(string $res = 'Solicitud procesada correctamente')
    {
        http_response_code(204);
        self::$message['status'] = 'ok';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status400(string $res = 'Solicitud incorrecta')
    {
        http_response_code(400);
        self::$message['status'] = 'error';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status401(string $res = 'No autorizado')
    {
        http_response_code(401);
        self::$message['status'] = 'error';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status403(string $res = 'Acceso denegado')
    {
        http_response_code(403);
        self::$message['status'] = 'error';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status404(string $res = 'Recurso no encontrado')
    {
        http_response_code(404);
        self::$message['status'] = 'error';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status405(string $res = 'Método HTTP no permitido')
    {
        http_response_code(405);
        self::$message['status'] = 'error';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status409(string $res = 'El recurso ya existe')
    {
        http_response_code(409);
        self::$message['status'] = 'error';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status422(string $res = 'Los datos enviados no son válidos')
    {
        http_response_code(422);
        self::$message['status'] = 'error';
        self::$message['message'] = $res;

        return self::$message;
    }

    final public static function status500(string $res = 'Error interno del servidor')
    {
        http_response_code(500);
        self::$message['status'] = 'error';
        self::$message['message'] = $res;

        return self::$message;
    }
}