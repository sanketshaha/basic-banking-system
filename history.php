
<html>
<head>


<style>

html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
  background-attachment: fixed;
}



.text h1{
    font-size: 70px;
    color: #fff;
    font-weight: 500;
}

.text p{
    font-size: 20px;
    color: #fff;
    font-weight: 300;
}

.text p a{
    color: #fff;
    font-weight: 700;
}

.form{
    background: transparent;
    color: #fff;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    width: 250px;
}

input{
    margin: 20px 0;
    padding: 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    font-family: 'Raleway', sans-serif;
}

.username, .password{
    border-bottom: 1px solid #fff;
}

.button{
    background: transparent;
    border: 1px solid #fff;
    color: #000;
    font-size: 18px;
}

.button:hover{
    background: #fff;
    color: #000;
}






h1{      
  position: relative;
  left: 45px;
  top: 12px;
  text-transform: uppercase;
   color:  #ddd;
   opacity: 0.8
   font-size: 300%	
}
h2{      
  position: relative;
  left: 90px;
  top: 12px;
  text-transform: uppercase;
   color:  #ddd;
   opacity: 0.8
   font-size: 200%	
}


table{
  
      display: inline-table;
      font-size: 140%;
      font-family: Arial, georgia, times;
      color: #000000;
      width: 75%;
      line-height: 100px;
      text-align: center;
      margin: 460px;
      margin-top: -10px;
      border: 2px;
      border-bottom: 25px;
      border-spacing: 4px;
    
}
table th{
      color: #FFFAF0;
       text-align: center;
      width: 130px;
      height: 40px;
      background-color: #6B8E23;
      border: 3px #00FF7F;
      border-bottom: solid #9acd32;
      border-radius: 5px 5px 0 0;
}
table tr>td{
    opacity: 0.8;
    text-align: center;
    padding: 0.5%;
    font-weight: bold;
    font-size: 100%;
    color: #000;
    background-color: #d6ebad;
    border-radius: 5px;
    text-shadow: 0 0 3px #FFA000;
}
table tr >:first-child{
    text-align: center;
}
table tr:hover td{
    opacity: 1;
}



.left{
	background: #767613;
	margin: 0px 5px 5px 5px;
	padding: 7px;
	float: left;
}

.right {
	display: inline-block;
	width: 80%	;
	float: left;
}






  .button {
  background-color:  #4CAF50;
  border: none;
  color: white;
  padding: 16px 76px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.Lbut:hover { 
 background-color: #ddd;
  color: black;
}
div#frm *{display:inline}
</style>


<div id="frm">
  <form action="index.html"><button type="submit"  class = "button Lbut"><strong>Home</strong></button>
  </form>

  <form action="SendMoney.php"><button type="submit" class = "button Lbut"><strong>Send Money</strong></button></form>
</div>

<h1> Account Holder: SANKET SHAHA</h1><br><br>
<h2>History</h2>



    
</head>
<body>

	<main>
<p>    </p>

  

<div class="searchbar" style="position: absolute;">

		<div id="sb-search" class="sb-search">
		
		<section class = "right">
                              
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BankingSystem";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM history";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
     echo "<table><tr><th>TimeStamp</th><th>To</th><th>Money</th></tr>";
      while($row = $result->fetch_assoc()) {
        $str1=$row["to"]." ".$row["time"]." ".$row["money"] ;
        echo "<tr><td>".$row["time"]."</td><td>".$row["to"]."</td><td>".$row["money"]."</td>";

      }
      echo "</table>";

    } 
     

 else {
  echo "<h2>0 results</h2>";
}
$conn->close();

?>
                               
</section>
	</main>

</body>
</html>