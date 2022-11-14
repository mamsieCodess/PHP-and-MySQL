<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
 include "connect.php";

 //used for creating a database, tables, inserting data and retrieving the data

$sql = "SELECT `hobbies`, `city` FROM `extra` WHERE hobbies ='swimming' ";

$result = $conn->query($sql); //stoe the select query in a variable

  if($result->num_rows > 0){

      echo 'When I am bored I tend to go '.$result->fetch_assoc()['hobbies'].'<br>';
  }

 else{
  
  echo "Selecting table error: ". $conn->error;
 }
    ?>

</body>
</html>
