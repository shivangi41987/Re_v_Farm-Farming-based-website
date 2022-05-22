<?php
    session_start();
    $fid=$_SESSION['fid'];
    $lid=$_SESSION['lid'];
    $landid=$_SESSION['landid'];
    $paystat=1;
    include '../database_driver/db.php';
    $r=mysqli_query($con,"INSERT INTO fpay(fid,lid,landid,paystat) VALUES ('$fid','$lid','$landid',$paystat')");
    if ($r>0)
        {
            header('location: ../Dashboard/farmerHome.php');
        }
        else{
            header('location: error.html');
        	header('location: error.html');
        }
?>