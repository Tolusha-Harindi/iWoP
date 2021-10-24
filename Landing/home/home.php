<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>home page</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>

<div class="main_container" id="home">
	
	<div class="navbar">
		<div class="logo">
			<a href="../Landing.php"><font color="#f4976c">iWoP</font></a>
		</div>
		<div class="navbar_items">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#contactus">Contact Us</a></li>
			</ul>
		</div>
		<div class="login">
			<a href="../../Login/Login.php">Login</a>
		</div>
	</div>

	<div class="banner_image">
		<div class="banner_content">
			<h1> Individual Workers Online <br><br> Platform</h1> <br><br><br><br><br>
			<br><br><br><br><br><br><br>
			<p>"New way to find people to do your jobs. If you are one of those thousands of people who struggle to find people to do Jobs or struggle to find jobs, this is for you."</p>			
		</div>
	</div>

	<div class="about" id="about">
		<h1 class="title">About Us</h1>
		<div class="detail_boxes">
			<div class="detail_boxes_item">
				<img src="../../Images/landing/7.jpg" alt="service_image">
				<h3 class="sub_title">Our Mission</h3>
				<p>Our sole purpose is to spread our platform among the people as well as to launch new services to make our vision a reality.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="../../Images/landing/6.jpg" alt="service_image">
				<h3 class="sub_title">Our Vision</h3>
				<p>Our endeavor is to expose job opportunities for service providers</p>
			</div>
			<div class="detail_boxes_item">
				<img src="../../Images/landing/25.jpg" alt="service_image">
				<h3 class="sub_title">Terms and conditions</h3>
				<p>The service provides guarantee that his or her Content do not violate any copyright, intellectual
                    property rights or other rights of any person or entity, and agrees to release WoP and from all
                    obligations, liabilities and clams arising in connection with the use of (or the inability to use)
                    the service.</p>
			</div>
            <div class="detail_boxes_item">
				<img src="../../Images/landing/24.jpg" alt="service_image">
				<h3 class="sub_title">Our Team</h3>
				<p>We are an experienced, passionate, creative team, who are dedicated 
                    to providing your business with the best experience<br>
        <br>
			</div>
		</div>
	</div>

	<div class="services" id="services">
		<h1 class="title">Our Services</h1>
		<div class="detail_boxes">
			<div class="detail_boxes_item">
				<img src="../../Images/landing/11.jpg" alt="service_image">
				<h3 class="sub_title">Providing Jobs</h3>
				<p>Join with Us to get the best job experience in Sri Lanka. For more details <a href="index-contact_details.php">contact</a> us.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="../../Images/landing/5.jpg" alt="service_image">
				<h3 class="sub_title">Posting Ads</h3>
				<p>We try our best to help you to find best service providers.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="../../Images/landing/20.jpg" alt="service_image">
				<h3 class="sub_title"> Provide Workers</h3>
				<p>Our team consist of well qualified and experienced divisional managers for your help.</p>
			</div>
		</div>
	</div>
	<div class="contactus" id="contactus">
		<h1 class="title1">contact us</h1>
		<form class="form" action="index.php" method="post">
			<div class="form_input">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="form_input">
				<input type="text" placeholder="Subject" name="subject" required>
			</div>
			<div class="form_input">
				<textarea placeholder="Message" name="msg"></textarea required>
			</div>
			
			<button class="btn0" type="submit" name="submit"><b>Submit</b></button>
			
		</form>
	</div>

	<?php
      
		// if(isset($_POST['submit'])){
		
		// 		$email="mrbeemanager@gmail.com";
		// 		$subject =$_POST['subject'];
		// 		$body    ="".$_POST['msg']." 
		// 					This email is from: ".$_POST['email']." ";
		// 		$headers="From: mrbeemanager@gmail.com";
		// 			if(empty($email) || empty($subject) || empty($body)){  
		// 				//display an alert message if one of them field is empty
		// 				echo "All inputs are required!";
		// 			}else {
		// 				if (mail($email,$subject,$body,$headers)) {
		// 					echo "mail sent succesfully";
		// 				}else {
		// 					echo "Unable to send email. Please try again to send the email.";
							
		// 				}
		// 			}
					
		// }  
	?>
	

	<div class="footer">
		<a href="#">© 2021, Individual Workers Online Platform</a>
	</div>


	<div class="arrow">
		<a href="#home"><img src="../../Images/arrow.png" alt="up_arrow"></a>
	</div>
</div>	
	
</body>
</html>


                           