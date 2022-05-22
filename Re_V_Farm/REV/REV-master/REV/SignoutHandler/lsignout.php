<?php
session_start();
session_destroy();
$logout=$_SESSION['logout'];
if ($logout==22) {
	session_unset($_SESSION["fid"]);
	session_unset($_SESSION['sessionid']);
	header('location:../index.html');
}
elseif ($logout==11) {
	session_unset($_SESSION["lid"]);
	session_unset($_SESSION['sessionid']);
	header('location:../index.html');
}
elseif ($logout==33) {
	session_unset($_SESSION["rid"]);
	session_unset($_SESSION['sessionid']);
	header('location:../index.html');
}
elseif ($logout==44) {
	session_unset($_SESSION["mid"]);
	session_unset($_SESSION['sessionid']);
	header('location:../index.html');
}


?>