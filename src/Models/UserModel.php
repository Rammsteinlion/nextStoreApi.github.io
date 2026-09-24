<?php

namespace App\Models;

use App\Config\ResponseHttp;
use App\Config\Security;
use App\DB\ConnectionDb;
use App\DB\Sql;

class UserModel extends ConnectionDb
{
    private static string $name;
    private static string $username;
    private static ?string $dni= null;
    private static string $email;
    private static int $role_id;
    private static string $password;
    private static string $id_token;
    private static string $created_at;


    public function __construct(array $data)
    {
        self::$name = $data['name'];
        self::$username = $data['username'];
        self::$dni = $data['dni']  ?? '';
        self::$email = $data['email'];
        self::$role_id = $data['role_id'];
        self::$password = $data['password'];
        self::$id_token = $data['idToken'];
        self::$created_at = $data['created_at'];
    }

    // GETTERS

    final public static function getName(): string
    {
        return self::$name;
    }

    final public static function getUsername(): string
    {
        return self::$username;
    }

    final public static function getDni(): string
    {
        return self::$dni;
    }

    final public static function getEmail(): string
    {
        return self::$email;
    }

    final public static function getRoleId(): int
    {
        return self::$role_id;
    }

    final public static function getPassword(): string
    {
        return self::$password;
    }

    final public static function getIdToken(): string
    {
        return self::$id_token;
    }

    final public static function getCreatedAt(): string
    {
        return self::$created_at;
    }


    // SETTERS

    final public static function setName(string $name): void
    {
        self::$name = $name;
    }

    final public static function setUsername(string $username): void
    {
        self::$username = $username;
    }

    final public static function setDni(string $dni): void
    {
        self::$dni = $dni;
    }

    final public static function setEmail(string $email): void
    {
        self::$email = $email;
    }

    final public static function setRoleId(int $role_id): void
    {
        self::$role_id = $role_id;
    }

    final public static function setPassword(string $password): void
    {
        self::$password = $password;
    }

    final public static function setIdToken(string $id_token): void
    {
        self::$id_token = $id_token;
    }

    final public static function setCreatedAt(string $created_at): void
    {
        self::$created_at = $created_at;
    }


    final public static function post()
    {
        if (Sql::exists("SELECT dni,email FROM users WHERE dni = :dni OR email = :email LIMIT 1", self::getDni(), self::getEmail())) {
            return ResponseHttp::status400('El Usuario ya se encuentra registrado');
        } else {
            self::setIdToken(hash('sha512', self::getDni() . self::getEmail()));
            self::setCreatedAt(date("d-m-a H:i:s"));

            try {
                $con = self::getConnection();
                $query1 = "INSERT INTO users (name,username,dni,email,role_id,password,idToken,create_at) VALUES";
                $query2 = "(:name,:username,:dni,:email,:role_id,:password,:idToken,:create_at)";
                $query = $con->prepare($query1 . $query2);
                $query->execute([
                    "name" => self::getName(),
                    "username" => self::getUsername(),
                    "dni" => self::getDni(),
                    "email" => self::getEmail(),
                    "role_id" => self::getRoleId(),
                    "password" => Security::createPassword(self::getPassword()),
                    "idToken" => self::getIdToken(),
                    "create_at" => self::getCreatedAt()
                ]);
                if($query->rowCount() > 0){
                    return ResponseHttp::status200('Usuario agregado correctamente');
                }else{
                    return ResponseHttp::status500('No se pudo registrar el usuario');
                }
            } catch (\PDOException $p) {
                error_log('UserModel::post -> ' . $p);
                die(json_encode(ResponseHttp::status500()));
            }
        }
    }
}
