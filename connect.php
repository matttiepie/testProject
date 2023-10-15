<?php
$connection = mysqli_connect("partygoer.mysql.database.azure.com","matthewmartinez","1qaz2wsx!QAZ@WSX","herewego");
$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];
$id=2;
    if(!$connection)
    {
        die("Error".mysqli_connect_error());
    }
    else
    {
        echo 'connection established'.'</br>';
    }
    $query = "SELECT * from LOGIN";
    $query1 = "INSERT INTO LOGIN VALUES('$USERNAME','$PASSWORD')";

    $stmt=mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC))
    {
        if($row['USERNAME'] == $USERNAME)
        {
            echo 'hello';
            die();
        }
        echo $row['USERNAME'].' '.$row['PASSWORD'].'</br>';
    }
    $stmt=mysqli_query($connection,$query1);
?>

