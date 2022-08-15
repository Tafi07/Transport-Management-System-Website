<?php
session_start();

   
?>



<!DOCTYPE html>
<html>
<head>



		<form action="welcome.php" method="POST" class="back-btn">	</form>	
		<a href="welcome.php">
		<p class="places" style="font-size: 2rem; font-weight: 800;">Places</p>	
			
		<input class="back-btn" type="submit" value="Back" name="btnClick">
		</a>

		<form action="airtickets.php" method="POST" class="recommendation">	</form>	
		<a href="airtickets.php">
		<input class="dhakaair" type="submit" value="Dhaka Air Tickets" name="btnClick">
		</a>
		<form action="airtickets.php" method="POST" class="recommendation">	</form>	
		<a href="airtickets.php">
		<input class="chittagongair" type="submit" value="Chittagong Air Tickets" name="btnClick">
		</a>
		<form action="airtickets.php" method="POST" class="recommendation">	</form>	
		<a href="airtickets.php">
		<input class="coxsbazarair" type="submit" value="Cox-Bazar Air Tickets" name="btnClick">
		</a>

</head>
</html>

