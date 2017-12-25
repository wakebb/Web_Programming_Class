<?php 

$con=mysqli_connect("localhost","yanjiao","asdf","PW5");

if(mysqli_connect_errno())
{
  echo"Failed to connect ".mysql_connect_errno;
}

$query = "SELECT * FROM book";

$result = mysqli_query($con, $query);

  while($row_result=mysqli_fetch_assoc($result))
  {
    $rows_result[]=$row_result;
  }
  print json_encode($rows_result);

?>