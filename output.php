<?php
$x=$_POST['a'];
$y=$_POST['b'];


if($x==""||$y=="")
{
echo"Fill blanks";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("mnnit");
$query1="SELECT * FROM student WHERE name='$x' AND reg='$y'";
$result=mysql_query($query1);
while($row=mysql_fetch_array($result))

{
echo"  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspREGISTRATION DETAILS";
echo"<br>";
echo"<br>";
echo"<br>";


echo"<table border='5' align='center' >";


echo"<tr>";
echo"<td>".STUDENTID."</td>";
echo"<td>".NAME."</td>";
echo"<td>".REG.NO."</td>";
echo"<td>".SEMESTER."</td>";
echo"<td>".AMOUNT."</td>";
echo"</tr>";
echo"<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"<td>".$row[4]."</td>";
echo"</tr>";
echo"</table>";
}
echo"<br>";
echo"<br>";

echo"&nbsp                                  &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp<a href='page1.php'>Click for HOME!";


}
?>
