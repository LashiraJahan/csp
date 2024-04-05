<?php
$u=$_POST["t1"];
$p=$_POST["t2"];
$e=$_POST["t3"];
$mn=$_POST["t4"];
$g=$_POST["r1"];
$lk= $_POST["c1"]; 
$chk="";  
foreach($lk as $i)  
   {  
      $chk .= $i.",";  
   } 
$dob = $_POST["s1"];
$add=$_POST["txt1"];
$con=mysqli_connect("localhost","root","","csp");
echo "connected sucessfully";
$q="insert into women values('$u','$p','$e',$mn,'$g','$chk','$dob','$add')";
$res = mysqli_query($con,$q);
if($res)
{
	echo "Inserted Sucessfully";
}
else
{
	echo "Not Inserted Sucessfully";
}
mysqli_close($con);
?>
