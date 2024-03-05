<!doctype html>
<html lang="en">
<?php include 'partials/_dbconnect.php'; ?>
<?php include 'partials/_header.php'; ?>
<?php
$id = $_GET['catid'];
$catname = '';
$catdesc = '';

// Check if the user is logged in before accessing user-related session variables
if (isset($_SESSION['useremail'])) {
    $email = $_SESSION['useremail'];
}

$sql = "SELECT * FROM `categories` WHERE category_id=$id";
$result = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $catname = $row['category_name'];
    $catdesc = $row['category_description'];
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques {
            min-height: 433px;
        }

        a {
            text-decoration: none !important;
            color: inherit;
        }

        a.learn-more-link:hover,
        a.test-knowledge-link:hover {
            color: #007bff;
            text-decoration: none !important;
        }
    </style>
    <title>
        <?php echo $catname; ?> - Coding Forums
    </title>
    <link rel="shortcut icon" href="http://localhost/askSolution/image/favicon.png" type="image/x-icon">
</head>

<body>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        // Insert into thread db
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];

        $th_title = str_replace("<", "&lt;", $th_title);
        $th_title = str_replace(">", "&gt;", $th_title);

        $th_desc = str_replace("<", "&lt;", $th_desc);
        $th_desc = str_replace(">", "&gt;", $th_desc);

        // Check if the user is logged in before accessing user-related session variables
        $sno = isset($_SESSION['sno']) ? $_SESSION['sno'] : null;

        $sql = "INSERT INTO `thread` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($connect, $sql);
        $showAlert = true;

        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your thread has been added! Please wait for the community to respond.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    }
    ?>



    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to
                <?php echo $catname; ?> forums
            </h1>
            <p class="lead">
                <?php echo $catdesc; ?>
            </p>
            <hr class="my-4">
            <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not
                post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post
                questions. Remain respectful of other members at all times.</p>
            <div>
                <a class="learn-more-link" href="http://localhost/askSolution/note.php?catid=<?php echo $id; ?>">Click
                    here to learn more about
                    <?php echo $catname; ?>
                </a>
            </div>
            <div>
                <a class="test-knowledge-link"
                    href="http://localhost/askSolution/quiz.php?catid=<?php echo $id; ?>">Click here to test your
                    knowledge about
                    <?php echo $catname; ?>
                </a>

            </div>

        </div>
    </div>

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo '<div class="container">
            <h1 class="py-2">Post your Query</h1> 
            <form action="' . $_SERVER["REQUEST_URI"] . '" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Problem Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as
                        possible</small>
                </div>
                <input type="hidden" name="sno" value="' . $_SESSION["sno"] . '">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ellaborate Your Concern</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>';
    } else {
        echo '
        <div class="container">
        <h1 class="py-2">Start a Discussion</h1> 
           <p class="lead">You are not logged in. Please login to be able to start a Discussion</p>
        </div>
        ';
    }

    ?>

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Browse Questions</h1>
        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `thread` WHERE thread_cat_id=$id";
        $result = mysqli_query($connect, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_time = $row['timestamp'];
            $thread_user_id = $row['thread_user_id'];

            // Retrieve user information
            $sql2 = "SELECT user_name, user_image FROM `users` WHERE sno='$thread_user_id'";
            $result2 = mysqli_query($connect, $sql2);

            if ($result2) {
                $row2 = mysqli_fetch_assoc($result2);

                if ($row2 && isset($row2['user_name'])) {
                    $me = $row2['user_name'];

                    // Convert binary image data to base64
                    $user_image_base64 = base64_encode($row2['user_image']);

                    echo '<div class="media my-3">
                        <img src="data:image/jpeg;base64,' . $user_image_base64 . '" width="54px" class="mr-3" alt="User DP">
                        <div class="media-body">
                            <h5 class="mt-0"><a class="text-dark" href="thread.php?threadid=' . $id . '">' . $title . '</a></h5>
                            ' . $desc . '
                        </div>
                        <div class="font-weight-bold my-0">Asked by: ' . $me . ' at ' . $thread_time . '</div>
                    </div>';
                } else {
                    // Handle the case when no user is found
                    $me = 'Unknown User';
                }
            } else {
                // Handle the case when the query fails
                $me = 'Unknown User';
            }
        }

        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="display-4">No Threads Found</p>
                    <p class="lead">Be the first person to ask a question</p>
                </div>
            </div>';
        }
        ?>
    </div>


    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
</body>

</html>