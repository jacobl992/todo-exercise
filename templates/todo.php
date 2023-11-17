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
<!--    <input type="textarea" name="item" id="item"><br>-->
    <textarea id="item" name="item" rows="1" cols="50"></textarea><br>
    <input type="submit" value="Add to list">
</form>

<?php echo \App\ViewHelpers\TodoHelper::displayTodoList($todoList);
echo \App\ViewHelpers\TodoHelper::displayCompleted($todoList);
?>

</body>