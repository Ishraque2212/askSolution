<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>askSolution - Coding Forums</title>
    <style>
        .container {
            flex: 1;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            padding: 20px;
        }
    </style>
    <link rel="shortcut icon" href="http://localhost/askSolution/image/favicon.png" type="image/x-icon">

<body style="background-color: #ff6666;">
    </head>

    <body>
        <?php
        require 'partials/_dbconnect.php';
        require 'partials/_header.php';
        ?>

        <!-- Search result -->
        <div class="container my-3" id="maincontainer">
            <h1 class="py-3">Search results for <em>"
                    <?php echo $_GET['search'] ?>"
                </em></h1>

            <?php
            $searchTerm = $_GET['search'];
            $sql = "SELECT * FROM thread WHERE MATCH(thread_title, thread_desc) AGAINST ('$searchTerm')";
            $result = mysqli_query($connect, $sql);

            $noresults = true; // Initialize $noresults outside the loop
            echo '<ul>';
            while ($row = mysqli_fetch_assoc($result)) {
                $thread_title = $row['thread_title'];
                $thread_desc = $row['thread_desc'];
                $thread_id = $row['thread_id'];
                $url = "thread.php?threadid=" . $thread_id;

                // Display the search result
                echo '<li class="result">
            <h3><a href="' . $url . '" class="text-dark">' . $thread_title . '</a></h3>
            <p>' . $thread_desc . '</p>
            </li>';

                $noresults = false; // Set to false if there are search results
            }
            echo '</ul>';
            if ($noresults) {
                // echo '<div class="jumbotron jumbotron-fluid">
                echo '  <div>
                            <p class="display-4">No Results Found</p>
                            <p class="lead"> Suggestions: <ul>
                                    <li>Make sure that all words are spelled correctly.</li>
                                    <li>Try different keywords.</li>
                                    <li>Try more general keywords. </li></ul>
                            </p>
                     </div>';
            }
            ?>
        </div>

        <?php require 'partials/_footer.php'; ?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    </body>

</html>