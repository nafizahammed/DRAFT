<?php
include "../model/db.php";


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Search($conobj,"tutor_request",$_REQUEST['searchbyarea'],$_REQUEST['searchbyclass'],$_REQUEST['searchbysubject']);


if ($userQuery->num_rows > 0) 
{
    echo "<table><tr><th>Name</th><th>District</th> <th>Area</th> <th>Medium</th><th>Class</th><th>Address</th></tr>";
    while($row = $userQuery->fetch_assoc())
    {
      echo "<tr><td>".$row["fullname"]."</td><td>".$row["district"]."</td><td>".$row["area"]."</td><td>".$row["medium"]."</td><td>".$row["class"]."</td><td>".$row["contact"]."</td></tr>";
    }
    echo "</table>";
    
} 
 else
    echo "No search results found!!";
  


$connection->CloseCon($conobj);



?>