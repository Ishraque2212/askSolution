<?php
session_start();
include '_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row || password_verify($pass, $row['user_pass'])) {
        // if ($row) {
            // if (true) {
            // Successful login
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['useremail'] = $email;
            header("Location: http://localhost/askSolution/welcome.php?login=success");
            exit();
        } else {
            // Incorrect password
            $_SESSION['loginError'] = "Incorrect password";
        }
    } else {
        // No account found with this email
        $_SESSION['loginError'] = "No account found with this email";
    }

    header("Location: http://localhost/askSolution/welcome.php?login=error");
    exit();
}
?>