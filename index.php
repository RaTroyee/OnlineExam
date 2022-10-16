] <?php 

session_start();
include('dbcontroller.php');

	include "functions.php";

?>
<html>

<head>

		<title>Welcome To Online Exam System</title>
		<link rel="icon" href="images/icon1.jpg" >

		<style type="text/css">
			body{
 
 				background:url(images/logo2.jpg);
  				animation: chbg 60s infinite alternate;
  				background-size:cover
			}

			@keyframes chbg {
  			0% {
    			background:url(images/logo2.jpg);
  				background-size:cover
  			}
  			20% {
    			background:url(images/logo6.png);
  				background-size:contain;
  			}
  			40% {
    			background:url(images/logo3.jpg);
  				background-size:cover
  			}
  			60% {
    			background:url(images/logo4.jpg);
  				background-size:cover
  			}
  			80% {
    			background:url(images/logo3.jpg);
  				background-size:cover
  			}
  			100% {
    			background:url(images/logo3.jpg);
  				background-size:cover
  			}
			}

			#top1{
	    		position: absolute;
				top: -10px;
				right: 0px;
	   			border: 10px solid ;
				border-color:#214989;
	   		    padding: 10px;
	    		margin: 20px;
	    		text-align: center;
	    		background-color: #e8ff9c;
				border-radius: 20px;
	    		
			}

			#top2{
	    		position: absolute;
				top: -10px;
				right: 150px;
 
	   			border: 10px solid ;
				border-color:#214989;
	   		    padding: 10px;
	    		margin: 20px;
	    		text-align: center;
	    		background-color: #e8ff9c;
	    		border-radius: 20px;
			}

			#top3{
	    		position: absolute;
				top: -10px;
				right: 300px;
	   			border: 10px solid ;
				border-color:#214989;
	   		    padding: 10px;
	    		margin: 20px;
	    		text-align: center;
	    		background-color: #e8ff9c;
	    		border-radius: 20px;
			}

			#top4{
	    		position: absolute;
				top: -10px;
				right: 495px;
	   			border: 10px solid ;
				border-color:#214989;
	   		    padding: 10px;
	    		margin: 20px;
	    		text-align: center;
	    		background-color: #e8ff9c;
	    		border-radius: 20px;
			}

			#topBack{
				position: absolute;
				top: -20px;
				left: -20px;
				right: -20px;
				 
				height: 30px;
	   			border: 5px solid ;
				border-color:#0e9e4f;
	   		    padding: 20px;
	    		margin: 20px;
	    		text-align: center;
	    		 
	    		background-color:#0e9e4f ;
			}

			#data{
				position: absolute;
				top: 250px;
				left: 450px;
	   			border: 5px solid ;
				border-color:#214989;
	   		    padding: 20px;
	    		margin: 20px;
	    		text-align: center;
	    		border-radius: 15px;
	    		background-image: url(images/body5.jpg);
			}

			#divi{
				position: absolute;
				top: 200px;
				left: 150px;
	        	width: 300px;
	   			border: 2px solid ;
				border-color:#214989;
	  
	    		margin: 20px;
	    		text-align: center;
			}

			.box{
				height: 30px;
				width: 200px;
			}
			#data a{
				font-size: 24px;
			}

			#login{
				border: none;
			    color: white;
				text-align: center;
				text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			    height: 35px;
			    width: 100px;

			}

			#login:hover{
            	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);
        	}

        	.shadow {
	        	color: rgb(145, 27, 150);

	        	font-size: 19px;
	            text-decoration: none;
       		 }
       		

        	.shadow:hover{
            	color: white;
    			text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        	}

        	.msg {
        		position: absolute;
        		top: 50px;
        		left: 430px;
        		color: blue;
        		font-size: 19px;
        	}
        	#home{
			position: absolute;
			text-align: center;
			border-color: #214989;
			top: -6px;
			left: 725px;
			font-size: 19px;
			padding: 10px ;
			border-radius: 20px;
			background-color:#e8ff9c; 
			border: 10px solid;
			text-decoration: none;
			font-color: blue;
		}
	 





		</style>

</head>

<body>
<?php 

session_destroy();


?>


		
		<form action="register.php" method="post">

		<div id="topBack"></div>

		<div id="top1">
		<a class="shadow"   href="student_login.php">Student login</a>  
		</div>

		<div id="top2">
		<a class="shadow"   href="teacher_login.php">Teacher login</a>  
		</div>

		<div id="top3"> 
		<a class="shadow"   href="student_register.php">Register as Student</a> 
		</div>

		<div id="top4">
		<a class="shadow"  href="teacher_register.php">Register as Teacher</a>
		</div>

		<a href="index.php"><h2  id="home">Home</h2></a>

		<div id="data">
				<h1>Welcome To Online Exam System</h1>
		</div>

		</form>



</body>

</html>