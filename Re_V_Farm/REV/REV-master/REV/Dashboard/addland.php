<?php
session_start();
	$lid=$_SESSION['lid'];
	
if (isset($_POST["submit"]))
{
	// 

	$target_dir = "../assets/uploads/";
    $uploaded_image = basename($_FILES["fileToUpload"]["name"]);
    $pic = $target_dir . $uploaded_image;
    $uploadOk = 1;
    echo $pic;
    $imageFileType = strtolower(pathinfo($pic,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($pic)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } 
    else 
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pic)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }

	// 
	$area = strip_tags($_POST["area"]);
	$price = strip_tags($_POST["price"]);
	$month = strip_tags($_POST["month"]);
	$crop = strip_tags($_POST["crop"]);
	$year = strip_tags($_POST["year"]);
	// $des = strip_tags($_POST["des"]);
	$des=0;
	$tot = $price*$area*$month;
	echo "$lid";
	echo "\n";
	echo "$area";
	echo "\n";
	echo "$price";
	echo "\n";
	echo "$month";
	echo "\n";
	echo "$crop";
	echo "\n";
	echo "$year";
	// echo "\n";
	// echo "$des";
	echo "\n";
	echo "$tot";
	echo "\n";
	if ($des==0) {
		$des='no description';
	}
	echo $des;

	// include '../database_driver/db.php';
	$con = mysqli_connect("localhost","root","","kisan") or die ("conn fail");
	$result=mysqli_query($con,"INSERT INTO addland( lid, area, price, month, crop, year, des, tot, pic) values ('$lid', '$area', '$price', '$month', '$crop', '$year', '$des', '$tot','$pic')");


	// $r=mysqli_query($con,"INSERT INTO addland(lid, area, price, month, crop, year, des, tot) VALUES ('$lid', '$area', '$price', '$month', '$crop', $year', '$des', '$tot)");
	if ($result>0)
        {
        	echo "string";
        	$_SESSION['lid']=$lid;
            header('location:  landlordHome.php');
        }
        // else{header('location: error.html');}
}
?>