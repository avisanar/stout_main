<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="index.css">


  <style >
   :root{
    --color-1: #2f3240;
}

*{
   box-sizing: border-box;
   margin:0;
   padding:0;
}
ul{
   list-style: none;
}
a{
   text-decoration: none;
}
.header_container{
   max-width: 1170px;
   margin:auto;
}
.row{
   display: flex;
   flex-wrap: wrap;
}
.align-items-center{
   align-items: center;
}
.justify-content-between{
   justify-content: space-between;
}
/*header*/
.header{
   background-color: #B0E0E6;
   padding: 12px 0;
   line-height: 1.5;
}

.header .header_logo,
.header .nav{
   padding:0 15px;
}
.header .header_logo a{
   font-size: 30px;
   color: #ffffff;
   text-transform: capitalize;
}
.header .nav ul li{
   display: inline-block;
   margin-left: 40px;
}
.header .nav ul li a{
   display: block;
   font-size: 16px;
   text-transform: capitalize;
   color: #ffffff;
   padding: 10px 0;
   transition: all 0.5s ease;
}
.header .nav ul li a.active,
.header .nav ul li a:hover{
   color: black;
}
.nav-toggler{
   height: 34px;
   width: 44px;
   background-color: #ffffff;
   border-radius: 4px;
   cursor: pointer;
   border:none;
   display: none;
   margin-right: 15px;
}
.nav-toggler:focus{
   outline: none;
   box-shadow: 0 0 15px rgba(255,255,255,0.5);
}
.nav-toggler span{
    height: 2px;
    width: 20px;
    background-color: var(--color-1);
    display: block;
    margin:auto;
    position: relative;
    transition: all 0.3s ease;
}
.nav-toggler.active span{
   background-color: transparent;
}
.nav-toggler span::before,
.nav-toggler span::after{
   content: '';
   position: absolute;
   left:0;
   top:0;
   width: 100%;
   height: 100%;
   background-color: var(--color-1);
   transition: all 0.3s ease;
}
.nav-toggler span::before{
   transform: translateY(-6px);
}
.nav-toggler.active span::before{
   transform: rotate(45deg);
}
.nav-toggler span::after{
   transform: translateY(6px);
}
.nav-toggler.active span::after{
   transform: rotate(135deg);
}
@media(max-width:991px){
   .nav-toggler{
      display: block;
   }
   .header .nav{
      width: 100%;
      padding:0;
      max-height: 0px;
      overflow: hidden;
      visibility: hidden;
      transition: all 0.5s ease;
   }
   .header .nav.open{
      visibility: visible;
   }
   .header .nav ul{
      padding:12px 15px 0;
      margin-top: 12px;
      border-top:1px solid rgba(255,255,255,0.2);
   }
   .header .nav ul li{
      display: block;
      margin:0;
   }
}



  </style>

</head>
<body>
  
  


 <header class="header">
    <div class="header_container">
        <div class="row align-items-center justify-content-between">
            <div class="header_logo">
               <a href="profile.php">logo</a>
            </div>
            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            <nav class="nav">
               <ul>
                  <li><a href="profile.php" class="active">home</a></li>
                  <li><a href="why_stout.html">Why stout</a></li>
                  <li><a href="companies.html">Companies</a></li>
                  <li><a href="candidates.html">Candidates</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="vendorviewblog.html">Vendor Views Blog</a></li>
                   <li><a href="news.html">News</a></li>
                   <li><a href="contact.html">Contact</a></li>
                   <li><a href="login.php">logout</a></li>

  
  
               </ul>
            </nav>
        </div>
    </div>
 </header>
<div class="top_icon1">
  <div class="image">
  <img src="1.jpg" style="margin-left: 60px;">
</div></div>
<div class="top_icon">
  <div class="image">
  <img src="2.jpg" class="img2"style="margin-left: 10px;">
  <img src="3.jpg" style="margin-left: 10px;">
<img src="4.jpg" style="margin-left: 10px;">
</div></div>



<div class="image_slide">
  <img class="mySlides" src="36.jpg"  style="width:100%; height: 300px;">
  <img class="mySlides" src="34.jpg" style="width:100%; height: 300px;">
    <img class="mySlides" src="8.jpg" style="width:100%; height: 300px;">
      <img class="mySlides" src="7.jpg" style="width:100%; height: 300px;">


</div></div></nav>

<div class="first_hea">
  <h3><b>SOLUTIONS FOR<a href="companies.html"> <span style="color: darkred;"> COMPANIES</span></a> AND<a href="candidates.html"> <span style="color: darkred;">CANDIDATES</span></a></b></h3>
  <p class="first_para">At Stout Executive Search, we believe in recruiting done differently. Located conveniently in the Northwest Arkansas area, we have access to all Walmart suppliers in Bentonville.<br> By working with us, you can ensure finding the right culture fit is our number one priority.</b></p>
</div>

<div class="first_but"><a href="companies.html">
  <button>COMPANIES</button></a>
  <a href="candidates">
  <button>CANDIDATES</button></a>
</div>
<div class="sec_hea">
  <h1>Focused on Placing Professionals for Consumer Packaged Goods Supplier Teams</h1>
</div>
 <br><br>

