<?php
	include 'index.php';
	
?>
<html>
	<head>
		<title>LOGIN PAGE</title>
		<style>
			body{
				background: url(res-houses.jpg) ;
				width: 100%;
				height: 100%;
				 padding: 0px;
				 margin: 0px;
					}
			.cont
				{background: #CCC7B7;
				  height: 400px;
				  width: 40%;
				  margin-top: 10%;
				   margin-left: 10%;


			}
			.login{
				 margin: 25%;
				 padding:10%;
			}
			.login input[type="text"]{
				 padding: 5%;
				 margin: 4px;
			}
			.login input[type="password"]{
				 padding: 5%;
				 margin: 4px;
			}
			.login input[type="submit"]{
				padding: 5%;
				 margin: 4px;
				 width: 120px;
                 background: #4EADCC;
			}
            span{
                  margin: 5%;
                  padding: 20%;
                  color: black;
            }
			.signup{
				margin: 10px;
				padding: 5px;
			}


		</style>
	</head>
	<body>
		<div class="cont">
			<form class="login" action="user.php" method="POST">
				<label for="name"><strong>Name:</strong>
				<input type="text" placeholder="Enter your name" name="fname"><br>
				<label for="password"><strong>Password:</strong>
				<input type="password" placeholder="Enter password" id="password"><br>
				<input type="submit" value="LOGIN"><br>
				<div class="signup"><a href="user.php"><span>SIGNUP!</span></div>
		</div>
	</body>
</html>