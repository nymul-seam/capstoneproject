<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Country Data Query Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #00796B;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
    }

    main {
      max-width: 800px;
      margin: 40px auto;
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 10px;
    }

    h2 {
      text-align: center;
      font-size: 18px;
      margin-bottom: 30px;
      color: #555;
    }

    form {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 30px;
    }

    select {
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 200px;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #00796B;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #005f56;
    }

    .home-link {
      text-align: center;
      margin-bottom: 40px;
    }

    .home-link a {
      color: #00796B;
      text-decoration: none;
      font-weight: bold;
    }

    article {
      padding: 20px;
      border-top: 1px solid #ddd;
    }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

<header>
  Delta Track Social Research Organization
</header>

<main>
  <h1>Country Data Query Page</h1>
  <h2>Please select which query you want to run.</h2>

  <form method="post" action="query2.php">
    <select name="selection" required>
      <option value="" disabled selected>Select...</option>
      <option value="Q1">Mobile phones</option>
      <option value="Q2">Population</option>
      <option value="Q3">Life Expectancy</option>
      <option value="Q4">GDP</option>
      <option value="Q5">Childhood Mortality</option>
    </select>
    <button type="submit">Submit</button>
  </form>

  <div class="home-link">
    <a href="index.php">Home</a>
  </div>

  <article>
    <h2>What is a DataSet?</h2>
    <p>DataSet is normally known as a collection of data. It is a set or collection of data, which is basically over a tabular pattern.</p>
    <p>It can be termed as a collection of data where the dataset corresponds to one or more database tables and the row corresponds to data in the set.</p>
    <p>It is a part of data management where we can organize the data based on various types and classifications.</p>
    <p>Large datasets may take a long time to export, but you can leave the page and return later.</p>
  </article>
</main>

<footer>
  &copy; 2023, Bluetech Group. All rights reserved.
</footer>

</body>
</html>








