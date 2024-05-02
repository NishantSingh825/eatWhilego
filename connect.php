<?php
$hostname = "127.0.0.1";
$db_username = "root";
$db_password = ""; 
$database = "animesh_form";


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$conn = new mysqli($hostname, $db_username, $db_password, $database);

if($conn->connect_error)
    die('Connection Failed: '. $conn->connect_error);

$stmt = $conn->prepare("insert into login(username, email, password) value(?, ?, ?)");
$stmt->bind_param("sss",$username,  $email, $password);
$stmt->execute();

$stmt->close(); 
$conn->close();
?>

<script>
alert("Registration Successful")
window.location.assign("index.html");
</script>
?>
