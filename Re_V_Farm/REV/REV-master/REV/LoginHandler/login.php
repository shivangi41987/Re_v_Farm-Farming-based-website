<?php
session_start();
$error_array=array();
if (isset($_POST["login"]))
{
	include'../database_driver/db.php';
	$username=strip_tags(mysqli_real_escape_string($con,$_POST["username"]));
	$password=md5(mysqli_real_escape_string($con,$_POST["password"]));
	$optradio = strip_tags($_POST["optradio"]);

	if ($optradio==1) {
		$r=mysqli_query($con,"select * from fredg where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
    			$fid=$arr['fid'];
				$_SESSION['fid']=$fid;
				header('location: ../dashboard/farmerHome.php');
			}
			else{
				header('location: ../index.html');

			}
		}
		

	elseif ($optradio==2) {
		$r=mysqli_query($con,"select * from lredg where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				$lid=$arr["lid"];
				$_SESSION['lid']=$lid;
				header('location: ../dashboard/landlordHome.php');
			}
			else{
				header('location: ../index.html');

			}
		}
		

	elseif ($optradio==3) {
		$r=mysqli_query($con,"select * from retail where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				$_SESSION['rid']=$rid;
				header('location: ../dashboard/retailerHome.php');
			}
			else{
				header('location: ../index.html');

			}
		}
		

	elseif ($optradio==4) {
		$r=mysqli_query($con,"select * from mredg where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				$_SESSION['mid']=$mid;
				header('location: ../dashboard/mandiHome.php');
			}
			else{
				header('location: ../index.html');

			}
		}
		

	elseif ($optradio==5) {
		$r=mysqli_query($con,"select * from eredg where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				$_SESSION['eid']=$eid;
				header('location: ../dashboard/expertHome.php');
			}
			else{
				header('location: ../index.html');

			}
		}
	else{
		header('location: ../index.html');
	}
}
?>


