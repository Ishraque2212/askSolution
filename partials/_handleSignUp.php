<?php
$showError = "false";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    $user_name = $_POST['signupName'];
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];
    $image = file_get_contents($_FILES['user_image']['tmp_name']); // Read the file as binary data

    // Check password complexity
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
        $showError = "Password should be minimum of 8 characters and include at least one uppercase letter, one lowercase letter, one number, and one special character.";
    } else {
        // Check file size
        if ($_FILES["user_image"]["size"] > 10000000) {
            $showError = "Sorry, your file is too large.";
        } else {
            // Allow certain file formats
            $allowedTypes = array("jpg", "jpeg", "png", "gif");
            $imageFileType = strtolower(pathinfo($_FILES["user_image"]["name"], PATHINFO_EXTENSION));

            if (!in_array($imageFileType, $allowedTypes)) {
                $showError = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            } else {
                // File size and type are valid, proceed with user registration
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_pass`, `user_image`, `timestamp`) VALUES ('$user_name', '$user_email', '$hash', ?, current_timestamp())";

                // Use prepared statement to bind binary data
                $stmt = mysqli_prepare($connect, $sql);
                mysqli_stmt_bind_param($stmt, 's', $image);
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    $showAlert = true;
                    header("Location: http://localhost/askSolution/welcome.php?signupsuccess=true");
                    exit();
                } else {
                    $showError = "Error inserting user data into the database.";
                }

                mysqli_stmt_close($stmt);
            }
        }
    }

    header("Location: http://localhost/askSolution/welcome.php?signupsuccess=false&error=$showError");
}
?>