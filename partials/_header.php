<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-light bg-danger">';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // Assuming you have a database connection named $connect
    $userEmail = $_SESSION['useremail'];
    $sql = "SELECT user_image FROM users WHERE user_email = '$userEmail'";
    $result = mysqli_query($connect, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $userImage = base64_encode($row['user_image']); // Convert BLOB to base64
        echo '<a class="navbar-brand" href="./welcome.php"><img src="data:image/jpeg;base64,' . $userImage . '" length=80 width=40></a>';
    } else {
        // If user image is not available, show a default image
        echo '<a class="navbar-brand" href="./welcome.php"><img src="default_user_image.jpg" length=80 width=40></a>';
    }
} else {
    echo '<a class="navbar-brand" href="./welcome.php"><img src="http://localhost/askSolution/image/askSolution.png" length=80 width=40></a>';
}
echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Top Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
$sql = "SELECT category_name, category_id FROM `categories` LIMIT 5";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<a class="dropdown-item" href="http://localhost/askSolution/threadlist.php?catid=' . $row['category_id'] . '">' . $row['category_name'] . '</a>';
}
echo '</div>
</li>
<li class="nav-item">
<a class="nav-link" href="./contact.php" tabindex="-1">Contact</a>
</li>
</ul>';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // $userEmail = $_SESSION['useremail'];
    $sql = "SELECT user_name FROM users WHERE user_email = '$userEmail'";
    $result = mysqli_query($connect, $sql);
    $userData = mysqli_fetch_assoc($result);
    $userName = $userData['user_name'];
    echo '<form class="form-inline my-2 my-lg-0" method="get" action="http://localhost/askSolution/search.php">
    <p class="text-light my-0 mx-2">Welcome, <b>' . $userName. '</b> </p>
                <input class="form-control mr-sm-2" name="search" type="search" action="http://localhost/askSolution/search.php" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light bg-danger my-2 my-sm-0" type="submit">Search</button>
                  <a href="http://localhost/askSolution/partials/_logout.php" class="btn btn-outline-light bg-danger ml-2">Logout</a>
                  </form>';
} else {
    echo '<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light bg-danger my-2 my-sm-0" type="submit">Search</button>
                </form>
                <button class="btn btn-outline-light bg-danger ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
                <button class="btn btn-outline-light bg-danger mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
}

echo '</div></div>
    </nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && !isset($_SESSION['loginSuccessDisplayed'])) {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Login Success!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    $_SESSION['loginSuccessDisplayed'] = true;
}

if (isset($_GET['login']) && $_GET['login'] == 'error') {
    // Check for login error message
    if (isset($_SESSION['loginError'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>Login Failed!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
        unset($_SESSION['loginError']); // Clear the login error message
    }
}



?>