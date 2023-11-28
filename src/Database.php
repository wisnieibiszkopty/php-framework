<?php

//
//  for now with mysqli
// in future i will replace it with PDO
//

namespace Kamil\Framework;

class Database {

    private \mysqli $db;

    public function __construct(){
        $this->db = new \mysqli(Config::HOST, Config::USERNAME, Config::PASSWORD, Config::DATABASE);

        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function save($table, $data): bool {
        $keys = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";

        $query = "INSERT INTO $table ($keys) VALUES ($values)";
        return $this->db->query($query);
    }

    public function getAll($table): array {
        $query = "SELECT * FROM $table";
        $result = $this->db->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function filter($table, $condition): array {
        $query = "SELECT * FROM $table WHERE $condition";
        $result = $this->db->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function delete($table, $column, $new_value, $condition): bool{
        $query = "UPDATE $table SET $column TO $new_value WHERE $condition";
        return $this->db->query($query);
    }
    
}