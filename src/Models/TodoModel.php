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
        $query = $this->db->prepare('SELECT * FROM `todo` WHERE `deleted` = 0');
        $query->execute();
        return $query->fetchAll();
    }

    public function addItem()
    {
        $query = $this->db->prepare('INSERT INTO `todo` (`id`, `item`, `deleted`, `completed`) VALUES (?,?,0,0)');
        
    }
}