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

    public function addItem(string $item)
    {
        $query = $this->db->prepare('INSERT INTO `todo` (`id`, `item`, `deleted`, `completed`) VALUES (NULL,?,0,0)');
        $query->execute([$item]);
    }

    public function markCompleted(int $id)
    {
        $query = $this->db->prepare('UPDATE `todo` SET `completed` = 1 WHERE `id` = ?');
        $query->execute([$id]);
    }
}