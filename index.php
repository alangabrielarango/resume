<?php
  //setting a variable to know which page is being displayed, and including header and menu
  $page = "Home";
  include("views/header.php");          
?>  
        
  <!--  I decided to add photos from Guatemala so you can know more about my country.
    Photos taken from Unsplash free source
    https://unsplash.com
  --> 
  <!-- 
  This code has been sourced from        
  https://www.w3schools.com/howto/howto_js_slideshow_gallery.asp
  and adapted with Jumbotron from Bootstrap
  -->  
  <!-- Container for the image gallery -->
  <div class="img-container">
    <!--Jumbotron. Code sourced from Bootstrap Cheet Sheet Chrome Extension-->
    <div class="jumbotron">
      <!-- Full-width images with number text -->
      <div class="img-mySlides" style=" display:block;">
        <div class="img-numbertext">              
          <div class="jumbotronText">
            <div id="myTitle">
              <h1 class="display-3">Alan Arango</h1>
              <!--My face picture-->
              <img id="myPic" src="img/rsz_bu3a5610.jpg" alt="Alan Arango">   
            </div>
            <br>
            <!--My summary-->                                 
            <p class="lead">I’m an analytical person with great attention to detail. I look constantly for improvement opportunities and new ways to solve common problems. I love to explore and learn new technologies. I consider myself organized, ambitious, adaptable, reliable and a team player. I've had the opportunity to be part of different kinds of projects, performing different roles such as developer, analyst, dba, team leader and project manager. I'm from Guatemala and based in Dublin since 10 months. I'm hoping to find new job opportunities in this amazing country, upskill my career and meet people from different backgrounds, perspectives, and experiences in the IT field.</p>
            <!--My email-->
            <p><strong>Email: </strong>allaramo@gmail.com</p>
          </div>

      <!--a gray background for the first image-->    
      </div>
        <img src="img/gray.jpg" style="width:100%">
      </div>

      <!--The full images on the main page-->
      <div class="img-mySlides" style=" display:none;">            
        <img src="img/christopher-crouzet-ieYbISorNPY-unsplash.jpg" style="width:100%">              
      </div>          

      <div class="img-mySlides" style=" display:none;">
        <img src="img/clovis-castaneda--97MyV1TOJk-unsplash.jpg" style="width:100%">
      </div>

      <div class="img-mySlides" style=" display:none;">            
        <img src="img/jimmy-baum-N4gc_5rZ9dM-unsplash.jpg" style="width:100%">
      </div>

      <div class="img-mySlides" style=" display:none;">            
        <img src="img/lenin-estrada-uTRtIcwkbGM-unsplash.jpg" style="width:100%">
      </div>

      <div class="img-mySlides" style=" display:none;">            
        <img src="img/mathijs-beks-Lej_-3cke2c-unsplash.jpg" style="width:100%">
      </div>                   
      
      <p id="img-caption">Gallery</p>        
      <!-- Thumbnail images -->
      <div class="img-row">
        <div class="img-column">
          <img class="img-demo img-cursor" src="img/aboutme.jpg" style="width:100%;" onclick="img_currentSlide(1)" alt="Gallery">
        </div>          
        <div class="img-column">
          <img class="img-demo img-cursor active" src="img/christopher-crouzet-ieYbISorNPY-unsplash.jpg" style="width:100%;" onclick="img_currentSlide(2)" alt="Semuc Champey, Cobán, Guatemala">
        </div>
        <div class="img-column">
          <img class="img-demo img-cursor" src="img/clovis-castaneda--97MyV1TOJk-unsplash.jpg" style="width:100%;" onclick="img_currentSlide(3)" alt="Antigua Guatemala, Sacatepéquez, Guatemala">
        </div>
        <div class="img-column">
          <img class="img-demo img-cursor" src="img/jimmy-baum-N4gc_5rZ9dM-unsplash.jpg" style="width:100%;" onclick="img_currentSlide(4)" alt="Tikal, Flores, Petén, Guatemala">
        </div>
        <div class="img-column">
          <img class="img-demo img-cursor" src="img/lenin-estrada-uTRtIcwkbGM-unsplash.jpg" style="width:100%;" onclick="img_currentSlide(5)" alt="Santa Rosa Beach, Guatemala">
        </div>
        <div class="img-column">
          <img class="img-demo img-cursor" src="img/mathijs-beks-Lej_-3cke2c-unsplash.jpg" style="width:100%;" onclick="img_currentSlide(6)" alt="Atitlan Lake, Panajachel, Guatemala">
        </div>          
      </div>
            
      
    </div>
  </div>            

<?php 
  include("views/footer.php");
?>
    
    

