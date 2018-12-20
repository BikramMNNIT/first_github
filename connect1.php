<?php
$p=$_POST['a'];
$q=$_POST['b'];
$r=$_POST['c'];
$s=$_POST['d'];


if($p=="" || $q=="" || $r=="" || $s=="")
{
echo "Fill all blanks";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("mnnit");
$query1="SELECT * FROM user WHERE name='$p' && phone='$r' && email='$q'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
$query="INSERT INTO user (name,email,phone,password) VALUES ('$p','$q','$r','$s')";
echo "Form Submited!";
header("location:login.php");
}
else
{
echo"User already exists!";
}
}
?>