<?php
include("../connection.php");



$user_id = mysqli_real_escape_string($con, $_POST['user_id']);
$user_username = mysqli_real_escape_string($con, $_POST['user_username']);
$user_email = mysqli_real_escape_string($con, $_POST['user_email']);
$user_password = mysqli_real_escape_string($con, $_POST['user_password']);
$user_state = mysqli_real_escape_string($con, $_POST['user_state']);

$updateQuery = "UPDATE `user` SET 
    user_username = '$user_username',
    user_email = '$user_email',
    user_password = '$user_password',
    user_state = '$user_state',
    user_id = '$user_id'
    WHERE user_id = '$user_id'";

$result = mysqli_query($con, $updateQuery);

if ($result) {
    echo "Update successful!";
} else {
    echo "Update failed!";
}


header("Location: ../view.php");
exit();
