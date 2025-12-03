<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Success</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container result-card">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect and sanitize input data
            $fullname = htmlspecialchars($_POST['fullname']);
            $email = htmlspecialchars($_POST['email']);
            $course = htmlspecialchars($_POST['course']);
            $city = htmlspecialchars($_POST['city']);

            echo "<h2>Application Successful!</h2>";
            echo "<p style='text-align:center; color:#666;'>Here are the details you submitted:</p>";

            // Display Data
            echo "<div class='result-item'>
                <span class='label-text'>Name:</span>
                <span>$fullname</span>
                </div>";

            echo "<div class='result-item'>
                <span class='label-text'>Email:</span>
                <span>$email</span>
                </div>";

            echo "<div class='result-item'>
                <span class='label-text'>Course:</span>
                <span>$course</span>
                </div>";

            echo "<div class='result-item'>
                <span class='label-text'>City:</span>
                <span>" . ($city ? $city : "Not Provided") . "</span>
                </div>";

        } else {
            echo "<h3 style='color:red; text-align:center;'>Error: No data submitted.</h3>";
        }
        ?>

        <a href="index.html" class="back-btn">← Go Back to Form</a>
    </div>

</body>

</html>