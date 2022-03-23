
<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/customer_sidenav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/customer/category.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<div class="headingcategory" style="margin-top:-12em;"> Categories</div>

     <div class="box1">
         <div class="outer">
           <div class="imageboxes">
             <div class="grid-container">
               <?php foreach($data['cate'] as $cate): ?>
                  <a href="<?php echo URLROOT;?>/customers/customer_service_providers">
                       <div class="grid-item"> 
                            <img src="<?php echo URLROOT ?> /public/img/category/<?php echo $cate->logo; ?>" style="width:50px; height:50px;" id="logo">
                            <h4><?php echo $cate->category; ?></h4>
                       </div> 
                  </a>
               <?php endforeach; ?>
   
                 
             </div>
           </div>
         </div>
     </div>
   
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div> 

<?php include_once APPROOT . '/views/includes/footer.php'; ?>