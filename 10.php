<?php
$u=$_POST["t1"];
$p=$_POST["t2"];
$con=mysqli_connect("localhost","root","","csp");
echo "connected sucessfully";
$q="select name,password from women where name='$u' and password='$p'";
$res=mysqli_query($con,$q);
if(($row=mysqli_fetch_array($res))!=NULL)
{
echo "<h1 style='color:green;'>Login Successfull!!!!!!!!!!!!!!!!!!</h1>";
echo "<ul>
            <li><a href='tailor.html'>work supply</a></li>
            <li><a href='tailor.html'>learning</a></li>
           <ul>
            <li><a href='tailor.html'>Tailoring</a></li>
            <li><a href='tailor.html'>Plantation</a></li>
            <li><a href='tailor.html'>Floral Designs</a></li>
            <li><a href='tailor.html'>Jewellery Crafting</a></li>
          </ul>
          </ul>";
}
else
{
echo "<h1 style='color:red;'>Login UnSuccessfull</h1>";
}
mysqli_close($con);
?>