<?php
session_start();
if(isset($_SESSION['username'])){
//echo 'how are you '.$_SESSION['username']." ";

?>
<!doctype html>
<html>
<style>
<?php require_once("sub_file/style.php");?>

</style>
<body>
<?php require_once("sub_file/new-message.php");?>
<div id="container">
<div id="menu">
<?php 

echo $_SESSION['username'];
echo '<a style="float:right;color:white; font-size:14.3px;" href="index1.php">HOME</a>';
?>
</div>
<div id="left-col">
<?php require_once("sub_file/left-col.php");?>

<!-- end of left column-->
</div>
<div id="right-col"> 
<?php require_once("sub_file/right-col.php");?>

<!-- end of right-col -->
</div>
</div>

</body>
</html>

<?php
}else{
	header("location:login.php");
}

?>
