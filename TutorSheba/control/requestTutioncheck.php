<?php
include "../model/db.php";
session_start();


$error=$contact="";
$area="Select Area";
$medium="Select Medium";
$class="Select Class";
$subject="Select Subject";
$district="Select Districts";

$connection = new db();
$conobj=$connection->OpenCon();


if(isset($_POST['submit'])){

    $userQuery = $connection->InsertTutionRequest($conobj, "tuition_request", $_SESSION["logusername"],$_POST['name'],$_POST['district'],$_POST['area'],$_POST['medium'],$_POST['class'],$_POST['subject'],$_POST['contact']);
    if ($userQuery === true)
    {
        $error = "Request has been placed!!!";             
    }
    else
    {
        $error = "Already Submitted!!!" ;
    }
    
}





if (isset($_POST['update'])) {
    
    
    $userQuery=$connection->UpdateTutionRequest($conobj,"tuition_request",$_SESSION["logusername"],$_POST['district'],$_POST['area'],$_POST['medium'],$_POST['class'],$_POST['subject'],$_POST['contact']);
    if($userQuery==TRUE)
    {      
        $error = " Request has been placed";      
    }
    else
    {
        $error = " request has not been placed";    
    }
    
 }

 if(isset($_POST['delete'])){

    $userQuery = $connection->DeleteTutionRequest($conobj, "tuition_request", $_SESSION["logusername"]);
    if ($userQuery === true)
    {
        $error = "Request has been Deleted!!!";
     
    }
    else
    {
        $error = "Request  of delete failed!!!" ;
    }
    

}


$userQuery=$connection->CheckTutionRequest($conobj,"tuition_request",$_SESSION["logusername"]);
if($userQuery->num_rows > 0)
{
    while($row = $userQuery->fetch_assoc())
     {
        
        $district=$row["district"];
        $area=$row["area"];
        $medium=$row["medium"];
        $class=$row["class"];
        $subject=$row["subject"];
        $contact=$row["contact"];
     }
       
}