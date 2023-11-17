<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do List</title>
</head>

<body>
<h1>To Do List</h1>

<form method="post" action="/additem">
<!--<form method="post" action="TodoController.php">-->
    <input type="text" name="item" id="item"><br>
    <input type="submit" value="Add Item">
</form>

<?php echo \App\ViewHelpers\TodoHelper::displayTodoList($todoList);
echo \App\ViewHelpers\TodoHelper::displayCompleted($todoList);
?>

</body>