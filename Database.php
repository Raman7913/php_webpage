<?php

class Database
{
    public $connection;

    public function __construct($config,$username='root',$password='')
    {

        $this->connection = new PDO("mysql:host={$config['database']['host']};dbname={$config['database']['dbname']}", $username,$password,
        [
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);
        
    }

    public function query($query)
    {

        $statement = ($this->connection)->prepare($query);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}