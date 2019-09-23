<?php
require_once("connection.php");
$id = $_REQUEST['id'];

mysqli_query($con,"DELETE FROM messages WHERE id = $id ");

header("location: index.php");

?>
