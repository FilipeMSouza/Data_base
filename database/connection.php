<?php
namespace ConexaoPHPPostgres;

class Connection{
    private static $conn;

    public function connect(){
        $params = parse_ini_file('database.ini');
        if(!$params){
            throw new \Exception("Erro lendo configuração inicial do banco de dados");
        }

        $conStr = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s", 
                $params['host'], 
                $params['port'], 
                $params['database'], 
                $params['user'], 
                $params['password']);


        $pdo = new \PDO($conStr);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }  
    /**
     * retorna uma instancia da coneccao do banco de dados
     * @return type
     */
    public static function get() {
        if (null === static::$conn) {
            static::$conn = new static();
        }

        return static::$conn;
    }
}