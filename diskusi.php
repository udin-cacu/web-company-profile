<?php 
include 'db.php';
 ?>
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

      <title>Diskusi</title> 


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
          <div class="row">          
            <div class="col m12 s12">
              <form method="post">
              <div class="card-panel">
                <h5>Form Diskusi</h5>
                <hr>
                <br>
                <div class="input-field">
                  <input type="text" name="nama" id="nama" required class="validate">
                  <label for="nama">Your Name</label>
                </div>
                <div class="input-field">
                  <input type="text" name="telpon" id="telpon" required class="validate" >
                  <label for="telpon">Telpon</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email" required class="validate" >
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <textarea name="pesan" id="pesan" required class="materialize-textarea validate"></textarea>
                  <label for="pesan">Message</label>
                </div>
                <button type="submit" name="kirim" class="btn blue darken-3">Submit</button>
                <button type="reset" class="btn orange darken-2">Clear</button>
                <button class="btn orange darken-2"><a href="contact.php">Back to Contact</a></button>
              </div>
            </div>
            </form>
            <?php 
            if (isset($_POST['kirim'])){
             $nama = $_POST ['nama'];
             $telpon = $_POST ['telpon'];
             $email = $_POST ['email'];
             $pesan = $_POST ['pesan'];

            $insert = mysqli_query($conn, "INSERT INTO tb_diskusi VALUES (
              NULL,
              '$nama',
              '$telpon',
              '$email',
              '$pesan')");
            if ($insert){
              echo "Berhasil";;
            }else{
              echo "<br><br>Gagal kirim";
            }
            }
            ?>
          </div>
        </div>
        <div class="container" id="submit">
          <div class="row">
            <div class="col m12 s12">
              <h3 class="text-center">Forum Diskusi</h3>
                  <table class="table" id="databel" border="0">
                    <thead>
                      <?php 
                      $query = mysqli_query($conn, "SELECT * FROM tb_diskusi");
                      while ($row = mysqli_fetch_array($query)) {
                        # code...
                       ?>
                      <tr>
                        <td scope="col"><?= $row['nama']; ?></td>
                        <td scope="col"><?= $row['telpon']; ?></td>
                        <td scope="col"><?= $row['email']; ?></td>
                        <td scope="col"><?= $row['pesan']; ?></td>
                        <td scope="col">
                          <a href="hapus.php?id=<?= $row['id']; ?>">Delete</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </thead>
                  </table>       
            </div>
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