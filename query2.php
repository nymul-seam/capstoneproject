<html>
    <body>
        <?php
            // Include secure database connection
            include 'db.php';

            // Sanitize and validate user input
            include './parameters/get-parameters.php';
            $_pick = htmlspecialchars(trim($_POST['selection']));

            // Handle empty selection
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
                    include 'mortality.php'; // Updated filename
                    break;

                default:
                    echo "<p>Invalid selection. Please try again.</p>";
            }
        ?>

        <div id="Copyright" class="center">
            <h5>&copy; 2023, Bluetech Group. All rights reserved.</h5>
        </div>
    </body>
</html>



