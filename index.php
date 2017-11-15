<!DOCTYPE html>
	<html>
		
		<head>
			<title>Kika's Kitchen Homepage</title>
		
		
		
		  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


		


		
		
		
		<link rel="stylesheet" type="text/css" href="kikaskitchen_homepage.css?v=1" /> 
		
		</head>
		
		
		<body
		<?php
		echo "<table border='1' width = '500' align = 'right' >";
		
			
				
				echo "<form action = 'kikaskitchen_register.php' method = 'post'>";
				echo "<td align = 'center'> <input type = 'submit' name='Register' value='Register' > </td>";
				echo "</form>";
				echo "<form action = 'kikaskitchen_login.php' method = 'post'>";
				echo "<td align = 'center'><input type = 'submit' name='Login' value = 'Login' ></td>";
				echo "</form>";
				echo "</tr>";
				
				
			
			
			
			
			echo "</table>";
			?>

		<h1 align='center' >Kika's Kitchen</h1>
		</br></br></br>
		
		
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" align="center">
      <img class="d-block"  src="web/images/cake.jpg"  width="auto" height="300" alt="First slide">
    </div>
    <div class="carousel-item" align="center">
      <img class="d-block" src="web/images/jamcookies.jpg" width="auto" height="300" >
    </div>
    <div class="carousel-item" align="center">
      <img class="d-block" src="..." width="auto" height="300" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


		</br></br></br>
			
			<?php
			
				// closed connection ok
				
				
			//include 'colorVars.php';			
			include 'kikaskitchen_settings.php';

			//echo "$hostName, $dbUsername, $dbPassword, $dbName <br>";
			//echo "<br>$hostName  $dbUsername  $dbPassword  $dbName</br>";
			
			
			$con=mysqli_connect($hostName, $dbUsername, $dbPassword, $dbName);

			if (mysqli_connect_errno())
			{
				die("oh my!");
				//echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			
			$sql = "SELECT * FROM recipes";
			$result = mysqli_query($con,$sql);
			
			if ($result == null)
			{
				echo "<br> result is null </br>";
			}
			

			{
				$num = mysqli_num_rows($result);
				//echo "<br> Number of Rows = $num </br>";
			}
			
			//need two forms one for register other for login
			echo "<table border='1' width = '500' align = 'center' >";
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				$recipeName = $row['recipeName'];
				echo "<td> &nbsp; $recipeName </td>";
				
				$ingredients = $row['ingredients'];
				echo "<td> &nbsp; Ingredients: $ingredients </td>";
				
				$instructions = $row['instructions'];
				echo "<td> &nbsp; Instructions: $instructions </td>";
				
				$prepTime = $row['prepTime'];
				echo "<td> &nbsp; Prep time: $prepTime </td>";
				
				
			}
			
			mysqli_close($con);
			
			echo "</table>";
			
			
			
			
			
			?>
			<?php
			
				include 'kikaskitchen_settings.php';
				
				$username = "";
				$password = "";
				
			?>
			<div style="text-align:center">
			</br></br>
			</br></br>
			<br>
			<!--<form name='fromLogin' method="post" action="kikaskitchen_admin.php"> 
			
				<p> Administrator Username: <input type= "text" name = 'username' id = 'username' value ='<?php echo $username;?>'> </p>
				<br>
				<p> Password: <input type = 'password' name = 'password' id = 'password' value = '<?php echo $password;?>'> </p>
				<br>
				
				<input type='hidden' name='fromLogin'  value='fromLogin'>
				
				<input type='hidden' name='admin'  value='admin'>

					
				</br>
				
				<input type="submit" name="Login" value="Log In"'>
				
				</br></br></br>

				
			</form>-->	

				
				
			

			</br></br>
			

				
				
				</br>
				</br>
				<textarea rows = '2' cols = '48' readonly>Software written by Marika Murphy.</textarea>
				</div>
				</br>
				</br>
				
			
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
	</html>
			
			
