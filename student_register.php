<?php

	include('dbcontroller.php');
	include "functions.php";
?>

<html>

<head>

		<title>Welcome To Online Exam System</title>
		<link rel="icon" href="images/icon1.jpg" >

		<style type="text/css">
			body{
				background-image: url(images/body4.jpg);
				background-size:cover 
			}

			#data{
				position: absolute;
				top: 50px;
				left: 360px;
	        	width: 530px;
	   			border: 15px double ;
				border-color:#214989;
	   		    padding: 30px;
	    		margin: 50px;
	    		text-align: left;
	    		background-image: url(images/body5.jpg);

			}

			#data1{
				position: absolute;
				top: 147px;
				left: 300px;
	        	 

			}


			.box{
				height: 30px;
				width: 200px;
			}
			#data a{
				font-size: 2000px;
			}

			#register{

				background-color: rgb(41, 113, 229);
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

			#register:hover{
            	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);
        	}

        	.shadow {
	        	color: black;
	            text-decoration: none;
       		 }

        	.shadow:hover{
            	color: white;
    			text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        	}

        	.msg {
        		position: absolute;
        		top: 100px;
        		left: 430px;
        		color: darkred;
        		font-size: 25px;
        	}
        	#home{
			position: absolute;
			text-align: center;
			color: rgb(17, 57, 122);
			top: 60px;
			left: 100px;
			width: 160px;
			font-size: 25px;
			padding: 5px 5px;
			border: solid;
			background-image: url(images/body5.jpg);

		}

		    #login{
			position: absolute;
			text-align: center;
			color: rgb(17, 57, 122);
			top: 170px;
			left: 110px;
			width: 150px;
			font-size: 25px;
			padding: 5px 5px;
			border: solid;
			background-image: url(images/body5.jpg);

		}
		h2 {
			color: rgb(50, 56, 102)
		}





		</style>

</head>

<body>
		<a href="index.php"><h1  id="home">Home</h1></a>
		<a href="student_login.php"><h1  id="login">Student Login</h1></a>
		<form action="student_register.php" method="post">
		<div id="data">
		<h1>Student Account Information</h1><br><br>

			<h2>Series</h2>
			<input class="box" type="text" name="series" />
			<h2>Name</h2>
			<input class="box" type="text" name="name" />
			<h2>Roll</h2>
			<input class="box" type="text" name="roll" />
			<h2>Department</h2>
			<input class="box" type="text" name="department" />


			<div id="data1">
			<h2>Section</h2>
			<input class="box" type="text" name="section" />	
			<h2>Password </h2>
			<input class="box" type="password" name="password" /> 
			<h2>Confirm Password </h2>
			<input class="box" type="password" name="passconf" />

			
			<br><br><br>

			<input id="register" type="submit" name="submit" value="Register" /><br><br>

			</div>
 
			
		</div>

		</form>

<?php

 

		if(isset($_POST['submit'])){

		$series1 = protect($_POST['series']);
		$name1 = protect($_POST['name']);
		$roll1 = protect($_POST['roll']);
		$department1 = protect($_POST['department']);
		$section1 = protect($_POST['section']);
		$password1 = protect($_POST['password']);
		$passconf1 = protect($_POST['passconf']);
	

 
		if(!$series1 || !$name1 || !$roll1 || !$department1|| !$section1|| !$password1|| !$passconf1){

			echo '<p class="msg">You need to fill all of the required fields!</p>';

		}
		else{
			 

					if(strlen($password1) < 3 || strlen($password1) > 32){
						echo '<p class="msg"> Your <b>Password</b> must be between 3 and 32 characters long!</p>';

					}
					else{

						if($password1 != $passconf1){
							echo '<p class="msg"> The <b>Password</b> you supplied did not math the confirmation password!</p>';
						}
						else{

							$res1 = mysqli_query($con,"SELECT * FROM `student_data` WHERE `roll` = '".$roll1."'");

							$num1 = mysqli_num_rows($res1);
		 

							if($num1 == 1){
								echo '<p class="msg">The  Roll number you supplied is already taken</p>';
							}else{
		 

							$res2 = mysqli_query($con,"INSERT INTO `student_data` (`name`, `pass`, `dept`, `series`, `sec`, `roll`) VALUES('".$name1."','".md5($password1)."','".$department1."','".$series1."','".$section1."','".$roll1."')");

								
							$table= "Student".$roll1;
							$database = mysqli_query($con,"CREATE TABLE $table (`id` int(8) NOT NULL AUTO_INCREMENT, `course` varchar(1000),`marks` varchar(1000),PRIMARY KEY (`id`) )");
 
							echo '<p class="msg">You have successfully registered!</p>';
 
							}

						}

					}

				}
 

		 

	}

?>



 
</div>

</body>

</html>
