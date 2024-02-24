<?php

include("../connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ticket_id = rand(1000, 9999);
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gmail = $_POST["gmail"];
    $country = $_POST["country"];
    $phonenum = $_POST["phonenum"];
    $whatsapp = $_POST["whatsapp"];

echo $name;
    $query = "INSERT INTO `ticket` (`ticket_id`, `ticket_username`, `ticket_age`, `user_email`, `ticket_country`, `ticket_phonenum`, `ticket_whatsapp`) VALUES ('$ticket_id','$name', '$age', '$gmail', '$country', '$phonenum', '$whatsapp')";
    
    // Execute the query
    if (mysqli_query($con, $query)) {
        echo "Ticket booked successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    header("Location: ../../service.php");
    exit();
}
?>