<div class="row">
    <div class="icon_line">
        <div class="image">
            <i style="margin-left: 30px; color: darkred;" class="fa fa-car fa-2x"></i>
        </div>
        <div class="text" style="color: black;"><a href="testimonials.html">
          <h4 >BUILT FOR WALMART SUPPLIERS</h4></a>
          <p>Stout specializes in providing staffing and <br>support exclusively for Walmart suppliers.</p>
        </div>
      </div>
      <div class="icon_line">
        <div class="image">
            <i style="margin-left: 30px; font-size: 30px; color: darkred;" class="fa fa-file"></i>
        </div>
        <div class="text" style="color: black;"><a href="vendorviewblog.html">
          <h4 >HERE TO SUPPORT YOU</h4></a>
          <p>We provide support to the companies and <br>people who support the success of<br> Walmart.</p>
        </div>

      </div>

      <div class="icon_line">
        <div class="image">
            <i style="margin-left: 30px; font-size: 30px; color: darkred;" class="fa fa-cloud"></i>
        </div>
        <div class="text" style="color: black;"><a href="contact.html">
          <h4 >TOOLS AND RESOURCES</h4></a>
          <p>We are a full service, full solution provider,<br> giving you the tools and help you need to be successful.</p>
        </div>

      </div>

      
</div>


 <div class="contain">
      <div class="image">
        <img src="type.jpg">
      </div>
      <div class="text"><a href="news.html">
        <h2><span style=" margin-top: 1%;"><u>The Stout Difference</u> </span></h2></a>
        <a href="meetourfounder.html">
        <h1>It's Business and<br>
It's Personal</h1></a> <br><br>
<p>At Stout Executive Search, we believe business is personal. We know that placing  a candidate is not only a matter of matching skill-sets with job requirements, but  also matching candidate personality with company culture and goals. At Stout,  we know our candidates and companies personally. We match strategically and  intentionally.</p><br><br>
<a href="why_stout.html">
<button>Learn More</button></a><br><br><br>
      </div>
    </div>



<div class="youtube">
  <div class="you_con">
  <h3><span style="background-color: red; color:white; margin-top: 1%;">The The Toolbox</span></h3><br>
  <h2 style="background-color: red; color: white;">Career Resources For A Successful Interview</h2><br>
<p><h2> <i class="fa fa-gear" style="color:darkred"></i>
Resume Guidelines</h2><br>
Your resume is your opportunity to sell yourself to a potential employer and set <br>yourself apart from the crowd.</p><br><br> 
<p> <h2><i class="fa fa-anchor" style="color:darkred"></i>
  
Position Descriptions</h2><br>
Our understanding of the jobs in the market ensures you are placed in a position to <br>reach your full potential.</p><br>
<p><h2><i class='fa fa-umbrella' style="color:darkred"></i>
Personal Preparation</h2><br>
Let us arm you with the knowledge and skills to rock your next interview.</p><br>
<a href="vendorviewblog.html">
<button>Learn More</button></a>
</div><br><br>
<div class="you_vid">
 <iframe width="350" height="245" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
</iframe>


</div>
  
</div><br><br><br>


<footer>
   <div class="article">
     <div class="left box">
       <div class="upper">
         <div class="topic">About us</div>
         <p>Our understanding of the jobs in the market ensures you are placed in a position to reach your full potential.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="tel:+4733378901"><i class="fa fa-phone"></i>+007 9898 015</a>
         </div>
         <div class="email">
           <a href="mailto:someone@example.com"><i class="fa fa-envelope"></i>yourgmaailname@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Our Services</div>
       <div><a href="profile.php">HOME</a></div>
       <div><a href="why_stout.html">WHY STOUT</a></div>
       <div><a href="companies.html">COMPANIES</a></div>
       <div><a href="candidates.html">CANDIDATES</a></div>
       <div><a href="testimonials.html">TESTIMONIALS</a></div>
       <div><a href="vendorviewblog.html">Vendor Views BLOG</a></div>
       <div><a href="news.html">NEWS</a></div>
     </div>
     <div class="right box">
       <div class="topic">Subscribe us</div>
       <form action="#"  style="width: 90%;">
         <input type="text" placeholder="Enter Your email address">
         <input type="submit" name="" value="Send">
         <div class="media-icons">
           <a href="https://www.facebook.com/StoutExecutiveSearch/" target="_blank"><i class="fa fa-facebook-f"></i></a>
           <a href="https://www.instagram.com/StoutSearch/?__coig_restricted=1" target="_blank"><i class="fa fa-instagram"></i></a>
           <a href="https://twitter.com/stoutsearch" target="_blank"><i class="fa fa-twitter"></i></a>
           <a href="https://www.linkedin.com/company/2291440" target="_blank"><i class="fa fa-linkedin"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2022 <a href="#">WHY STOUT</a> All rights reserved</p>
   </div>
 </footer>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $('.toggle i').click(function (){
    $('ul').toggleClass('show')
  });
</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<script >

 const navToggler = document.querySelector(".nav-toggler");
 navToggler.addEventListener("click", navToggle);

 function navToggle() {
    navToggler.classList.toggle("active");
    const nav = document.querySelector(".nav");
    nav.classList.toggle("open");
    if(nav.classList.contains("open")){
      nav.style.maxHeight = nav.scrollHeight + "px";
    }
    else{
      nav.removeAttribute("style");
    }
 } </script>
</body>
</html> 
