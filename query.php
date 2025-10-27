<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Country Data Query Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        header, footer {
            background-color: #666;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .section1 {
            text-align: center;
            padding: 30px;
        }
        #search {
            height: 50px;
            width: 100px;
        }
    </style>
</head>
<body>
    <header>
        <h2>Delta Track Social Research Organization</h2>
    </header>

    <div class="section1">
        <h1>Country Data Query Page</h1>
        <h2>Please select which query you want to run.</h2>

        <form method="post" action="query2.php">
            <label for="selection">Choose a data category:</label><br><br>
            <select name="selection" id="selection">
                <option value="">Select...</option>
                <option value="Q1">Mobile phones</option>
                <option value="Q2">Population</option>
                <option value="Q3">Life Expectancy</option>
                <option value="Q4">GDP</option>
                <option value="Q5">Childhood Mortality</option>
            </select><br><br>
            <input type="submit" id="search" value="Submit">
        </form><br>

        <a href="index.php">Home</a>
    </div>

    <footer>
        <p>&copy; 2023, Bluetech Group. All rights reserved.</p>
    </footer>
</body>
</html>





