<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Country Data Query</title>
  <style>
    #pickquery { height: 50px; width: 150px; }
  </style>
</head>
<body>
  <h1>Country Data Query Page</h1>

  <form method="post" action="query2.php">
    <select name="selection" required>
      <option value="" disabled selected>Select…</option>
      <option value="Q4">GDP</option>
      <option value="Q3">Life expectancy</option>
      <option value="Q1">Mobile phones</option>
      <option value="Q5">Child mortality</option>
      <option value="Q2">Population</option>
    </select>
    <button type="submit" id="pickquery">Submit</button>
  </form>

  <p><a href="index.php">Home</a></p>
</body>
</html>








