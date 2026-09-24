<?php


namespace App\DB;

use App\Config\ResponseHttp;
use PDO;
use App\DB\ConnectionDb;

class Sql extends ConnectionDb
{

    public static function exists(string $request, string $condition, $params)
    {

        try {

            $con = self::getConnection();
            $query = $con->prepare($request);
            $query->execute([
                   $condition = $params
             ]);
            $res = ($query->rowCount() == 0) ? false : true;
            return $res;
        } catch (\PDOException $p) {
            error_log('SQL::exits => ' .  $p);
            die(json_encode(ResponseHttp::status500()));
        }
    }
}
