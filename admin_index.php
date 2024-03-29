<?php 
$title = "Index";
require_once "includes-mysite/header.php"; 

?>
<div class="nav_sections">
   <div class="home_section default" id="home">
    <a href="index.php"><img src="img/Little Levites.png" width="550px" height="300px" 
    style="display: block; margin-left: auto; margin-right: auto;" ></a>
    <br/> <br/>
        <h1>Welcome to Little Levites</h1>
        <h4 style="font-style:italic";>A training ground for gospel musicians</h4>
        <br/>  <br/>  <br/>  
        <a href="signup.php"><button class="button" style="vertical-align:middle"><span>Sign up Today! 
    </span></button></a>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <hr class="hr-style">
    <br/><br/><br/><br/><br/><br/>
 <div class="about_section default" id="about">
<h1 style="text-align: center;">About Us</h1>
<p style="text-align: center; font-size:larger;">Little Levites is a music school geared towards training upcoming gospel musicians. 
    <br/> Founded by Andrea Pringle with burden to develop and retain an effective and consistent music ministry within churches   
</p>
<br/><br/>
<style>
* {box-sizing: border-box;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 8s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/piano-student.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/guitar_student.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/organ-students.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/drum-student.jpg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br/><br>
<p style="text-align: center; font-style:italic; font-size:larger;">Psalm 150:5 KJV <br/>
Praise him upon the loud cymbals: praise him upon the high sounding cymbals.</p>
</div>
  
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<img src="img/note1.jpg"; style="text-align: right;">  
<div class="about_section one" id="mission">
</p> 
<h1 style="text-align: center;"> Our Mission </h1>
    <p style="text-align: center; font-size:larger;">Teaching how to play musical instruments such as the Piano, Saxophone, 
    <br>Organ, Bass, Drums, Trumpet, Acoustic Guitar, and many more!
</p>
    </div>
    <br/><br/>
    <div class="about_section two" id="vission">
<h1 style="text-align: center;">Our Vision </h1>
    <p style="text-align: center; font-size:larger;"> To develop skilled gospel muscians for Kingdom work 
   
    </div>
    
    <p style="text-align: center; font-style:italic; font-size:larger;"> 
    1 Samuel 16:17-18 KJV <br/>
And Saul said unto his servants, Provide me now a man that can play well, 
and bring him to me. Then answered one of the servants, and said, <br/> 
Behold, I have seen a son of Jesse the Bethlehemite, that is cunning in playing, and a mighty valiant man, 
and a man of war, <br/>
and prudent in matters, and a comely person, and the Lord is with him.</p>
    <br/><br/><br/><br/><br/><br/>
    <hr class="hr-style">
    <br/><br/><br/>
   <div class="home_section one" id="about-us">
        <h1>Online Training Sessions</h1>
        <p style="font-size: large;">Online sessions will be held on Zoom and Google meets 
        </p>
        <br/><br/><br/><br/><br/><br/>
        <div class="style-img-row">
  <div class="style-img-column">
    <img src="img/zoom logo.png"  style="width:60%">
  </div>
  <div class="style-img-column">
    <img src="img/google meets logo.png"  style="width: 60%">
  </div>
    </div>
    <br/>
    <hr class="hr-style">
    <br/><br/><br/><br/><br/><br/>
    <div class="home_section_three" id="home_section_three">
    <h1 style="font-style: italic;">Face To Face Sessions</h1>
   <br/><br/><br/>
    <h2 >Location</h2>
    <br/>
    <img src="img/Linstead-Pentecostal-Tabernacle.jpg" style= "
  height: 350px; object-fit: cover; width:40% ; border-radius: 8px; filter: drop-shadow(8px 8px 10px grey);">
        
    <p style="font-size: large;"><br/> 66-72, 1/2  Wildman St<br/> Kingston, Jamaica</p>
        <br/><br/><br/>
        <h2>Hours</h2>
        <br/>
        <p style="font-size: large;">Fridays 4:30 pm - 6:30 pm
           <br/> Saturdays 12:30 pm - 2:30 pm
        </p> 
        <br/> <br/>
        <h2>Contact Us </h2>
        <br/>
        <p style="font-size: large;">TELEPHONE:  876-970-8846 or 876-503-4458 (WhatsApp)
           <br/> EMAIL:  liitle_Levites90@gmail.com
        </p>
    </div>
    <br/><br/><br/>
    <hr class="hr-style">
    <br/>
   <div class="home_section five" id="home_section five">
    <h1>Testimonials</h1>
    <br/>
    <div class="column-2">
   <blockquote>Since I started taking piano lessons from Julian, 
    the way I think and play has dramatically changed!</blockquote>
    </div>
    <div class="column-2">
    <blockquote>I recommend these classes to all, from beginners to advance players</blockquote>
    </div>
    <div class="column-2">
    <blockquote>I am working through the beginner lessons with my son, Zac, who is 11. 
      I found that some teachers adopt a very basic approach when teaching beginners or 
      young students especially, however Sean doesn't hold back ! 
      His lessons are challenging but very rewarding - 
      he teaches everything you need to know to advance quickly ! 
      Zac is buzzing to be able to really play piano rather than just a few simple exercises. 
      We can't wait to progress and Little Levites is a one stop shop in terms of the content he 
      has from beginner to advanced so we expect to be with you guys for the long haul! 
      All in All - Great Value!</blockquote>
    </div>
    <div class="column-2">
    <blockquote>I am very happy that I signed up for Little Levites. It gives me structure with the Learning Tracks, and inspiration from other students. 
      Great teachers, great courses, great community!</blockquote>
    </div>
    <div class="column-2">
    <blockquote>Who would have taught I would be a pro organ play. Look at where I am at now!</blockquote>
    </div>
    <div class="column-2">
    <blockquote>I just started the Bass Guitar course two weeks ago and I am delighted with the materials and the level of the teachers. 
      All of them are excellent musicians and music educators. 🎵</blockquote>
    </div>
   </div>
   
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <hr class="hr-style">
    <br/>
   <div class="home_section four" id="home_section four">
    <h1>Meet our Instructors</h1>
    <br/>
    <div class="img-row">
  <div class="column">
  
    <a href="Sean-Wilson-Info.php"> <img src="img/sean wilson.jpg" alt="Sean Wilson" style="width:100%"> </a>
    <p style="text-align: center; font-style:italic;">Sean Wilson- PIANO</p>
    <p style="text-align: center; font-style:italic;">"I will teach you to play Gospel Piano like the Pros.
Stop feeling confused and start growing again!"</p>
  </div>
  <div class="column">
    <a href="Julian-Tabares-Info.php"><img src="img/Julian-Tabares.jpg" alt="Julian Tabares" style="width:100%"></a>
    <p style="text-align: center; font-style:italic;">Julian Tabares- AUX KEYBOARD</p>
    <p style="text-align: center; font-style:italic;">Julian started getting involved in the music ministry at the age of 11 and started directing bands at the age of 14. 
        <br/> Julian now makes his profession from music full time</p>
  </div>
  <div class="column">
    <a href="Jaydon-Arnold-Info.php"><img src="img/jaydon arnold.jpg" alt="Jaydon Arnold" style="width:100%"></a>
    <p style="text-align: center; font-style:italic;">Jaydon Arnold- ORGAN</p>
    <p style="text-align: center; font-style:italic;">"I like to teach people how to express themselves through the language of music. 
      <br/>Just as you talk and listen freely, music can be enjoyed and played in the same way."</p>
  </div>
  <div class="column">
    <a href="Travis-Dykes-Info.php"><img src="img/Travis-Dykes.jpg" alt="Travis Dykes" style="width:100%"></a>
    <p style="text-align: center; font-style:italic;">Travis Dykes- BASS</p>
    <p style="text-align: center; font-style:italic;">Travis is an endorsed Fender PLAY Bass instructor, music school owner and online music educator. 
      <br/>Aside from teaching, Travis also works as a touring/studio musician, music director, arranger, and producer.</p>
  </div>
  <div class="column">
    <a href="Israel-Houghton-Info.php"><img src="img/israel houghton.jpeg" alt="Israel Houghton" style="width:100%"></a>
    <p style="text-align: center; font-style:italic;" >Israel Houghton- ACOUSTIC GUITAR</p>
    <p style="text-align: center; font-style:italic;"> "I believe worship has the power to change. The environment has the power to change a life.
      <br/> People need hope. I want to give good news to people." </p>
  </div>
  <div class="column">
     <a href="Daniel-Bernard-Info.php"><img src="img/Daniel-Bernard-copy-2.jpg" alt="Daniel Bernard" style="width:100%"></a>
    <p style="text-align: center; font-style:italic;">Daniel Bernard- DRUMS</p>
    <p style="text-align: center; font-style:italic;">"I hope to inspire, educate, and help others to get involved in music ministry as well as fuel a passion for drums in my peers."</p>
  </div>
   </div>
   </div>
   <br/><br/><br/><br/><br/>
   <h3 style="text-align: center;"> What are you waiting for?</h3> 
   <h3 style="text-align: center; font-style:italic; "> <a href="#home" style="color: #edbb00"> Sign up </a> today to learning how to play!</h3>
   <br/><br/><br/>
<?php require_once "includes-mysite/footer.php"; ?>
<br/>