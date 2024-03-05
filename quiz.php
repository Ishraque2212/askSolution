<!doctype html>
<html lang="en">

<?php include 'partials/_dbconnect.php' ?>
<?php include 'partials/_header.php' ?>
<?php
$id = $_GET['catid'];
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
    <title>
        <?php echo $catname ?> - Coding Forums
    </title>
    <link rel="shortcut icon" href="http://localhost/askSolution/image/favicon.png" type="image/x-icon">
    <style>
        .question-container {
            box-shadow: 0 8px 8px rgba(0.1, 0.1, 0, 0.1), 0 5px 5px rgba(0, 0, 0, 0.08);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h2>Quiz -
            <?php echo $catname; ?>
        </h2>
        <h5>Answer the following questions:</h5>
        <br>
        <form method="POST" action="http://localhost/askSolution/quiz_result.php?catid=<?php echo $id; ?>">
            <?php
            if ($id == 1) {
                require 'quiz/C_quiz.php';
            } elseif ($id == 2) {
                require 'quiz/Python_quiz.php';
            } elseif ($id == 3) {
                require 'quiz/Java_quiz.php';
            } elseif ($id == 4) {
                require 'quiz/Javascript_quiz.php';
            } elseif ($id == 5) {
                require 'quiz/SQL_quiz.php';
            } elseif ($id == 6) {
                require 'quiz/C++_quiz.php';
            } elseif ($id == 7) {
                require 'quiz/Node.js_quiz.php';
            } elseif ($id == 8) {
                require 'quiz/Express.js_quiz.php';
            } elseif ($id == 9) {
                require 'quiz/jQuery_quiz.php';
            } else {
                echo "Invalid category ID";
            }
            ?>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
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