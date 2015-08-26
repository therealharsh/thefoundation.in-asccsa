<!-- author: Harsh Keswani, @therealharsh -->
<!DOCTYPE html>
<html>
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8" />

  		<!-- Set the viewport width to device width for mobile -->
  		<meta name="viewport" content="width=device-width" />
	    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/regpage.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

		 <!--[if lt IE 9]>
	    <link rel="stylesheet" href="stylesheets/ie.css">
	  <![endif]-->

	  <script src="javascripts/modernizr.foundation.js"></script>

	  <!-- IE Fix for HTML5 Tags -->
	  <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->


		<title>Register (Pre-Seminar)</title>
	</head>	

	<body>
	<div id="header"> <!-- THE FOUNDATION TOP !-->
			<div id = "asc" >
				<img id="logo" src="img/alogo.jpg"> 
			</div>

			<div id = "thefoundation">
			<a href="http://www.thefoundation.in"><img id="logo" src="img/mainlogo.jpg"></a> 
			</div>
			
			<div id = "bajaj">
				<img id="logo" src="img/bajajgrouplogo.png"> 
			</div>
			
		</div> <!-- header close -->


		<div id="wrapper">
				<div id="nav">
		     	<ul>
				  <li><a href="index.php">Home</a></li>
				  <li><a class="active"  href="register.php">Registration</a></li>
				  <li><a href="preseminar.php">Pre-seminar</a></li>
				  <li><a href="seminar.php">Seminar</a></li>
				  <li><a href="travel.php">Travel</a></li>
				  <li><a href="faq.php">FAQ</a></li>
				  <li><a href="contact.php">Contact</a></li>
				</ul>
		     </div> <!-- nav close -->

		     <div id = "content">
		     	<div id="formnow">	
				<form action = "registerpresem.php" method="post">
					<label><p1>Pre-Seminar Registration &nbsp;<a href="register.php"><br>GO BACK</a></p1></label><br>
					<p><label><b>Full Name</b></label><br>
					<input size="30" type="text" name="fullName"></p>

					<p><label><b>Workshop(s)</b></label><br>
<p><label><i>Single day options</i></label><br>
					<input type="radio" name="workshop" value="stewardsDay1">Stewards of Children (Day 1)<br>
<input type="radio" name="workshop" value="googleTulirDay1">Google + TULIR (Day 1)<br>
<input type="radio" name="workshop" value="TarshiDay2"> TARSHI (Day 2)<br>
<input type="radio" name="workshop" value="ZenaidaDay2">Zenaida Rosales (Day 2)<br><hr/>

<p><label><i>Both day options</i></label><br>
					<input type="radio" name="workshop" value="drLoisEngelbrecht">Dr. Lois Engelbrecht (Day 1 & Day 2)<br>
					<input type="radio" name="workshop" value="stewardsAndTarshi">Stewards of Children (Day 1) & TARSHI (Day 2)<br>
<input type="radio" name="workshop" value="googleTulirAndTarshi">Google + TULIR (Day 1) & TARSHI (Day 2)<br>
<input type="radio" name="workshop" value="googleTulirAndZenaida">Google + TULIR (Day 1) & Zenaida Rosales (Day 2)<br>
<input type="radio" name="workshop" value="stewardsAndZenaida">Stewards of Children (Day 1) & Zenaida Rosales (Day 2)<br>

					</p>

					<p><label><b>Educational Background</b></label><br>
					<input size="30" type="text" name="education"></p>

					<p>
						<label><b>Employment Type</b></label><br>
						<input type="radio" name="emptype" value="self">Self-employed<br>
						<input type="radio" name="emptype" value="org">Working with an organization
					</p>

					<p><label><b>If self-employed, area of work</b></label><br>
					<input size="30" type="text" name="areaofwork"></p>

					<p><label><b>If working with an organization, Organization Name</b></label><br>
					<input size="30" type="text" name="organizname"></p>

					<p><label><b>Please provide a brief description of your organization</b></label><br>
					<textarea type="text" name="descorg" id="name" maxlength="200" rows="10" cols="40">
					</textarea>

					<p><label><b>Position<b></label><br>
					<input size="30" type="text" name="position"></p>

					<p><label><b>Address<b></label><br>
					<input size="40" type="text" name="address"></p>

					<p><label><b>Telephone Number<b></label><br>
					<input size="30" type="text" name="tphone"></p>

					<p><label><b>Mobile Number<b></label><br>
					<input size="30" type="text" name="mphone"></p>

					<p><label><b>Email ID<b></label><br>
					<input size="40" type="text" name="email"></p>

					<input id="submit" type="submit" value="Register">

				</form>
				</div>
		     </div>

  			</div>
		</div> <!-- wrapper close -->
	</body>	

	<footer>
		<p>
			Copyright © 2015 TheFoundation. All rights reserved.
			Designed by <span>therealharsh</span>
		</p>
	</footer>

</html>
<!-- author: Harsh Keswani, @therealharsh -->
<!-- THE END -->				