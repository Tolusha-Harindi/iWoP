

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Individual Workers Online Platform</title>
		<link href="landing.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>

<header>
            <div class="content-wrapper">
                <h1>Individual Workers Online Platform</h1>
                <nav>
                    <a href="home/home.php">Home</a>
                    <a href="../Repeating-pages/FAQ/FAQ.php">Help</a>
                   
                </nav>
               
                <div class="link-icons">  
                    
                    
                    <button id="logInButton" class="float-left submit-button" >Sign In</button>
                        <script type="text/javascript">
                            document.getElementById("logInButton").onclick = function () {
                            location.href = "../Login/Login.php";
                            };
                        </script>
                </div>
            </div>
</header>

<main>
    <div class="featured">
        <h2>iWoP</h2> </br></br>
        <p> New way to find people to do your jobs. If you are one of those thousands of people who struggle to find people to do Jobs or struggle to find jobs, this is for you.</p>
    </div>
</main>
<br>

        <div class="slideshow-container">
        <div class="slideshow fade">
            <img src="../Images/landing/7.jpg" style="width:100% ; height:auto">
        </div>
        <div class="slideshow fade">
            <img src="../Images/landing/14.jpg" style="width:100% ; height:auto">
        </div>

        <div class="slideshow fade">
            <img src="../Images/landing/2.jpg" style="width:100% ; height:auto">
        </div>

        <div class="slideshow fade">
            <img src="../Images/landing/3.jpg" style="width:100% ; height:auto">
        </div>

        <div class="slideshow fade">
            <img src="../Images/landing/8.jpg" style="width:100% ; height:auto">
        </div>
        <div class="slideshow fade">
            <img src="../Images/landing/9.jpg" style="width:100% ; height:auto">
        </div>
        <div class="slideshow fade">
            <img src="../Images/landing/18.jpg" style="width:100% ; height:auto">
        </div>
        <div class="slideshow fade">
            <img src="../Images/landing/12.jpg" style="width:100% ; height:auto">
        </div>
        <div class="slideshow fade">
            <img src="../Images/landing/22.jpg" style="width:100% ; height:auto">
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

<div class="header" id="products">
  <h1>Our Services</h1>
</div>

<div class="container" >
    <div class="gallery">
        <figure class="gallery__item gallery__item--1">
          <img src="../Images/landing/7.jpg" alt="Gallery image 1" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--2">
          <img src="../Images/landing/8.jpg" alt="Gallery image 2" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--3">
          <img src="../Images/landing/9.jpg" alt="Gallery image 3" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--4">
          <img src="../Images/landing/10.jpg" alt="Gallery image 4" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--5">
          <img src="../Images/landing/11.jpg" alt="Gallery image 5" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--6">
          <img src="../Images/landing/12.jpg" alt="Gallery image 6" class="gallery__img">
        </figure>
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



