<?php
 session_start();
header('location:login.php');
$hostname='localhost';
$username='root';
$userpass='';
$dbname='registration';

$con=mysqli_connect($hostname,$username,$userpass) or die ('Database Connection fail');

mysqli_select_db($con,$dbname);


$name= $_POST['user'];
$pass= $_POST['password'];
$s=" select*from usertable where name='$name'";
$result=mysqli_query($con,	$s);
$num=mysqli_num_rows($result);

if($num==1){
  
    echo "Username Already Taken";
}else{

    $reg="insert into usertable(name,password)values('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration Successfully!";
}

?>