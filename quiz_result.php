<!DOCTYPE html>
<html lang="en">
<?php
include 'partials/_dbconnect.php';
include 'partials/_header.php';

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
        <?php echo $catname ?> - Quiz Score
    </title>
    <link rel="shortcut icon" href="http://localhost/askSolution/image/favicon.png" type="image/x-icon">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .content {
            flex: 1;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: 20px;
        }

        h1,
        p {
            text-align: center;
        }

        .bttn {
            display: block;
            margin: auto;
            margin-top: 20px;
        }


        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>

<body>

    <div class="content">
        <div class="container my-5">
            <h1>
                <?php echo $catname ?> - Quiz Score
            </h1>
            <p>Here are your answers:</p>

            <?php
            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Process quiz answers
                if (isset($_POST['answers'])) {
                    $answers = $_POST['answers'];
                    // Correct answers
                    if ($id == 1) {
                        $correct_answers = ['C', 'A', 'C', 'B', 'A', 'C', 'B', 'A', 'B', 'B'];
                    } elseif ($id == 2) {
                        $correct_answers = ['A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'A'];
                    } elseif ($id == 3) {
                        $correct_answers = ['A', 'B', 'C', 'A', 'A', 'C', 'B', 'B', 'A', 'A'];
                    } elseif ($id == 4) {
                        $correct_answers = ["B", "C", "A", "C", "B", "C", "A", "B", "B", "A"];
                    } elseif ($id == 5) {
                        $correct_answers = ['B', 'A', 'A', 'B', 'C', 'B', 'A', 'B', 'B', 'C'];
                    } elseif ($id == 6) {
                        $correct_answers = ['B', 'A', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A'];
                    } elseif ($id == 7) {
                        $correct_answers = ['B', 'C', 'A', 'C', 'B', 'C', 'A', 'C', 'C', 'C'];
                    } elseif ($id == 8) {
                        $correct_answers = ['B', 'B', 'A', 'B', 'C', 'B', 'C', 'B', 'A', 'B'];
                    } elseif ($id == 9) {
                        $correct_answers = ['B', 'B', 'A', 'C', 'A', 'B', 'C', 'C', 'A', 'B'];
                    } else {
                        $correct_answers = [];
                    }
                    // Calculate score
                    $score = 0;
                    foreach ($answers as $key => $answer) {
                        if ($answer === $correct_answers[$key]) {
                            $score++;
                        }
                    }

                    // Display results
                    echo "<p>Your Score: $score / " . count($correct_answers) . "</p>";
                } else {
                    echo "<p>No answers submitted.</p>";
                }
            }
            ?>

            <a href="http://localhost/askSolution/quiz.php?catid=<?php echo $id; ?>" class="bttn btn btn-danger">Back to
                Quiz</a>
        </div>
    </div>

    <?php include 'partials/_footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>