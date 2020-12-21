<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- myCSS -->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Portfolio</title> 


    </head>

    <body id="home" class="scrollspy">

      <!-- Navbar -->
      <div class="navbar-fixed">
        <nav class="orange darken-2">
          <div class="container">
            <div class="nav-wrapper">
              <a href="index.php" class="brand-logo red-text"><img src="img/logopt.png" width="75%" height="100%" alt=""></a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="about.php">About</a></li>
                <li><a href="aplikasi.php">Aplikasi</a></li>
                <li><a href="services.php">Our Service</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- akhir Navbar -->

      <!-- sidenav -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="about.php">About</a></li>
        <li><a href="aplikasi.php">Aplikasi</a></li>
        <li><a href="services.php">Our Service</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <!-- akhir sidenav -->

      <!-- portfolio -->
      <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
          <h3 class="light center grey-text text-darken-3">Portfolio</h3>
          <hr><p><br></p>
          <div class="row">
            <div class="col m3 s12">
              <img src="img/cleaner/1.jpeg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/cleaner/2.jpeg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/cleaner/3.jpeg" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/cleaner/6.jpeg" class="responsive-img materialboxed">
            </div>
          </div>
          <div class="row">
            <div class="col m3 s12">
              <video src="videos/1.mp4" class="materialboxed" width="100%" height="250px" controls>
                <source src="1.mp4" type="video/mp4">
            </div>
            <div class="col m3 s12">
              <video src="videos/4.mp4" class="materialboxed" width="100%" height="250px" controls>
                <source src="4.mp4" type="video/mp4">
            </div>
            <div class="col m3 s12">
              <video src="videos/5.mp4" class="materialboxed" width="100%" height="250px" controls>
                <source src="5.mp4" type="video/mp4">
            </div>
            <div class="col m3 s12">
              <video src="videos/2.mp4" class="materialboxed" width="100%" height="250px" controls>
                <source src="3.mp4" type="video/mp4">
            </div>
          </div>
        </div>
      </section>
      <!-- akhir Portfolio -->



      <!-- footer -->
      <footer class="orange darken-2 white-text center">
        <p class="flow-text">PT. WASTU MANDALA <i class="material-icons smalls">copyright</i>Copyright 2020</p>
      </footer>
      <!-- akhir footer -->


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script type="text/javascript">
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav); 

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators: false,
          height: 500,
          duration: 600,
          interval: 3000

        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax); 

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
          scrollOffset: 50
        });

        

      </script>

    </body>
  </html>