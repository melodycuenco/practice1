<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Main bootstrap Core files -->
	<link href="../resources/bootstrap-4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Customized css file -->
  <link href="../resources/css/homepage2.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	
</head>
<body onload="initMap();">

    <!-- Navigation bar start -->
  	<nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="#"><img src="//txt-dynamic.static.1001fonts.net/txt/dHRmLjMyLmZlZmJmYi5TbTl1WVhNZ1IzZGhjRzgsLjAA/blackchancery.regular.png" style="width: auto;"></a>
        artsetr
      
        
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#exampleModal" data-toggle="modal">Login/Sign In </a>
            </li>
          </ul>
      </nav>
    <!-- Navigation bar end -->



    <!-- PICTURE SLIDESHOW start -->
    <div class="container-fluid slideContainer">
      <div id="slideshow">
         <div class="firstSlide logoSC">
          <img class="slidediv" src="../resources/images/homepage_images/Pic4.jpg" />
         </div>
         <div class="divSlides">
           <img class="slidediv" src="../resources/images/homepage_images/Pic3.jpg" />
         </div>
         <div class="divSlides">
           <img class="slidediv" src="../resources/images/homepage_images/Pic6.jpg" />
         </div>
         <div class="divSlides">
           <img class="slidediv" src="../resources/images/homepage_images/Pic5.jpg"/>
         </div>
         <div class="divSlides">
           <img class="slidediv" src="../resources/images/homepage_images/Pic7.jpg" />
         </div>
      </div>
    </div>
    <!-- PICTURE SLIDESHOW end -->


    <!-- Announcement start -->
    <h1 class="annohead"> Announcements </h1>
   
    <div class="container-fluid"> 

    
    <div class="announcementbox">

      <div class="row">

      <div class="col-md-6 mt-1">
      <div class="announcements">
        <div class="row">
          <div class="col-2 col-md-1">  
          <img src="../resources/images/homepage_images/Boy.jpg" id="annopic">
          </div>
          <div class="col-8 col-md-5">
            <h6> Romeo E. Yappie </h6>
            <p class="datePosted"> April 30, 2018, Monday 9:00 AM  </p>
          </div>         
        </div>

        
        <div id="annopost">
          <h6> (Subject here) </h6>

          <h4 id="annodesc"> r patakasdfj kadsfbnnas jasdkfh hiuyweriuy i yiy uioy oy oiy way klase ugma kay walay jeep</h4>

        </div>
      </div>    
      </div>

      <div class="col-md-6 mt-1">
      <div class="announcements">
        <div class="row">
          <div class="col-2 col-md-1">  
          <img src="../resources/images/homepage_images/Boy.jpg" id="annopic">
          </div>
          <div class="col-8 col-md-5">
            <h6> Romeo E. Yappie </h6>
            <p class="datePosted"> April 30, 2018, Monday 9:00 AM  </p>
          </div>         
        </div>

        <div id="annopost">
          <h6> (Subject here) </h6>

          <h4 id="annodesc"> r patakasdfj kadsfbnnas jasdkfh hiuyweriuy i yiy uioy oy oiy way klase ugma kay walay jeep</h4>

        </div>
      </div>
      </div>



      </div>

    </div>
    </div>

    <!-- Announcement end -->

    <!-- Footer start -->
      <footer>
      <div class="container pt-5">
      <div class="row">
        <div class="col-12 col-md">
          <img src="//txt-dynamic.static.1001fonts.net/txt/dHRmLjMyLmZlZmJmYi5TbTl1WVhNZ1IzZGhjRzgsLjAA/blackchancery.regular.png" style="width: auto;">
          <small class="d-block mb-3 whiteText">© 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5 class="whiteText">Features</h5>
          <ul class="list-unstyled text-small" id="footerUl">
            <li><a class="whiteText" href="#">Student Profile</a></li>
            <li><a class="whiteText" href="#">Announcement</a></li>
            <li><a class="whiteText" href="#">Alumni Tracking/Graduate Tracer</a></li>
            <li><a class="whiteText" href="#">Stuff for developers</a></li>
            <li><a class="whiteText" href="#">Another one</a></li>
            <li><a class="whiteText" href="#">Boom boom Nancy</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5 class="whiteText">Contact</h5>
          <ul class="list-unstyled text-small" id="footerUl">
            <li><a class="whiteText" href="#">School</a></li>
            <li><a class="whiteText" href="#">Departments</a></li>
            <li><a class="whiteText" href="#">Contact</a></li>
            <li><a class="whiteText" href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5 class="whiteText">About</h5>
          <ul class="list-unstyled text-small" id="footerUl">
            <li><a class="whiteText" href="#">Developers</a></li>
            <li><a class="whiteText" href="#">Development Tools</a></li>
            <li><a class="whiteText" href="#">Privacy</a></li>
            <li><a class="whiteText" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-4 text-center">
        <ul class="list-unstyled">
          <li class="list-inline-item"><i data-feather="facebook" class="socialIcons"></i></li>
          <li class="list-inline-item"><i data-feather="twitter" class="socialIcons"></i></li>
          <li class="list-inline-item"><i data-feather="instagram" class="socialIcons"></i></li>
          <li class="list-inline-item"><i data-feather="chrome" class="socialIcons"></i></li>
        </ul>
        </div>
      </div>
    </div>
    </footer>
    <!-- Footer end -->


    <!-- Map School Location start -->
    <div class="container-fluid mapContainer">
    <div id="map" style="height: 400px;width: 100%"></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlyUWOZTrGwtkrOFAV6-ejOmll5VuhUbE&callback=initMap">
    </script>
    <script>
    // Initialize and add the map
    function initMap() {
      // The location of San Carlos
      var SanCarlosTalamban = {lat: 10.3540762, lng: 123.91157580000004};
      // The map, centered at San Carlos
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 17, center: SanCarlosTalamban});
      // The marker, positioned at San Carlos
      var marker = new google.maps.Marker({position: SanCarlosTalamban, map: map});
    }
    </script>
    </div>
    <!-- Map School Location end -->
   


    <!-- LOGIN MODAL start -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modalWidth" role="document">
          <div class="modal-content modalBg"> 
            <div class="modal-header mt-0 mb-0" style="border-bottom:0px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Modal body start -->
              <div class="row">
                  
                  <div class="col-12 col-md mb-5">
                    <center>
                      <img src="//txt-dynamic.static.1001fonts.net/txt/dHRmLjMyLmZlZmJmYi5TbTl1WVhNZ1IzZGhjRzgsLjAA/blackchancery.regular.png" style="width: auto;">
                      <h1 class="signInHeader"> Sign In </h1>
                        <form>
                          <div>
                          <input type="text" placeholder="Username" id="loginInput">
                          </div>
                          <div>
                          <input type="password" placeholder="Password" id="loginInput">
                          </div>
                          <div>
                            <input type="submit" value="Login" id="loginButton"><br>
                            <input type="submit" id="cancelButton" class="btn btn-dark" data-dismiss="modal" value="Cancel">
                          </div>
                        </form>
                      </center>
                  </div>
              </div>


            

            </div><!-- Modal body end -->

            <!--<div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
        </div>
      </div>
    <!-- LOGIN MODAL end  --> 

  <!-- Data feather icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
      feather.replace()
  </script>

  <!-- jQuery minified -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

  <!-- Homepage javascript -->
  <script src="../resources/js/homepage2.js"></script>
   
  <!-- The three main javascript files of bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


  