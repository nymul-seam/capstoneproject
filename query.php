<html>
<head>
<meta charset="UTF-8">
<title>Query Page</title>
<link rel="stylesheet" href="css/styles.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
/* Style the header */
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
  color: Black;
}
/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
  
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
  
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
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

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
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
				
	<H2>Please select which query you want to run.</H2>
</section 1>
	<form id="form1" method="post" action='query2.php' size=20px>
		<select name="selection">
			<option value="">Select...</option>     
			<option value='Q1'>Mobile phones</option>  
			<option value='Q2'>Population</option>
			<option value='Q3'>Life Expectancy</option>
			<option value='Q4'>GDP</option>
			<option value='Q5'>Childhood Mortality</option>
		</select>
   
   		<input type="submit" id="search" value="Submit">
     
   </form>

   
<nav>
    <ul>
      <li><h1><a href=index.php>Home</a><h1></li>
    </ul>
</nav>
  
  <article>
    <h1>What is a DataSet?</h1>
    <p>DataSet is normally known as Collection of Data. It is a set or collection of data, which is basically over a tabular pattern.</p>
    <p> It can be termed as a collection of data where the dataset corresponds to one or more database tables and the row corresponds to data in the set. </p>
    <p>It is a part of data management where we can organize the data based on various types and classifications.</p>
    <p>Large datasets may take a long time to export, but you can leave the page and return later.</p>
  </article>
</section>
<br>
<footer>
</footer>
<div id="Copyright" class="center">
	<h5>&copy; 2023, Bluetech Group. All rights reserved.</h5>
</div>
</body>
</html>
