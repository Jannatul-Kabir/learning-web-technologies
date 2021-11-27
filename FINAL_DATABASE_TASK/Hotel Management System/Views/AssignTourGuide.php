<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1">
    <style>
* {
  box-sizing: border-box;
}

body{
	font-family: Arial, Helvetica, sans-serif;
}
header {
  background-color: Green;
  padding: 10px;
  text-align: center;
  font-size: 15px;
  color: White;
}
nav{
	float: center;
  width: 100%;
  height: 500px;
  background-color: White;}
  nav ul {
  list-style-type: none;
  padding: 10px;
  
}
li {
  float: left;
}
li a{display: block;
padding: 5px;
background-color: skyblue;
}
 

article {
  float: left;
  padding: 10px;
  width: 30%;
  background-color: #f1f1f1;
  height: 500px;} 
  section::after {
  content: " ";
  display: table;
  clear: both;
}
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
</body>
<header>
	<h1><font face= "Algerian" size="5">Tour Guide Information</font></h1>
</header>

<section>
<nav>
<ul>
<div class= "main">
<li><a href="#">For East Cost</a></li><br>
<img src= "../image/t1.JPG" width="300" height="200"></a><br>
<br><img src= "../image/t2.JPG" width="300" height="200"></a>

      <br><li><a href="#">For West Cost</a></li><br>
      <br><img src= "../image/t3.JPG" width="300" height="200"></a>
    </ul>
  </nav>
  </section>
  </body>
</html>


<?php
	}else{
		header('location: login.html');
	}
?>