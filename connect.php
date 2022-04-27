<?php
$yourname = $_POST['yourname'];
$email = $_POST['email'];
$message = $_POST['message'];
// database creation
$conn = new mysqli('localhost','root','','contact details');
if($_conn->connect_error);{
die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration (yourname, email, message ) values(?,?,?) ");
    $stmt->bind_param("sss", $yourname,$email,$message);
    $stmt->execute();
    echo "message sent successfully..." ;
    $stmt->close();
    $conn->close();
}


?>
