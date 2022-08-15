<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">	
	*{
		margin:0;
		padding:0;

	}
	body{
		
		background-image:url(airplane.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		backgroud-position: center;
		font-family:sans-serif;
		margin-top:200px;
	}
	.emergency{
				position:fixed;
				left:600px;
				top: 300px;
				width:600px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#C91A1A;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
		}
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
</head>
<body>
		<div class="container mt-3">
  <h2 class="bg-success text-center text-white p-2 m-3 rounded">Contact us !</h2>
  <form action="welcome.php">
  	<div class="mb-2 mt-2">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="mb-2 mt-2">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="email">
    </div>
    <div class="mb-3">
      <label for="contact">Contact No:</label>
      <input type="concactno" class="form-control" id="concact" placeholder="Enter Mobile no " name="pswd">
    </div>

    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
		
		<form action="welcome.php" method="POST" class="back-btn">	</form>	
		<a href="welcome.php">
		<input class="back-btn" type="submit" value="Back" name="btnClick">
		</a>
</body>
</html>