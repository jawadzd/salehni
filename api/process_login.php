<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="salehni";

$conn =new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}



function clean_input($data)
{
 $data =trim($data);
 $data =stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}




//login

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["login"])){
    $email=clean_input($_POST["email"]);
    $password=$_POST["password"];

    if (empty($email) || empty($password)) {
        $errors[] = "Please fill out all fields.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

       
        $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo '
        <script>
            const email = "' . $email . '";
            document.cookie = `email=${email}; expires=Thu, 31 Dec 2023 23:59:59 UTC; path=/`;
            window.location.href = "../main/home.php";
        </script>';
    } else {
        $message = 'Incorrect email or password';
        echo '<script>
            alert("' . $message . '");
            window.location.replace("../index.php");
        </script>';
    }

    exit();

}
?>