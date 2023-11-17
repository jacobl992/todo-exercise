<?php

namespace App\ViewHelpers;

class TodoHelper
{
//    public static function addItem()
//    {
//        return '<form action="">';
//    }
    public static function displayTodoList(array $todoList): string
    {
        $todoHeader = '<h2>To do</h2>';
        $output = '';
        foreach ($todoList as $item) {
            $complete = '<form method="post" action="/mark-complete">
<input type="hidden" name="id" value="' . $item['id'] . '">
    <input type="submit" value="Complete">
</form>';
            if ($item['completed'] === 0) {
                $output .= '<span>' . $item['item'] . '    ' . $complete . '</span>';
            }
        }
        return $todoHeader . $output . '<br>';
    }

    public static function displayCompleted(array $todoList): string
    {
        $completedHeader = '<h2>Completed</h2>';
        $output = '';
        foreach ($todoList as $item) {
            if ($item['completed'] === 1) {
                $output .= '<p>' . $item['item'] . '</p>';
            }
        }
        return $completedHeader . $output;
    }
}