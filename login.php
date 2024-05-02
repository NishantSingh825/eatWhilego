<?php

    session_start();

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $hostname="127.0.0.1";
    $username="root";
    $password="";
    $name="animesh_form";

    $conn = new mysqli($hostname, $username, $password, $name);

    if($conn->connect_error)
        die('Connection Failed: '. $conn->connect_error);
    
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) === 1)
    {
        $row = mysqli_fetch_assoc($result);
        if($row['email'] == $email && $row['password'] == $password)
        {
            echo '<script>;
            alert("Login Successfull");
            window.location.assign("index.html");
            </script>';
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            exit();
        }
        else
        {
            echo '<script>;
            alert("Incorrect Data/No Data Found");
            window.location.assign("index.html");
            </script>';
        }
    }
    $conn->close();
?>
