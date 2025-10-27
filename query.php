<html>
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
    .section1 {
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

  <div class="section1">
    <hr>
    <h1>Country Data Query Page</h1>
    <h2>Please select which query you want to run.</h2>

    <form id="form1" method="post" action="query2.php">
      <label for="selection">Choose a data category:</label><br><br>
      <select name="selection" id="selection">
        <option value="">Select...</option>
        <option value="Q1">Mobile phones</option>
        <option value="Q2">Population</option>
        <option value="Q3">Life Expectancy</option>
        <option value="Q4">GDP</option>
        <option value="Q5">Childhood Mortality</option>
      </select>
      <br><br>
      <input type="submit" id="search" value="Submit">
    </form>
  </div>

  <nav>
    <ul>
      <li><h1><a href="index.php">Home</a></h1></li>
    </ul>
  </nav>

  <article>
    <h1>What is a DataSet?</h1>
    <p>DataSet is normally known as a collection of data, often organized in a tabular format.</p>
    <p>It corresponds to one or more database tables, where each row represents a data record.</p>
    <p>It helps in organizing and classifying data for analysis and research.</p>
    <p>Large datasets may take time to export, but you can leave the page and return later.</p>
  </article>

  <footer></footer>
  <div id="Copyright" class="center">
    <h5>&copy; 2023, Bluetech Group. All rights reserved.</h5>
  </div>
</body>
</html>


