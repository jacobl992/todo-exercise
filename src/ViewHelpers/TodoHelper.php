<?php

namespace App\ViewHelpers;

class TodoHelper
{
    public static function displayTodoList(array $todoList): string
    {
        $output ='';
        foreach($todoList as $item) {
            $output .= '<p>' . $item['item'] . '</p>';
        }
        return $output;
    }
}