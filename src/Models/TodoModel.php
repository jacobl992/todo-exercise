<?php

namespace App\Models;
use PDO;
class TodoModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTodoList()
    {
        $query = $this->db->prepare('SELECT * FROM `todo`');
        $query->execute();
        return $query->fetchAll();
    }
}