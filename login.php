<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
    <header class="main">
    <div class="row">
    <h1 class="col-sm-4">&copy;POONBOOK</h1>
     <nav class="col-sm-8 text-right"> 
<a href="home.php" style="color:white;">Home</a>
      </nav>
    </div>
  </header>
<br>
    
        <section class="main">
        <div class="row">
		 <div class="col-sm-4">
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>

			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button> 
			</div>
			<p>
				Not yet a member? <a href="register.php">Sign in</a>
			</p>
		</form>
		</div>
		<form>

		<p>
		<h1>Welcome to my Poonbook</h1>
		This poonbook also known as a telephone book, telephone address book phonebook is a listing of <br>
		phonebook subscribers in a geographical area or subscribers to services provided by the oraganization<br> 
		that publishes the directory. its purpose is to allow the phonebook email of a subscriber identifiesd by<br>
		name and address to be found.<br>
		<br>
		The advent of the internet and smartphones in the 21st century greatly reduced the need of a paper<br>
	    poonbook. Some communities, such as Seattle and San Francisco, sought to ban their unsolicited<br>
		distribution as wasted unwanted and harmful to the environment.<br><br>
		
		Subscriber names are generally listed in alphabetical order. together with their email. in principle<br>
		every subscriber in the geographical coverage area is listed, but subscribers may request the exclusion<br>
		of their number from the directory, often for a fee: thier email is then said to be unlisted, ex directory<br>
		private or private email, or non published.
		</p>
	
		</form>
		</div>
	
		
		</section>

	<br><br><br><br>
   <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
    </footer>
	


	


</body>
</html>