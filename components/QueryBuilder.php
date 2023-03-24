<?php

class QueryBuilder
{
    public $pdo;
    public $test = 1;
    public function __construct($host, $dbname, $username, $password)
    {
        $this->pdo = new PDO("mysql:host={$host}; dbname={$dbname}", "{$username}", "{$password}");
    }

    public function create($data, $table)
    {
        $keys = implode(", ", array_keys($data));
        $label = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ({$keys}) VALUES ({$label})";
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
    }

    public function get_all($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_by_id($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id=:id";
        $query = $this->pdo->prepare($sql);
        $query->execute(["id" => $id]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function update($data, $table, $id)
    {
        $string = "";
        $keys = array_keys($data);
        foreach ($keys as $key) {
            $string .= $key . "=:" . $key . ", ";
        }
        $keys = rtrim($string, ", ");
        $sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
        $query = $this->pdo->prepare($sql);
        $data["id"] = $id;
        $query->execute($data);
        return true;
    }

    public function delete($id, $table)
    {
        $sql = "DELETE  FROM {$table} WHERE id=:id";
        $query = $this->pdo->prepare($sql);
        $query->execute(["id" => $id]);
    }

    //TODO прочитать про trim
    //TODO добавить валидацию и обновление данных и дату созаания и обновления
    //TODO почитать про limit, offset, архивцию и разархивацию
}