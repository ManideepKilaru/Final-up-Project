<?php
session_start();
$a=$_SESSION['hname'];
$con=mysqli_connect('localhost','root','','ats')or die("error at execution");
$sql="select *from app where hospitalname='$a'";
$result=mysqli_query($con,$sql) or die("error at execution");
echo "<table align=center border=1>";
while($row=mysqli_fetch_row($result))
{
echo
            "<tr>
              <td>$row[0]</td>
              <td>$row[1]</td>
              <td>$row[2]</td>
              <td>$row[3]</td>
              <td>$row[4]</td>
              <td>$row[5]</td> 
	         <td>$row[6]</td> 
	         <td>$row[7]</td> 
			  <td>$row[8]</td> 
	         <td>$row[9]</td> 
            </tr>";
}
echo "</table>"
?>
