<html>
    <head><title>Online voting</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">

   
	<style>
		.card{
			width:400px;
			margin-left:auto;
			margin-right:auto;
			margin-top:100px;
			text-align:center;
			padding:30px;	
			border:4px #a517ba solid;
			border-radius:5px;	
		}
	</style>
    </head>
	<body>
         <div class="header">
     <h1 class="logo">Vote</h1>   
        <div class="main">
            <p><a href="index.html"><b>Home</b></a></p>
            <p> <a href="admin.php"><b>Admin </b></a></p>
            <p> <a href="year.html"><b>Candidate </b></a></p>
            <p><a href="result.html"> <b>Result </b></a></p>
            <p><a href="about.html"> <b>About </b></a></p>
  
          </div>    </div>
		<section >
			<div class="card">
				<div >
					<div>
						<h3>Admin Login</h3>
					
					<form action="process.php" method="post">
						<div>
							<input required type="text" name="username" placeholder="username" value="" />
						</div>
						<div >
							<input required type="password"  name="password" placeholder="Your Password *" value="" />
						</div>
						<div >
							<input required type="submit" class="btnSubmit" value="Login"/>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</section>
  
	</body>
	</html>


	<?php
    // Display the error message if it exists
    session_start();
    if (isset($_SESSION['error'])) {
        echo '<p style="text-align:center;color: red;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']); // Clear the error message
    }
		

	
    ?>