<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<link rel='stylesheet' href="<?php echo URLROOT ?>/public/css/home/landing.css"/>
<link rel='stylesheet' href="<?php echo URLROOT ?>/public/css/home/button.css"/>

<main>
    <div class="featured">
        <h2>iWoP</h2> </br></br>
        <p> New way to find people to do your jobs. If you are one of those thousands of people who struggle to find people to do Jobs or struggle to find jobs, this is for you.</p>
    </div>
</main>
<br>

<div class="slideshow-container">
    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/7.jpg" style="width:100% ; height:auto">
    </div>
    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/14.jpg" style="width:100% ; height:auto">
    </div>

    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/2.jpg" style="width:100% ; height:auto">
    </div>

    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/3.jpg" style="width:100% ; height:auto">
    </div>

    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/8.jpg" style="width:100% ; height:auto">
    </div>
    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/9.jpg" style="width:100% ; height:auto">
    </div>
    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/18.jpg" style="width:100% ; height:auto">
    </div>
    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/12.jpg" style="width:100% ; height:auto">
    </div>
    <div class="slideshow fade">
        <img src="<?php echo URLROOT ?>/public/img/landing/22.jpg" style="width:100% ; height:auto">
    </div>

</div>

<br>

<div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span> 
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<div class="fnv">
        <div class="products-box">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="title-all text-center">
                            <h1>Service Providers</h1>
                            <p>We are here for you to find best out of bests</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="special-menu text-center"><center>
                            <div class="button-group filter-button-group">
                                <button class="active" data-filter="*">All</button>
                                <button data-filter=".top-featured">Top featured</button>
                                <button data-filter=".best-seller">Best service provider</button>
                            </div></center>
                        </div>
                    </div>
                </div>

                <div class="row-special-list" style="justify-content: center;">
                    <div class="special-grid ">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="new">New</p>
                                </div>
                                <img src="<?php echo URLROOT ?>/public/img/landing/1.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <a class="cart" href="" style="width: 100%;">View Service</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4> Workers | 15</h4>
                                <h5> Masons</h5>
                            </div>
                        </div>
                    </div>
                    <div class="special-grid ">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="new">New</p>
                                </div>
                                <img src="<?php echo URLROOT ?>/public/img/landing/23.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <a class="cart" href=">" style="width: 100%;">View Service</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Workers | 21</h4>
                                <h5>Welding</h5>
                            </div>
                        </div>
                    </div>
                    <div class="special-grid ">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="new">New</p>
                                </div>
                                <img src="<?php echo URLROOT ?>/public/img/landing/3.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <a class="cart" href="" style="width: 100%;">View Service</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Workers | 20</h4>
                                <h5>Landscaping</h5>
                            </div>
                        </div>
                    </div>
                    <div class="special-grid ">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="new">New</p>
                                </div>
                                <img src="<?php echo URLROOT ?>/public/img/landing/4.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <a class="cart" href="" style="width: 100%;">View Service</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Workers | 12</h4>
                                <h5>Electrician</h5>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
</div>



<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slideshow");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000);
    }
</script>

<button onclick="topFunction()" id="scrollUpBtn" title="Back to Top">Back to Top</button>

<script>
    var mybutton = document.getElementById("scrollUpBtn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
</script>





<?php include_once APPROOT . '/views/includes/footer.php'; ?>