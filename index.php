<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Index</title>
  
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/tooplate-style.css" />
  </head>

  <body>
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

    <div class="tm-main-container">
      <div class="tm-top-container">
        <!-- Menu -->
        <nav id="tmNav" class="tm-nav">
          <a class="tm-navbar-menu" href="#">Menu</a>
          <ul class="tm-nav-links">
            <li class="tm-nav-item active">
              <a href="login.php" data-linkid="0" data-align="right" class="tm-nav-link">Log In</a>
            </li>
            <li class="tm-nav-item">
              <a href="registration.php" data-linkid="1" data-align="right" class="tm-nav-link">Sign Up</a>
            </li>
            
          </ul>
        </nav>

        <!-- Site header -->
        <header class="tm-site-header-box tm-bg-dark">
          <h1 class="tm-site-title">IRBMS</h1>
          <p class="mb-0 tm-site-subtitle">Online Ticket Booking</p>
        </header>
      </div>
      <!-- tm-top-container -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Site content -->
            <div class="tm-content">
              <!-- Section 0 Introduction -->
              <section class="tm-section tm-section-0">
                <h2 class="tm-section-title mb-3 font-weight-bold" style="font-size: 70px">
                  Introduction
                </h2>
                <div class="tm-textbox tm-bg-dark">
                  <p>
                    To continue with Ticket Booking and Viewing Trains please Log In if you are an old user, otherwise please Sign Up from the Menu section !
                  </p>
                </div>
              </section>
             </div>
           </div>
         </div>
       </div>
     </div>

        
      </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/background.cycle.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script>
      let slickInitDone = false;
      let previousImageId = 0,
        currentImageId = 0;
      let pageAlign = "right";
      let bgCycle;
      let links;
      let eachNavLink;

      window.onload = function() {
        $("body").addClass("loaded");
      };

      function navLinkClick(e) {
        if ($(e.target).hasClass("external")) {
          return;
        }

        e.preventDefault();

        if ($(e.target).data("align")) {
          pageAlign = $(e.target).data("align");
        }

        // Change bg image
        previousImageId = currentImageId;
        currentImageId = $(e.target).data("linkid");
        bgCycle.cycleToNextImage(previousImageId, currentImageId);

        // Change menu item highlight
        $(`.tm-nav-item:eq(${previousImageId})`).removeClass("active");
        $(`.tm-nav-item:eq(${currentImageId})`).addClass("active");

        // Change page content
        $(`.tm-section-${previousImageId}`).fadeOut(function(e) {
          $(`.tm-section-${currentImageId}`).fadeIn();
          // Gallery
          if (currentImageId === 2) {
            setupSlider();
          }
        });

        adjustFooter();
      }

      $(document).ready(function() {
        // Set first page
        $(".tm-section").fadeOut(0);
        $(".tm-section-0").fadeIn();

        // Set Background images
        // https://www.jqueryscript.net/slideshow/Simple-jQuery-Background-Image-Slideshow-with-Fade-Transitions-Background-Cycle.html
        bgCycle = $("body").backgroundCycle({
          imageUrls: [
            "img/14.webp",
            
          ],
          fadeSpeed: 2000,
          duration: -1,
          backgroundSize: SCALING_MODE_COVER
        });

        eachNavLink = $(".tm-nav-link");
        //links = $(".tm-nav-links");

        // "Menu" open/close
        if (links.hasClass("open")) {
          links.fadeIn(0);
        } else {
          links.fadeOut(0);
        }

       // $("#tm_about_link").on("click", navLinkClick);
        //$("#tm_work_link").on("click", navLinkClick);

        // Each menu item click
        eachNavLink.on("click", navLinkClick);

        $(".tm-navbar-menu").click(function(e) {
          if (links.hasClass("open")) {
            links.fadeOut();
          } else {
            links.fadeIn();
          }

          links.toggleClass("open");
        });

       
        });

      
      
    </script>
  </body>
</html>
