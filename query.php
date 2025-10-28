<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Query Page</title>
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    header {
      background-color: #666;
      padding: 30px;
      text-align: center;
      font-size: 35px;
      color: white;
    }
    section1 {
      padding: 30px;
      text-align: center;
      font-size: 20px;
      color: black;
    }
    nav {
      flex: 1;
      background: #ccc;
      padding: 20px;
    }
    nav ul {
      list-style-type: none;
      padding: 0;
    }
    article {
      flex: 3;
      background-color: #f1f1f1;
      padding: 10px;
    }
    footer {
      background-color: #777;
      padding: 10px;
      text-align: center;
      color: white;
    }
    #search {
      height: 50px;
      width: 100px;
    }
    @media (max-width: 600px) {
      section {
        flex-direction: column;
      }
    }
  </style>
</head>

<body class="bodyStyle">
  <header>
    <h2>Delta Track Social Research Organization</h2>
  </header>

  <section1>
    <hr>
    <h1>Country Data Query Page</h1>
    <h2>Please select which query you want to run.</h2>
  </section1>

  <form id="form1" method="post" action="query2.php">
    <select name="selection" required>
      <option value="">Select...</option>
      <option value="Q1">Mobile phones</option>
      <option value="Q2">Population</option>
      <option value="Q3">Life Expectancy</option>
      <option value="Q4">GDP</option>
      <option value="Q5">Childhood Mortality</option>
    </select>
    <input type="submit" id="search" value="Submit">
  </form>

  <nav>
    <ul>
      <li><h1><a href="index.php">Home</a></h1></li>
    </ul>
  </nav>

  <article>
    <h1>What is a DataSet?</h1>
    <p>DataSet is normally known as Collection of Data. It is a set or collection of data, which is basically over a tabular pattern.</p>
    <p>It can be termed as a collection of data where the dataset corresponds to one or more database tables and the row corresponds to data in the set.</p>
    <p>It is a part of data management where we can organize the data based on various types and classifications.</p>
    <p>Large datasets may take a long time to export, but you can leave the page and return later.</p>
  </article>

  <footer></footer>
  <div id="Copyright" class="center">
    <h5>&copy; 2023, Bluetech Group. All rights reserved.</h5>
  </div>
</body>
</html>








