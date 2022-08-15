<?php
    include ("connectiondb.php") ;
    error_reporting(0);
    $id = $_GET['id'];
    $query = "DELETE FROM TICKET WHERE id= '$id' ";
    $data = mysqli_query ($conn, $query) ;

    if($data)
    {
    echo "<script>alert('Record Deleted from Database')</script>";
    header('Location: airtickets.php');
    }
    else
    {
    echo "<font color='red'>Failed to delete Record from Database";
    }

    ;
?>