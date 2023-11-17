<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
</head>

<body>
<h1>To Do List</h1>
<?php echo \App\ViewHelpers\TodoHelper::displayTodoList($todoList);
echo \App\ViewHelpers\TodoHelper::displayCompleted($todoList);
?>

</body>