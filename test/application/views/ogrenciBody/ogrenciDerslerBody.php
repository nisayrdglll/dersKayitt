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
          <table class="container">
         <thead>
             <tr>
                 <th>Gün</th>
                 <th>Ders saati</th>
                 <th>Ders Kodu</th>
                 <th>Ders Adı</th>
                 <th>Ders Kredisi</th>
                 <th>Derslik</th>
                 <th>Öğretim elemanı</th>
                 <th>Dersi Ekle</th>
             </tr>
         </thead>
         <tbody>
<?php foreach($list as $sonucGetir){ ?>
<tr>
<td>
<?php echo $sonucGetir->dersGunu;?>
</td>
<td>
<?php echo $sonucGetir->dersSaati;?>
</td>
<td>
<?php 
echo $sonucGetir->dersKodu;
?>
</td>
<td>
<?php echo $sonucGetir->dersAdi;?>
</td>
<td>
<?php echo $sonucGetir->dersKredisi;?>
</td>
<td>
<?php echo $sonucGetir->derslik;?>
</td>
<td>
<?php echo $sonucGetir->ogretimUyesi;?>
</td>
<td>
<?php echo $sonucGetir->dersGunu; ?>
</td>
<td>
<?php echo $sonucGetir->donemDers; ?>
</td>
<td>
<a href="<?= base_url('ogrenci/secilenDersiEkle'); ?><?=$sonucGetir['dersID']?>">Dersi Ekle</a>
</td>
</tr>
<?php } ?>



          </tbody>
                  
        </table>
 


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