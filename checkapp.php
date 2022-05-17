<html>
<style type="text/css">
    td{
    font-size: 20pt;
    margin-left:auto;
    margin-right:auto;
    border-collapse: collapse;
    }
body {
    background-image: url("sea.jpg");
    background-repeat:repeat;
          }
.id1 {
  padding: 15px 25px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: black;
  background-color: wheat;
  border: none;
  border-radius: 20px;
 
}

input:hover {background-color: peach}

input:active {
  background-color: peach;
 
  transform: translateY(4px);
}

</style>

<body align="center">
<?php 
session_start();
echo "Hai &nbsp;".$_SESSION['hname'];
?>
<form action="checkappoint.php" method="post">
<label>List Of Appointments</label><br>
<br>
<br>
<input class="id1" type="submit" value="check">
</form>
</body>
</html>