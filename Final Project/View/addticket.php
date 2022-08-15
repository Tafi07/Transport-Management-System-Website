<?php

include '../Controller/addticket.php'; 
 ?>
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
    <form action="../Controller/addticket.php" method="POST">
        <div class="container mt-3">
  <h2 class="bg-success text-center text-white p-2 m-3 rounded">Add Ticket Info</h2>
  <form action="welcome.php">
    <div class="mb-2 mt-2">
      <label for="departure">Departure:</label>
      <input type="text" class="form-control" id="departure" placeholder="Enter Departure Location" name="departure">
    </div>
    <div class="mb-2 mt-2">
      <label for="destination">Destination:</label>
      <input type="destination" class="form-control" id="destination" placeholder="Enter Destination" name="destination">
    </div>
    <div class="mb-2 mt-2">
      <label for="journeydate">Journey Date:</label>
      <input type="text" class="form-control" id="journeydate" placeholder="Enter Date" name="journeydate">
    </div>
    <div class="mb-3">
      <label for="returndate">Return Date:</label>
      <input type="text" class="form-control" id="returndate" placeholder="Enter Return Date " name="returndate">
    </div>
    <div class="mb-3">
      <label for="class">Class Type:</label>
      <input type="text" class="form-control" id="class" placeholder="Enter Class Type " name="class">
    </div>

    
    
    <button type="submit"name="save" value="save" class="btn btn-primary">SAVE</button>
  </form>
</div>
        
        <form action="airtickets.php" method="POST" class="back-btn">  </form> 
        <a href="airtickets.php">
        <input class="back-btn" type="submit" value="Back" name="btnClick">
        </a>
</body>
</html>