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

      <title>Contact</title> 


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


      <!-- contact -->
      <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="light center grey-text text-darken-3">Contact Us</h3>
          <hr><p><br></p>
          <div class="row">
            <div class="col m6 s12">
              <div class="card-panel blue darken-3 center white-text">
                <i class="material-icons medium">email</i>
                <h5>Contact</h5>
                <p>For more information about your damage, please contact me</p>
              </div>
               <ul class="collection with-header">
                 <li class="collection-header"><h4>Our Office</h4></li>
                 <li class="collection-item"><i class="material-icons">account_balance</i> PT. WASTU MANDALA</li>
                 <li class="collection-item"><i class="material-icons">place</i> Jl. Cimone Permai VII No.33 Tangerang 15114</li>
                 <li class="collection-item"><i class="material-icons">public</i> Banten, Indonesia</li>
                 <li class="collection-item"><i class="material-icons">phone_android</i> +62 822 7929 9900</li>
                 <li class="collection-item"><i class="material-icons">email</i> wastumandala126@gmail.com</li>
               </ul>
            </div>
            <div class="col m6 s12">
              <form name="datapribadi" method="post" action="send.php" enctype="multipart/form-data">
              <div class="card-panel">
                <h5>Please fill out this form</h5>
                <hr>
                <br>
                <div class="input-field">
                  <input type="email" name="email_penerima" id="email" class="validate" placeholder="Email PT. Wastu Mandala">
                  <label for="email">To</label>
                </div>
                <div class="input-field">
                  <input type="text" name="subjek" id="subject" required class="validate">
                  <label for="subject">Your Name</label>
                </div>
                <div class="input-field">
                  <textarea name="pesan" id="message" class="materialize-textarea validate"></textarea>
                  <label for="message">Message</label>
                </div>
                <div style="margin-bottom: 20px;">
                <label>File Data</label><br />
                <input type="file" name="attachment" style="margin-top: 5px;width: 400px" />
                </div>
                <button type="submit" class="btn blue darken-3">Send Email</button>
                <button type="reset" class="btn orange darken-2">Clear</button>
              </div>
            </div>
            </form>
            <h3><a href="diskusi.php">Form Diskusi Klik Disini</a></h3>
          </div>
        </div>
        
      </section>
      <!-- akhir contact -->

      
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