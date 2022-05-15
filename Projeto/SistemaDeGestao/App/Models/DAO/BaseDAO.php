<?php

namespace App\Models\DAO;


use PDO;
use App\Lib\Connection;

/* Classe responsável por executar as funções do CRUD */

abstract class BaseDAO
{
    private $connection;

    //Conexão com o banco de dados criado 
    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }


    public function insert($table, $column, $values)
    {


        if (!empty($table) && !empty($column) && !empty($values)) {


            $param = $column;
            $column = str_replace(":", "", $column);


            $sql = "INSERT INTO $table($column) values ($param)";

            $statement = $this->connection->prepare($sql);

            $statement->execute($values);

            return $statement->rowCount();
        }
        return false;
    }
    public function update($table, $column, $values, $where = null)
    {
        
        if (!empty($table) && !empty($column) && !empty($values)) {
            
            $sql = "UPDATE $table SET $column";
            if ($where) {
                $sql .= " WHERE $where";
            }

            $statement = $this->connection->prepare($sql);
            $statement->execute($values);

            return $statement->rowCount();
        }
        return false;
    }

    public function select($sql, $values = null)
    {

        if (!empty($sql)) {
            $statement = $this->connection->prepare($sql);
            $statement->execute($values);
            return $statement;
        }
        return false;
    }

    public function delete($table, $values, $where)
    {

        if (!empty($table) && !empty($values)) {

            $sql = "DELETE FROM $table ";
            $sql .= " WHERE $where LIMIT 1";

            $statement = $this->connection->prepare($sql);
            $statement->execute($values);
            return $statement->rowCount();
        }
        return false;
    }
}
