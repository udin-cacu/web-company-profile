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

      <title>Our Service</title> 


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

<!-- service -->
      <section id="services" class="services grey lighten-3 scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3">
              Our Services
            </h3>
            <hr>
            <br>            
            <div class="col m12 s12">
              <div class="card-panel center">
                <a href="services.php" class="btn-floating btn-large pulse"><i class="material-icons medium">laptop</i></a>
                <h5>CLEANING SERVICE</h5>
                <p><img src="img/1.jpg" height="100%" width="100%"></a></p>
                <p><img src="img/2.jpg" height="100%" width="100%"></a></p>
                <p><img src="img/3.jpg" height="100%" width="100%"></a></p>
                <p><img src="img/4.jpg" height="100%" width="100%"></a></p>
                <p><img src="img/5.jpg" height="100%" width="100%"></a></p>
                <p><img src="img/6.jpg" height="100%" width="100%"></a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir service -->



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