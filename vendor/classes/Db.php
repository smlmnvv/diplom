<?php

class Db
{
    private $connect;
    private $stmt;

    public function __construct(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']}";
        try
        {
            $this -> connect = new PDO ($dsn, $db_config['user'], $db_config['password']);
        }
        catch(PDOException $e)
        {
            die("Ошибка подключения к базе данных: {$e -> getMessage()}");
        }
    }

    public function query($sql, $params = [])
    {
        $this -> stmt = $this -> connect -> prepare($sql);
        $this -> stmt -> execute($params);
        return $this;
    }

    public function findAll()
    {
        return $this -> stmt -> fetchAll();
    }

    public function find()
    {
        return $this -> stmt -> fetch();
    }

    public function findOrFail()
    {
        $result = $this -> find();
        if(!$result)
        {
            abort();
        }
        return $result;
    }
}