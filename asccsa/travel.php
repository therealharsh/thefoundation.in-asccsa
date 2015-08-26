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
		<link href="css/styletravel.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

		 <!--[if lt IE 9]>
	    <link rel="stylesheet" href="stylesheets/ie.css">
	  <![endif]-->

	  <script src="javascripts/modernizr.foundation.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  		<script> 
			$(document).ready(function(){
			    $("#stay").click(function(){
			        $("#tablediv").slideToggle("fast");
			    });
			});
			</script>

			<script> 
			$(document).ready(function(){
			    $("#seeing").click(function(){
			        $("#thingsinseeing").slideToggle("fast");
			    });
			});
			</script>

			<script> 
			$(document).ready(function(){
			    $("#eat").click(function(){
			        $("#thingsineat").slideToggle("fast");
			    });
			});
			</script>

			<script> 
			$(document).ready(function(){
			    $("#shop").click(function(){
			        $("#thingsinshop").slideToggle("fast");
			    });
			});
			</script>

			<script> 
			$(document).ready(function(){
			    $("#other").click(function(){
			        $("#thingsinother").slideToggle("fast");
			    });
			});
			</script>

			<script> 
			$(document).ready(function(){
			    $("#cab").click(function(){
			        $("#thingsincab").slideToggle("fast");
			    });
			});
			</script>

	  <!-- IE Fix for HTML5 Tags -->
	  <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->

		<title>Travel</title>
	</head>	

	<body>
	<div id="header"> <!-- THE FOUNDATION TOP !-->
			<div id = "asc" >
				<img id="logo" src="img/alogo.jpg"> 
			</div>

			<div id = "thefoundation">
			<img id="logo" src="img/mainlogo.jpg"> 
			</div>
			
			<div id = "bajaj">
				<img id="logo" src="img/bajajgrouplogo.png"> 
			</div>
			
		</div> <!-- header close -->


		<div id="wrapper">
			<div id="nav">
				<ul>
				  <li><a href="index.php">Home</a></li>
				  <li><a href="register.php">Registration</a></li>
				  <li><a href="preseminar.php">Pre-seminar</a></li>
				  <li><a href="seminar.php">Seminar</a></li>
				  <li><a class="active" href="travel.php">Travel</a></li>
				  <li><a href="faq.php">FAQ</a></li>
				  <li><a href="contact.php">Contact</a></li>
				</ul>
			</div> <!-- nav bar close -->

			<div id="content">
			<p style="line-height:30%;"><b>Hint:</b> Click on any of the following headers to toggle section</p>
			<!-- STAYING -->
				<div id="stay">
				<p style="line-height: 100%; font-size: 200%;">STAYING</p>
				</div>
				<div id="tablediv">
				<div id="table">
					<p>Places to stay in Mumbai</p>
					<table>
					<tr>
						<th><p1><b>Sr No.</b></p1></th>
						<th><p1><b>Hotel Name</b></p1></th>		
						<th><p1><b>Address</b></p1></th>
						<th><p1><b>Contact no.</b></p1></th>
						<th><p1><b>Website</b></p1></th>
						<th><p1><b>Single room (in INR)</b></p1></th>
						<th><p1><b>Double room (in INR)</b></p1></th>
					</tr>

					<tr>
						<th><p1>1</p1></th>
				    	<th><p1>YMCA, Mumbai Central</p1></th>
				    	<th><p1>18, YMCA Road, Mumbai Central, Near Maratha Mandir, Mumbai, Maharashtra 400008</p1></th>		
				    	<th><p1>022 61540100</p1></th>
				    	<th><p1>ymcabombay.com</p1></th>
				    	<th><p1>Standard single: Rs. 3312; Including AC, breakfast and dinner</p1></th>
				    	<th><p1>Standard double: Rs. 4239; Including AC, breakfast and dinner</p1></th>
					</tr>

					<tr>
						<th><p1>2</p1></th>
				    	<th><p1>Sea Green Hotel</p1></th>
				    	<th><p1>145, Marine Drive Sea Face,  Marine Drive, Churchgate, Mumbai- 400020</p1></th>		
				    	<th><p1>022 61631527</p1></th>
				    	<th><p1>www.seagreenhotel.com</p1></th>
				    	<th><p1>Standard single: Rs. 4166 + taxes</p1></th>
				    	<th><p1>Standard double: Rs. 5320 + taxes</p1></th>
					</tr>

					<tr>
						<th><p1>3</p1></th>
				    	<th><p1>Astoria Hotel</p1></th>
				    	<th><p1>Reclamation, Near Eros Cinema, J Tata Road, Churchgate, Mumbai - 400020</p1></th>		
				    	<th><p1>022 67732149</p1></th>
				    	<th><p1>www.astoriamumbai.com</p1></th>
				    	<th><p1>Standard single: Rs. 5500 + taxes</p1></th>
				    	<th><p1>Standard double: Rs. 6500 + taxes</p1></th>
					</tr>

					<tr>
						<th><p1>4</p1></th>
				    	<th><p1>Hotel Fortune</p1></th>
				    	<th><p1>36/38, Near Metro Cinema & Marine Lines Railway Station, 1st Marine Street, Dhobi Talao, Mumbai - 400002</p1></th>		
				    	<th><p1>022 45106668</p1></th>
				    	<th><p1>www.hotelfortune.in</p1></th>
				    	<th><p1>Standard single: Rs. 3000 + taxes; Delux single: Rs. 3500 + taxes; Superior single: Rs. 4000 + taxes</p1></th>
				    	<th><p1>Standard double: Rs. 3500 + taxes; Delux double: Rs. 4000 + taxes; Superior double: Rs. 4500 + taxes</p1></th>
					</tr>

					<tr>
						<th><p1>5</p1></th>
				    	<th><p1>Landmar K Fort Hotel</p1></th>
				    	<th><p1>249, Near Gpo CST, P D Mello Road, Fort,  Mumbai - 400001</p1></th>		
				    	<th><p1>022 61612595</p1></th>
				    	<th><p1>www.landmarkhotels.in</p1></th>
				    	<th><p1>Delux single: Rs. 2550 + taxes; Superior single: Rs. 3150 + taxes; Club room single: Rs. 3900 + taxes</p1></th>
				    	<th><p1>Delux double: Rs. 3000 + taxes; Superior double: Rs. 3600 + taxes; Club room double: Rs. 4400 + taxes</p1></th>
					</tr>

					<tr>
						<th><p1>6</p1></th>
				    	<th><p1>Residency Hotel</p1></th>
				    	<th><p1>26 Residency Hotel Building, Near Citi Bank Corner, D N Road Gunbow Street, Fort, Mumbai - 400001</p1></th>		
				    	<th><p1>022 61619157</p1></th>
				    	<th><p1>www.residencyhotel.com</p1></th>
				    	<th><p1>Standard single: Rs. 3875 (including taxes)</p1></th>
				    	<th><p1>Standard double: Rs. 4345 (including taxes)</p1></th>
					</tr>

					<tr>
						<th><p1>7</p1></th>
				    	<th><p1>Hotel Celeste</p1></th>
				    	<th><p1>Opp Sassoon Dock,Colaba, Mumbai - 400005</p1></th>		
				    	<th><p1>022 67306350</p1></th>
				    	<th><p1>N/A</p1></th>
				    	<th><p1>Standard single: Rs. 1300 (including taxes)</p1></th>
				    	<th><p1>Standard double: Rs. 1800 (including taxes)</p1></th>
					</tr>

					<tr>
						<th><p1>8</p1></th>
				    	<th><p1>Hotel Sea View</p1></th>
				    	<th><p1>35, Abbas Building, Opp.Salvation Army, Next to Hotel Taj Palace, Merry weather Road, Colaba, Mumbai - 400005</p1></th>		
				    	<th><p1>022 61625644</p1></th>
				    	<th><p1>N/A</p1></th>
				    	<th><p1>Standard single: Rs. 1800 (including taxes)</p1></th>
				    	<th><p1>Standard double: Rs. 2000 (including taxes)</p1></th>
					</tr>

					<tr>
						<th><p1>9</p1></th>
				    	<th><p1>Sahil Hotel</p1></th>
				    	<th><p1>292, Opposite City Centre Mall, J B Behram Marg, Mumbai Central, Mumbai - 400008</p1></th>		
				    	<th><p1>022 61634828</p1></th>
				    	<th><p1>N/A</p1></th>
				    	<th><p1>Standard single: Rs. 4500 + taxes; Superior single: Rs. 5500 + taxes</p1></th>
				    	<th><p1>Standard double: Rs. 5500 + taxes; Superior double: Rs. 6000 + taxes</p1></th>
					</tr>

					<tr>
						<th><p1>10</p1></th>
				    	<th><p1>Park Shilton Hotel</p1></th>
				    	<th><p1>Opposite Minerva Cinema, Near Navjeevan Society, Lamington Road, Grant Road, Mumbai - 400007</p1></th>		
				    	<th><p1>022 23003939</p1></th>
				    	<th><p1>www.parkshilton.com</p1></th>
				    	<th><p1>Standard single: Rs. 4300 + taxes;<br> Superior luxury room: Rs. 7200 + taxes;<br> Arabian sooth: Rs. 6000 + taxes</p1></th>
				    	<th><p1>Standard double: Rs. 4800 + taxes;<br> Superior luxury room (double): Rs. 7200 + taxes (same as single);<br> Arabian sooth (double): Rs. 6000 + taxes (same as single)</p1></th>
					</tr>

					</table>
					</div> <!-- table close -->
				</div><!-- tablediv close -->

				<!-- THINGS TO SEE -->
				<div id="seeing">
				<p style="line-height: 100%; font-size: 200%;">VISIT</p>
				</div>
				<div id="thingsinseeing">
				<p><b>Places to see:</b><br>

				<div id="grey">	
				<p><b>1) Evening Walk on Marine Drive</b><br>

				Take a pleasant stroll on marine drive during sunset, the place is usually buzzing with locals on a walk and 

				food vendors selling nuts and tea. You can make a night out of it by eating at pizza by the bay or salt water 

				café ( both located near churchgate).</p><br> </div>

				<div id="white">

				<p><b>2) Bhau Daji Lad Museum</b><br>

				The Dr. Bhau Daji Lad Mumbai City Museum is the oldest museum in Mumbai. Situated in Byculla East, it 

				was originally established in 1855 as a treasure house of the decorative and industrial arts<br>

				<i>Address: 91 A, Rani Baug, Veer Mata Jijbai Bhonsle Udyan, Dr Ambedkar Rd, Byculla East, Byculla, Mumbai, 

				Maharashtra 400027<br>

				Phone: 022 2373 1234</i></p><br> </div>

				<div id="grey">

				<p><b>3) Baanganga</b><br>

				Banganga or Banganga Tank is an ancient water tank which is part of the Walkeshwar Temple Complex in 

				Malabar Hill area of Mumbai in India<br>

				<i>Address: Walkeshwar Marg, Malabar Hill, Teen Batti, Mumbai</i></p><br> </div>

				<div id="white">

				<p><b>4) Dhobhi ghat</b><br>

				Dhobi Ghat is a well known open air laundromat in Mumbai, India. The washers, are locally known as 

				Dhobis

				When you visit Dhobi ghat, tell any local person you encounter that you've come from far away and are 

				keen on walking inside Dhobi Ghat. Of late, many people are turned away from the entrance itself but the 

				key is to show high enthusiasm for getting in the heart of the area. Most locals will be happy to take you 

				around for a small sum of money. An appropriate amount would be Rs.100<br>

				<i>Address: Dr. E. Moses Rd. near Mahalakshmi Station, Mumbai</i></p> <br> </div>

				<div id="grey">

				<p><b>5) Gateway of India</b><br>

				The Gateway of India is a monument built during the British Raj in Mumbai, India. It is located on the 

				waterfront in the Apollo Bunder area in South Mumbai and overlooks the Arabian Sea. The structure is a 

				basalt arch, 26 metres high<br>

				<i>Address: Colaba, opposite Taj Mahal hotel</i></p> <br> </div>

				<div id="white">

				<p><b>6) Haji Ali</b><br>

				The Haji Ali Dargah is a mosque and dargah located on an islet off the coast of Worli in the Southern part of 

				Mumbai. Near the heart of the city proper, the dargah is one of the most recognisable landmarks of 

				Mumbai <br>

				<i>Address: Dargah road, Haji Ali, Mumbai </i></p><br> </div>

				<div id="grey">

				<p><b>7) National Gallery of Modern Art</b> <br>

				National Gallery of Modern Art, Mumbai was opened to the public in 1996. It hosts various exhibitions and 

				art collections of famous artists, sculptors and different civilisations <br>

				<i>Address: Sir Cowasji Jahangir Public Hall M G Road, Fort, Mumbai <br>

				Phone no:022 2288 1969 <br>

				Timings: Monday closed; other days 9 AM to 5 PM </i></p> <br> </div>

				<div id="white">

				<p><b>8) Victoria Terminus </b> <br>

				Chhatrapati Shivaji Terminus, formerly Victoria Terminus, is a UNESCO World Heritage Site and historic 

				railway station which serves as the headquarters of the Central Railways in Mumbai <br>

				<i>Address: Dr. Dadabhai Naoroji Road, Fort </i></p><br> </div>

				<div id="grey">

				<p><b>9) Afghan Church</b> <br>

				The Church of St. John the Evangelist, better known as the Afghan Church is now considered a grade 1 

				heritage sight. Get yourself immersed in Gothic architecture and stained glasses<br>

				<i>Location : Afghan Church, Nanabhai Moos Marg, Navy Nagar, Colaba</i></p> </div>
				
				</div> <!-- thingsinseeing close --> 

				<div id="eat">
				<p style="line-height: 100%; font-size: 200%;">EAT</p>
				</div>
				<div id="thingsineat">
				<div id="placestoeat">
				<p><b>Places to eat:</b><br>

				<b>Mahesh Lunch Home </b><br>

				One of the oldest lunch homes in Bombay, it is known for its Malvani food. Try the Melt in the mouth 

				Bombil Fry along with Seafood platter. <br>

				<i>Timings : 11:30-4:00 ; 6:00-11:00 <br>

				Price Range : Rs. 1,700 for two people <br>

				Location : 8 B, Cawasji Patel Street, Fort, Mumbai</i></p><br>

				<p><b>Olympia Coffee House </b> <br>

				A perfect place for a hearty Mumbai breakfast. Try their kheema pao and filter coffee. <br>

				<i>Timings : 7am to 11:45pm

				Location : Rahim Mansion 1, SB Road, Colaba, Mumbai</i> </p> <br>

				<p><b>IMBISS </b><br>

				Known for it’s variety of meats, this small restaurant is the perfect spot for those who adore meaty dishes. <br>

				<i>Price range : 1200 for 2 people. <br>

				Timings : 11am to 11:30pm <br>

				Location : 3, Pipewala building, Opposite Camy Wafers, 4th Pasta Lane, Colaba Mumbai. </i></p><br>

				<p><b>Sufra</b><br>

				A tiny restaurant with great middle eastern food and a variety of hummus platters and Turkish coffee. <br>

				<i>Price range: 650 for 2 people. <br>

				Timings: 10am to 10pm <br>

				Location : 16/A, Cusrow Baug, Shahid Bhagat Singh Road, Colaba, Mumbai </i> </p> <br>

				<p><b>Piccadilly </b><br>

				Known for its lebanese food, this place is a must try for those craving the perfect shawarma. <br>

				<i>Price range : 650 for 2 people.<br>

				Timings : 8am to 12am<br>

				Location : Donald House, Opposite Electric House, Colaba Causeway, Colaba, Mumbai. </i></p> <br>

				<p><b>Leopold Cafe & Bar</b><br>

				The famous tourist attraction is always crowded even on a weekday evening, it is the perfect place for a 

				drink and fun company. <br>

				<i>Price range : 1500 for 2 people<br>

				Location : S.B Singh Road, Colaba Causeway, Mumbai</i></p><br>

				<p><b>Cafe Mondegar </b><br>

				The main attraction is the juke box and the Mario Miranda cartoons.It serves great tap beer and a great 

				English Breakfast until 11:30am <br>

				<i>Price range : 1400 for 2 people <br>

				Timings : 7:30am-11:30pm <br>

				Location : 5A, Metro House, Shahid Bhagat Singh Road, Near Regal Cinema, Colaba, Mumbai. </i></p><br>
				</div>
				<div id="lounges">
				<p><b>Some lounges (for good music with good food): </b><br>

				Ranges from Rs.2000-3000 for two people <br>

				Please make a booking before you </p> 

				<p><b>1) Woodside Inn </b><br>

				<i>Phone: 022 22025525<br>

				Address: Wodehouse Road, Opposite Regal Cinema, Colaba, Mumbai</i></p>

				<p><b>2) Aer</b><br>

				<i>Phone: 022 24818000, 022 24818444<br>

				Address: Four Seasons Hotel, 114, E Moses Road, Worli, Mumbai<br>

				-Has wonderful view of the Mumbai skyline</i></p><br>

				<p><b>3) Dome</b><br>

				<i>Phone: 022 39879999<br>

				Address: Hotel InterContinental, 135, Churchgate, Mumbai</i></p><br>

				<p><b>4) Cafe Zoe</b><br>

				<i>Phone:022 24902066, 022 24902065<br>

				Address: Todi Mathuradas Mill Compound, NM Joshi Marg, Lower Parel, Mumbai</i></p><br>

				<p><b>5) Blue Frog </b><br>

				<i>Phone:022 61586158, 022 40332300<br>

				Address: Mathuradas Mills Compound, Kamala Mills Compound, Lower Parel, Mumbai</i></p>
				</div>
				</div><!-- thingsineat close -->

				<div id="shop">
				<p style="line-height: 100%; font-size: 200%;">SHOP</p>
				</div>
				<div id="thingsinshop">
				<p><b>Places to shop:</b><br>
				<b>1) Colaba Causeway</b><br>

				This is the perfect way to spend a day, cobalt causeway is the place to get those cheap trinkets and 

				amazing deals on everything from cute chappals to jewellery. The area is littered with places to eat and 

				right behind is the famous Taj Starbucks for the perfect cup of coffee after. <br>

				<b>2) Phoenix Mills and Palladium</b><br>

				Besides being the one stop for high end shopping, It is also houses great places to eat and the Comedy 

				Store at Palladium is worth checking out.</p>
				</div> <!-- close thingsinshop -->

				<div id="other">
				<p style="line-height: 100%; font-size: 200%;">OTHER</p>
				</div>
				<div id="thingsinother">
				<p><b>Other things to do:</b><br>

				<b>1) Movies</b><br>

				- You can book your tickets for a movie close to you on this website: <br>

				<a href="http://in.bookmyshow.com/?gclid=CI_mto2vkrwCFWYG4god5jMANg">http://in.bookmyshow.com/?gclid=CI_mto2vkrwCFWYG4god5jMANg</a> <br><br>

				<b>2) Plays and cultural performances</b><br>

				Prithvi and NCPA theatres:<br>

				- Prithvi theatre and National Centre for Performing Arts are worth checking out incase any performances 

				are of interest. To check out the slated shows, timings and bookings, please see their website for more 

				details:<br><br>

				- Prithvi:<br>

				- <a href="http://www.prithvitheatre.org">http://www.prithvitheatre.org</a><br>

				<i>Address: 20 Janki Kutir,Juhu Church Road,Juhu,Mumbai; <br>

				Tickets: Box office: #022 2614 9546; Timings: 1pm to 9 pm (closed on Mondays); Home Delivery: #022 

				3989 5050 </i> <br> <br>

				- NCPA <br>

				- <a href="http://ncpamumbai.com">http://ncpamumbai.com</a> <br>

				- <i>Address: NCPA Marg, Nariman Point, Mumbai <br>

				- Main switchboard line: +91 -22-6622 3737</i>
				</div> <!-- thingsinother close -->

				<div id="cab">
				<p style="line-height: 100%; font-size: 200%;">TRANSPORT</p>
				</div>
				<div id="thingsincab">
				<p> <b> Cab Companies: </b> <br>

				<b>1) Meru cabs</b><br>

				-022 4422 4422 <br> <br>

				<b>2) Easy cabs </b><br>

				- 022 4343 4343 <br> <br>

				<b>3) Tab cab </b><br>

				- 022 6363 6363
				</div>

			</div><!-- content close -->
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