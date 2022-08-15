<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Here</title>
	<link rel="stylesheet" href="../CSS/register.css">
	
</head>
<body>
	<div class="information">
		<?php
			if(isset($_SESSION['status']))
			{
				echo"<h4>".$_SESSION['status']."</h4>";
				unset($_SESSION['status']);
			}

		?>


		<form name="myform" autocomplete="off" action="../Model/updateticketcode.php" method="POST"  class="login"; >
            
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Ticket Information</p>
			
			<div class="registration">
			<table>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input class="password" type="id" placeholder="User ID" id="id" name="id"  >
				<br/><span id="idd"></span>		
			</td>
			</tr>

			<tr>
				<td>Departure</td>
				<td> :</td>
				<td>
					<input class="name" type="departure" placeholder="Departure" id="departure" name="departure" >
					<br/><span id="departuree"></span>
				</td>
			</tr>
			<tr>
				<td>Destination</td>
				<td>:</td>
				<td><input class="email" type="destination" placeholder="Destination" id="destination" name="destination" >
				<br/><span id="destinationn"></span>
			</td>
			</tr>
			<tr>
				<td>Class</td>
				<td>:</td>
				<td><input class="email" type="class" placeholder="Travel Class" id="class" name="class" >
				<br/><span id="classs"></span>
			</td>
			</tr>

			
			
			
				<tr>
					<td><input class="btn" type="submit" value="Update" name="update"></td>
				</tr>
			</table>

		</form>
		
	</div>
	
	</div>
	<form action="../View/airtickets.php" method="POST" class="back-btn"> </form>   
          <a href="../View/airtickets.php">
               
          <input class="back-btn" type="submit" value="Back" name="btnClick">
          </a>

<style type="text/css">
	.back-btn{
        background-color:#3BAF9F;
        display:block;
        margin:20px 0px 0px 20px;
        position:fixed;
        left:10px;
        top: 850px;
        text-align:center;
        border-radius:12px;
        border: 2px solid #366473;
        padding: 14px 110px;
        outline: none;
        color:white;
        cursor:pointer;
        transition:0.25px;
        font-weight: 600;
        font-size:20px;
    }
</style>
	
</body>
</html>