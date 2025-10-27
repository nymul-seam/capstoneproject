<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Query Results</title>
</head>
<body>
    <?php
        // Include secure database connection
        include 'db.php';

        // Sanitize and validate user input
        $_pick = isset($_POST['selection']) ? htmlspecialchars(trim($_POST['selection'])) : '';

        if (empty($_pick)) {
            echo "<p>Please select a valid query option.</p>";
            exit;
        }

        // Route to the correct data file
        switch ($_pick) {
            case "Q1":
                include 'mobile.php';
                break;
            case "Q2":
                include 'population.php';
                break;
            case "Q3":
                include 'lifeexpectancy.php';
                break;
            case "Q4":
                include 'gdp.php';
                break;
            case "Q5":
                include 'childmortality.php'; // Ensure this filename matches your repo
                break;
            default:
                echo "<p>Invalid selection. Please try again.</p>";
        }
    ?>

    <br><a href="query.php">Back to Query Page</a>
    <br><a href="index.php">Home</a>

    <footer>
        <p>&copy; 2023, Bluetech Group. All rights reserved.</p>
    </footer>
</body>
</html>








