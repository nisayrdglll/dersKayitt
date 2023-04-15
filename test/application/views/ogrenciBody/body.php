<div class="top_container ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
             Dersler
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('ogrenci/dersleriGetir');?>"> Ders Seçimi </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('ogrenci/onaylananDersler');?>">Onaylanan Dersler </a>
              </li>
             <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('giris/index');?>">Çıkış Yap </a>
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
              Ders Seç
            </h2>
          </div>
          <?php echo "Hoşgeldinn"."  ". $this->session->userdata('user')." "." numararalı öğrencimiz";?>

   <form action="<?=base_url('ogrenci/dersleriGetir');?>" method="post">   
   <div class="row" style="">
       <div class="">
           <label>Dönem Seçiniz</label>
           <select class="" name="donem" id="donem">
               <option selected>Seçmek için tıklayınız</option>
               <option value="1">Dönem 1</option>
               <option value="2">Dönem 2</option>
               <option value="3">Dönem 3</option>
               <option value="4">Dönem 4</option>
               <option value="5">Dönem 5</option>
               <option value="6">Dönem 6</option>
               <option value="7">Dönem 7</option>
               <option value="8">Dönem 8</option>
           </select>
       </div>
       <div class="">      
           <br>
           <input style="" type="submit" class="btn btn-info" value="Dersleri getir" name="send">
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