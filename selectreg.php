<?php
$con=mysqli_connect("localhost","root","","csp");
echo "connected sucessfully";
$q="select * from women";
$res=mysqli_query($con,$q);
echo "<table border=2>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> Password </th>";
echo "<th> Emailid </th>";
echo "<th> Mobile Number </th>";
echo "<th> Gender </th>";
echo "<th> Languages Known </th>";
echo "<th> Date of Birth </th>";
echo "<th> Address </th>";
echo "</tr>";
while(($r=mysqli_fetch_array($res))!=NULL)
{
echo "<tr>";
echo "<td> $r[0]</td>";
echo "<td>$r[1]</td>";
echo "<td>$r[2]</td>";
echo "<td>$r[3]</td>";
echo "<td>$r[4]</td>";
echo "<td>$r[5]</td>";
echo "<td>$r[6]</td>";
echo "<td>$r[7]</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
