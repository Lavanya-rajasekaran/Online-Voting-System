<?php

include("dbConnect.php");



$sql = "SELECT candidate,count(*) as result from  `users` group by candidate";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs =  $stmt->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
<html>
    <head><title>Online voting</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    <style>
    .card-5{
        border: 2px black solid;
        padding: 30px;
        margin-top:5%;
        width:70%;
        margin-left:auto;
        margin-right:auto;
        
    }

    </style>
</head>
<body>
<div class="header">
        <h1 class="logo">Vote</h1>   
           <div class="main">
               <p><a href="index.html"><b>Home</b></a></p>
               <p> <a href="admin.php"><b>Admin </b></a></p>
               <p> <a href="year.html"><b>Candidate </b></a></p>
               <p><a href="result.html"> <b>Result </b></a></p>
               <p><a href="about.html"> <b>About </b></a></p>
     
             </div>    </div>
<div>
    <div class="row">
        <div>
            <div class="card-5">
            <h2><strong>Result</strong></h2>
            <hr>
        <?php foreach($rs as $row){
  
 
  echo "<strong>".$row['candidate']." = ".$row['result']." </strong><br>";

}
?>

        </div>
    </div>
</div>

</div>



</html>
