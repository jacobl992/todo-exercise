<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
</head>

<body>
<h1>To Do List</h1>
<?php
foreach($todolist as $item) {
    echo '<p>' . $item['item'] . '</p>';
}
?>

</body>