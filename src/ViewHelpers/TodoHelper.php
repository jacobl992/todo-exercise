<?php

namespace App\ViewHelpers;

class TodoHelper
{
    public static function displayTodoList(array $todoList): string
    {
        $todoHeader = '<h2>To do</h2>';
        $output ='';
        foreach($todoList as $item) {
            $complete = '<span>[Tick]</span>';
            if ($item['completed'] === 0) {
            $output .= '<p>' . $item['item'] . '    ' . $complete . '</p>';
        }
        }
        return $todoHeader . $output;
    }

    public static function displayCompleted(array $todoList): string
    {
        $completedHeader = '<h2>Completed</h2>';
        $output ='';
        foreach($todoList as $item) {
            if ($item['completed'] === 1) {
                $output .= '<p>' . $item['item'] . '</p>';
            }
        }
        return $completedHeader . $output;
    }
}