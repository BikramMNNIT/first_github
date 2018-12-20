<?php

$p=$_POST['a'];
$q=$_POST['b'];

if($p==""||$q=="")
{
echo"Fill all blanks";
header("location:login.php");
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("mnnit");
$query1="SELECT * FROM user WHERE name='$p' && password='$q'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{

echo "Wrong Name and Password !";
header("location:login.php");
}
else
{

echo"you are logged in! ";
$_SESSION['name']=$p;
header("location:page1.php");


}
}
?>