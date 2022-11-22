<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Form</h2>
    <form action="prepared_stmt.php" method="POST">
        <input type="text" name="firstname" placeholder="Firstname"><br><br>
        <input type="text" name="lastname" placeholder="Lastname"><br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>
    <?php
    //make a connection to the database
    $conn = new mysqli('localhost', 'root', 'root', 'practise_signup');
    //make a query and put placeholders and put it in a prepared statement

    $sql = "INSERT INTO `details`
    VALUES(?,?)";
    $stmt = $conn->prepare($sql);

    //biind them to the placeholders
    $stmt->bind_param('ss', $firstname, $lastname);

    //make

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    //then execute the statement
    $stmt->execute();

    $stmt->close();
    $conn->close();




    ?>

</body>

</html>