<!DOCTYPE html>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="http://localhost/askSolution/image/favicon.png" type="image/x-icon">
    <title>
        <?php echo $catname ?> Programming Notes
    </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: justify;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .c-info {
            margin-bottom: 20px;
        }

        /* Additional styles for the download button */
        .download-btn {
            display: block;
            margin: 20px auto;
        }
        .button-container {
    display: flex;
    justify-content: flex-end; /* Align items to the right corner */
    align-items: center; /* Align items vertically */
}

.button-container button,
.button-container a {
    margin-left: 10px; /* Add space between buttons */
}

    </style>
</head>

<body>
    <?php
    if ($id == 1) {
        require 'notes/C.php';
    } elseif ($id == 2) {
        require 'notes/Python.php';
    } elseif ($id == 3) {
        require 'notes/Java.php';
    } elseif ($id == 4) {
        require 'notes/Javascript.php';
    } elseif ($id == 5) {
        require 'notes/SQL.php';
    } elseif ($id == 6) {
        require 'notes/C++.php';
    } elseif ($id == 7) {
        require 'notes/Node.js.php';
    } elseif ($id == 8) {
        require 'notes/Express.js.php';
    } elseif ($id == 9) {
        require 'notes/jQuery.php';
    } else {
        echo "Invalid category ID";
    }


    ?>

    <!-- Include Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include html2pdf library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <!-- JavaScript to generate PDF -->
    <script>
        // Function to generate PDF
        function generatePDF() {
            const element = document.querySelector('.container');
            html2pdf(element, {
                margin: 1,
                filename: '<?php echo $catname ?>_Programming_Notes.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            });
        }
    </script>
    <div class="button-container">
        <!-- Download button -->
        <button onclick="generatePDF()" class="btn btn-danger download-btn">Download PDF</button>
        
        <a href="http://localhost/askSolution/threadlist.php?catid=<?php echo $id; ?>" class="btn btn-danger">Back to
            <?php echo $catname ?> forums
        </a>
    </div>

</body>
<?php include 'partials/_footer.php' ?>

</html>