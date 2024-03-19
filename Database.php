<?php

class Database
{
    public $connection;
    public $statement;

    public function __construct($config,$username='root',$password='')
    {

        $this->connection = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $username,$password,
        [
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);
        
    }

    public function query($query,$params=[])
    {

        $this->statement = ($this->connection)->prepare($query);

        $this->statement->execute($params);

        return $this;

    }
    public function find()
    {
        return $this->statement->fetch();
    }
    public function findOrFail()
    {
        $result=$this->find();
        
    if (!$result) 
    {
        abort(Response::notFound);
    }
    return $result;
    }
    function get(){
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
}