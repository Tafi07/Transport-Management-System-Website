<?php
    include ("connectiondb.php") ;
    error_reporting(0);
    $id = $_GET['id'];
    $query = "DELETE FROM INFO WHERE id= '$id' ";
    $data = mysqli_query ($conn, $query) ;

    if($data)
    {
    echo "<script>alert('Record Deleted from Database')</script>";
    }
    else
    {
    echo "<font color='red'>Failed to delete Record from Database";
    }

    include ("../Controller/data.php") ;
?>