
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


.text, .box{
    margin-top: 45vh;
    flex: 1;
}

.text{
    margin-left: 10%;
    font-weight: 300px;
}

.box{
    margin-left: 5%;
    margin-top: 1%;
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
   color: #ddd;
   opacity: 0.8
   font-size: 350%	
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
      line-height: 80px;
      text-align: center;
      margin: 460px;
      margin-top: -350px;
      border: 2px;
      border-bottom: 25px;
      border-spacing: 4px;
    
}
table th{
      color: #FFFAF0;
       text-align: center;
      width: 130px;
      height: 20px;
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

  <form method="get" action="history.php"><button class="button" type="submit">History</button>
  </form>

</div>

<h1> Account Holder: SANKET SHAHA</h1><br>
<h2>    Transfer money</h2>

<div class="box">
                <form class="form" action="done.php" method="post">
                    <input type="text" class="username" name="name" placeholder="Name" required>
                    <input type="text" class="password" name="money" placeholder="Money" required>
                    <input type="submit"  class="button" value="Transfer">
                </form>
            </div>

    
</head>
<body>

	<main>
<p>    </p>

  





  </form>


		<div class="searchbar" style="position: absolute;">

		<div id="sb-search" class="sb-search">
		
		<section class = "right">
                              <table>
                              <tr><th>No.</th><th>Name</th><th>Email</th><th>Money</th>
                               <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bankingsystem";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM accounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."@gmail.com</td><td>".$row["Balance"]."</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();

                               ?>
                              </table>
	


                            </section>
	</main>

</body>
</html>