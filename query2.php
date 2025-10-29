<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Query Results</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 20px;
      color: #333;
    }

    main {
      max-width: 800px;
      margin: auto;
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .home-link {
      text-align: center;
      margin-top: 30px;
    }

    .home-link a {
      color: #00796B;
      text-decoration: none;
      font-weight: bold;
    }

    footer {
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

<main>
  <h1>Query Results</h1>

  <?php
    $_pick = $_POST['selection'] ?? '';

    switch ($_pick) {
      case "Q1": include 'mobile.php'; break;
      case "Q2": include 'population.php'; break;
      case "Q3": include 'lifeexpectancy.php'; break;
      case "Q4": include 'gdp.php'; break;
      case "Q5": include 'mortality.php'; break;
      default: echo "<p>No valid query selected.</p>";
    }
  ?>

  <div class="home-link">
    <a href="query.php">Back to Query Page</a>
  </div>
</main>

<footer>
  &copy; 2023, Bluetech Group. All rights reserved.
</footer>

</body>
</html>












