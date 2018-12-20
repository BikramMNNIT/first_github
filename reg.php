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
$query1="SELECT * FROM student WHERE name='$p' && reg='$q'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
$query2="INSERT INTO student (name,reg,sem,amt) VALUES ('$p','$q','$r','$s')";
mysql_query($query2);
header("location:out.php");
echo "Registration Done!!";

}
else
{
echo"User already Registered !";
}
}
?>