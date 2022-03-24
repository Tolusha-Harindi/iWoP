<?php include_once APPROOT . '/views/includes/topnav.php'; ?>


<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/home.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/button.css"/>

<div id="home">
	

	<div class="banner_image">
		<div class="banner_content">
            <table>
                <tr>
                    <td>  <h1 style="margin-top:-2em; text-align:center; font-family: Rockwell, Courier Bold, Courier, Georgia, Times, Times New Roman, serif;"> iWoP</h1> <br><br><br><br><br> </td>
                </tr>
                <tr>
                    <td> <img src="<?php echo URLROOT ?>/public/img/home.jpg" style="margin-left:8.5em;"> </td>
                </tr>
                <br><br><br><br><br><br><br>
            </table>
			<!-- <p>Workers of the world unite; you have nothing to lose but your chains. If you want creative workers, give them enough time to play.</p>			 -->
		</div>
	</div>

	<div class="about" id="about">
		<h1 class="title">About Us</h1>
		<div class="detail_boxes">
			<div class="detail_boxes_item">
				<img src="<?php echo URLROOT ?>/public/img/mision.jpg" alt="service_image">
				<h3 class="sub_title">Our Mission</h3>
				<p>Our sole purpose is to spread our Service among the people as well as to launch new facilities to make our vision a reality.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="<?php echo URLROOT ?>/public/img/vision.jpg" alt="service_image">
				<h3 class="sub_title">Our Vision</h3>
				<p>Our endeavor is to launch a number of new projects that will bring huge economic benefits to the Republic of Sri Lanka through this platform.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="<?php echo URLROOT ?>/public/img/history.jpg" alt="service_image">
				<h3 class="sub_title">Our History</h3>
				<p>It is a fact that we all know that our lives depend on services. Therefore, 
					this is a project that was started out of a great desire to provide service to the society. It is not for financial gain but for the future sustainability of the 
					society</p>
			</div>
            <div class="detail_boxes_item">
				<img src="<?php echo URLROOT ?>/public/img/team.jpg" alt="service_image">
				<h3 class="sub_title">Our Team</h3>
				<p>We are an experienced, passionate, creative team, who are dedicated 
                    to providing your business with the best experience.</p>
			</div>
		</div>
	</div>

	<div class="services" id="services">
		<h1 class="title">Our Services</h1>
		<div class="detail_boxes">
			<div class="detail_boxes_item">
				<img src="<?php echo URLROOT ?>/public/img/pro-work.jpg" alt="service_image">
				<h3 class="sub_title">Providing Jobs</h3>
				<p>Join with Us to get the best experience</p>
			</div>
			<div class="detail_boxes_item">
				<img src="<?php echo URLROOT ?>/public/img/poster.jpg" alt="service_image">
				<h3 class="sub_title">Posting ads</h3>
				<p>We provide facility to post ads to find service providers.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="<?php echo URLROOT ?>/public/img/services.jpg" alt="service_image">
				<h3 class="sub_title">Providing Services</h3>
				<p>We try our best to provide you quality service providers.</p>
			</div>
		</div>
	</div>
</div>
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?>/public/img/arrow.png" alt="up_arrow"></a>
</div> 

<?php include_once APPROOT . '/views/includes/footer.php'; ?>