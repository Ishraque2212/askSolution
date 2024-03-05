<?php
include '_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["contact_email"];
    $text = $_POST["contact_text"];

    // Insert data into the database (modify this according to your database structure)
    $sql = "INSERT INTO `contact` (`email`, `message`, `created_at`) VALUES ('$email', '$text', current_timestamp());";
    $contactResult = mysqli_query($connect, $sql);

    if ($contactResult) {
        header("Location: http://localhost/askSolution/contact.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

}
?>