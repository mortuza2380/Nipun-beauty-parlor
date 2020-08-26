<?php
 session_start();

$hostname='localhost';
$username='root';
$userpass='';
$dbname='registration';

$con=mysqli_connect($hostname,$username,$userpass) or die ('Database Connection fail');

mysqli_select_db($con,$dbname);


$name= $_POST['user'];
$pass= $_POST['password'];
$s=" select*from usertable where name='$name' && password='$pass'";
$result=mysqli_query($con,	$s);
$num=mysqli_num_rows($result);

if($num==1){
  $_SESSION['username']=$name;
  header('location:home.php');
}else{

    header('location:login.php');
}

?>