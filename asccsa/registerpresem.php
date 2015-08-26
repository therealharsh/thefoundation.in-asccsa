<!-- author: Harsh Keswani, @therealharsh -->

<?php
	$fullName1=$_POST['fullName'];
	$education1=$_POST['education'];
$workshop=$_POST['workshop'];
	$emptype1 = $_POST['emptype'];
	$areaofwork1 = $_POST['areaofwork'];
	$orgname1 = $_POST['organizname'];
	$descorg1 = $_POST['descorg'];
	$position1 = $_POST['position'];
	$address1 = $_POST['address'];
	$tphone1 = $_POST['tphone'];
	$mphone1 = $_POST['mphone'];
	$email1 = $_POST['email'];
//mysqli string escape function not supported on server
$fullName = addslashes("$fullName1");
$education = addslashes("$education1");
$emptype = addslashes("$emptype1");
$areaofwork = addslashes("$areaofwork1");
$orgname = addslashes("$orgname1");
$descorg = addslashes("$descorg1");
$position = addslashes("$position1");
$address = addslashes("$address1");
$tphone = addslashes("$tphone1");
$mphone = addslashes("$mphone1");
$email = addslashes("$email1");

	$con=mysql_connect("localhost","username", "password") or die(mysql_error());
	mysql_select_db("database1");
	$updateInfo = "INSERT INTO preseminar(fullname, date, education, workshop, employment, areaofwork, organization, orgdesc, position, address, teleno, mobno, email) VALUES ('$fullName', CURDATE(), '$education', '$workshop', '$emptype', '$areaofwork', '$orgname', '$descorg', '$position', '$address', '$tphone', '$mphone', '$email');";
  	mysql_query($updateInfo, $con);


header( "refresh:4;url=index.php" );
  	echo"You have registered for the Pre-Seminar ASCCSA 2015. We will get in touch soon!";
echo"<br>You will be redirected in a moment..."; 
       
 ?>
 <!-- author: Harsh Keswani, @therealharsh -->
<!-- THE END -->			