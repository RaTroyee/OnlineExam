<?php

	session_start();
	ob_start();
	include('dbcontroller.php');

	include "functions.php";

?>

<html>

<head>

		<title>Online Exam</title>
		<link rel="icon" href="images/icon1.jpg" >
		<style type="text/css">
			body{
				background-image: url(images/body2.jpg);
				 
			}

			#data{
				position: absolute;
				top: 150px;
				left: 400px;
	        	width: 400px;
	   			border: 10px solid ;
	   			border-color:rgb(700, 128, 122);
	   		    padding: 100px;
	    		margin: 40px;
	    		text-align: left;
	    		background-color: lightyellow;

			}
			.box{
				height: 30px;
				width: 400px;
				background-color: burlywood;
			}
			#data a{
				font-size: 18px;
				text-align: left;
			}

			.login{
				background-color:  burlywood;
				border: none;
				color: darkblue;
				text-align: center;
				text-decoration: inherit;
			    display: inline-block;
			    font-size: 22px;
			    margin: 4px 2px;
			    cursor: pointer;
			    height: 30px;
			    width: 400px;
			}

			.login:hover{
            	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);
        	}

        	.shadow {
	        	color: blueviolet;
	            text-decoration: inherit;
       		 }

        	.shadow:hover{
            	color: pink;
    			text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        	}

        	.msg {
        		position: absolute;
        		top: 200px;
        		left: 450px;
        		color:purple;
        		font-size: 23px;
        	}

        	#home{
			position: absolute;
			text-align: center;
			color: rgb(700, 128, 122);
			top: 60px;
			left: 100px;
			width: 150px;
			font-size: 30px;
			padding: 10px 5px;
			border: solid;
			background-color: lightyellow;

		}





		</style>



</head>

<body>

	<a href="index.php"><h1  id="home">Home</h1></a>

		<form action="student_login.php" method="post">

		<div id="data">

			<h2>Roll </h2>
			<input class="box" type="text" name="roll" />
			<h2>Password </h2>
			<input class="box" type="password" name="password" /> <br><br>
			<input class="login" type="submit" name="submit" value="Log In" /><br><br>

			<a class="shadow" href="forgot.php">Forgotten password?</a>
			
		</div>

		</form>





<?php

 


		if(isset($_POST['submit'])){
			// echo '<p class="msg"> OKK </p>';
			
			$roll = protect($_POST['roll']);
			$password = protect($_POST['password']);

			if(!$roll || !$password){
				echo '<p class="msg"> Please fill up all blanks! </p>';
			}
			else{

				$res = mysqli_query($con,"SELECT * FROM `student_data` WHERE `roll` = '".$roll."'");
				$num = mysqli_num_rows($res);

				if($num == 0){
					echo '<p class="msg">Roll number does not exist!May be you have not registered yet!</p>';
				}

				else{

					$res = mysqli_query($con,"SELECT * FROM `student_data` WHERE `roll` = '".$roll."' AND `pass` = '". md5($password)."'");
					$num = mysqli_num_rows($res);

 

					if($num == 0){
						echo '<p class="msg">  The Password you supplied does not match for that roll number! </p>';
					}
					else{

						$row = mysqli_fetch_assoc($res);
						 
						$_SESSION['userID'] = $roll;
						//echo '<p class="msg"> You have successfully logged in!</p>';
					//	$time = date('U'); 
					//	mysqli_query($con,"UPDATE `users` SET `online` = '".$time."' WHERE `id` = '".$_SESSION['uid']."'");
						header('Location: student.php');
					}

				}

			}

		}

?>



</body>

</html>

<?php

ob_end_flush();

?>
