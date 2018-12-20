<?php
$p=$_POST['a'];
$q=$_POST['b'];
$r=$_POST['c'];
//$s=$_POST['d'];


if($p=="" || $q=="" || $r=="")
{
echo "Fill the blanks to update password";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("mnnit");
$query="UPDATE user set password='$r' WHERE name='$p' AND email='$q'";
mysql_query($query);

echo "Password updated!";

}

?>