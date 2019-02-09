<?php include('server.php'); 

   if (empty($_SESSION['username'])){
	   header('location: login.php');
   }
   
  
?>  
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
         
	     <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		      <p><a href="index.php?logout='1'" style="color:white;">Logout</a></p>
		 <?php endif ?> 
		</nav>
		</div>
		 </header>
	<br>
	<form>

		<p>
		<h1>Welcome to Poonbook</h1>
		Create your own poonbook list 
		</p>  
		<a href="add.php" class="btn">View Contact</a>
    </form>

 <br><br>s
    <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
    </footer>


</body>
</html>