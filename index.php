<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav" id="saura">
			<li><a href="index.html">Home<span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="https://www.facebook.com/">LogIn<span class="glyphicon glyphicon-user"></span></a></li>
		</ul>
		<button class="btn btn-lg">
		<?php
			echo $_POST["name"];
		?>
		</button>
		<button class="btn btn-success">
			Success
		</button>
		<button class="btn btn-primary btn-sm">
			Primary
		</button>
		<button class="btn btn-info btn-xs">
			Info
		</button>
		<div id="sau">
		<?php
			if (isset($_POST["data"]))
			{
				echo "Hi ".$_POST["name"];
			}
							//any where u can use ,look at both echo command
		?>
		</div>
	</nav>
	
	<div class="container">
		<center><h1>This is Container</h1></center>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<p> 4. Write a c program to merge two sorted linked list
					5. Write a c program to reverse a given linked list.
					6. Write a c program to remove duplicates from a sorted linked list.
					7. Write a c program to find intersection point of two linked list.
					8. Write a c program to check given list is palindrome or not.
					9. Write a c program to delete alternate nodes of linked list.
					10.Write a Linked list implementation of Queue.
				</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<p> 4. Write a c program to merge two sorted linked list
					5. Write a c program to reverse a given linked list.
					6. Write a c program to remove duplicates from a sorted linked list.
					7. Write a c program to find intersection point of two linked list.
					8. Write a c program to check given list is palindrome or not.
					9. Write a c program to delete alternate nodes of linked list.
					10.Write a Linked list implementation of Queue.
				</p>
			</div>
		</div>
	</div>

	<img id="gau" class="img-responsive" src="img/H34.jpg" width="1350" height="700">
	<img src="img/(196).JPG" class="img-circle" id="gaurabh">
	<style type="text/css">
		#gaurabh{
			position: fixed;
			width: 200px;
			height: 150px;
			right: 20px;
			border: 5px solid green;
		}
		#gau{
			position: absolute;
			top: 52px;
			left: 0px;
			z-index: -1;
		}
		#sau{
			color: white;
			font-family: cursive;
			font-size: 30px;
		}
		#saurabh{
			color: red;
			font-size: 20px;
			font-family: cursive,"Times New Roman",modern,fantasy,serif;
		}
		#saura{
			max-width: 1350px;
		}
	</style>
	<div id="saurabh" class="container">
		<?php
			if (isset($_POST["data"]))
			{
				echo "Name is ".$_POST["name"]."<br>";
				echo "Password is ".$_POST["Pass"]."<br>";
				echo "Email is ".$_POST["email"];
			}
		?>
	</div>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>
</html>