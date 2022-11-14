<?php
//connect to a database
$conn = new mysqli('localhost', 'root', 'root', 'login_info');

if ($conn->error) {
    echo "Error: " . $conn->error;
} else {
    echo 'Sucessfully connected to the database called login_info';
    echo '<br>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Application form</h2>
    <form action="" method="post">
        <input type="text" name="firstname" placeholder="enter your name"><br><br>
        <input type="text" name="surname" placeholder="enter your surname"><br><br>
        <input type="submit" name="submit" value="Apply">
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['surname'];

        // Insert statement stored in a variable
        $sql = "INSERT INTO details (firstname,surname)
        VALUES ('$firstname', '$lastname')"; // Inserting variable values as new records 

        // Check whether insert was successful
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully" . "<br>";
            echo "Welcome, your application has been sucessfully submitted ".$firstname;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


    ?>


</body>

</html>