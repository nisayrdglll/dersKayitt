<div class="top_container ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Ders Kayıt
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Ana Sayfa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.php"> Hakkımızda </a>
                </li>
 
 
  
                <li class="nav-item">
                  <a class="nav-link" href="giris.php">Giriş Yap</a>
                </li>

              </ul>
            </div>
        </nav>
      </div>
    </header>

  </div>
  <!-- end header section -->



  <!-- contact section -->

  <section class="contact_section ">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center d-md-block">
            <h2>
              Giriş Yap
            </h2>
          </div>
          <form action="<?php echo base_url('giris/login');?>" method="POST">
            <div class="contact_form-container">
              <div>
              <div>
                  <select name="tur">
                    <option value="1">Öğrenci
                    <option value="2">Akademisyen
                  </select>
               </div>
                <div>
                  <input type="text" placeholder="Kullanıcı Adı" name="kullaniciAdi">
                </div>
                <div>
                  <input type="password" placeholder="Şifre" name="sifre">
                </div>
                
                <div class="mt-5">
                  
                <input type="submit" value="Giriş Yap" name="giris">
                  
                </div>
              </div>

            </div>

          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="<?php echo base_url('assets'); ?>/images/students.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        Ders Kayıt
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        
    
        <div class="col-md-3">
          <h5>
           Ders Kayıt Sistemi
          </h5>
          <p>
            Hoş geldiniz
          </p>
        </div>
        <div class="col-md-3">

          <div class="subscribe_container">
            <h5>
              Newsletter
            </h5>
            <div class="form_container">
              <form action="">
                <input type="email" placeholder="Enter your email">
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="social_container">

        <div class="social-box">
          <a href="">
            <img src="<?php echo base_url('assets'); ?>/images/fb.png" alt="">
          </a>

          <a href="">
            <img src="<?php echo base_url('assets'); ?>/images/twitter.png" alt="">
          </a>
          <a href="">
            <img src="<?php echo base_url('assets'); ?>/images/linkedin.png" alt="">
          </a>
          <a href="">
            <img src="<?php echo base_url('assets'); ?>/images/instagram.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>