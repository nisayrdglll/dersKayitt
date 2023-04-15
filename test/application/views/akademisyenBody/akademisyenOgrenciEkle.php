<div class="top_container ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="">
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
     <a class="nav-link" href="<?php echo base_url('akademisyen/akademisyenDersler');?>"> Ders Listesi </a>
</li>
<li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url('akademisyen/akademisyenOgrenciler');?>"> Öğrenci Listesi </a>
  </li>
<li class="nav-item ">
  <a class="nav-link" href="<?php echo base_url('akademisyen/ogrenciSecilenDersleriGetir');?>"> Dersleri Onayla </a>
</li>
  <li class="nav-item ">
    <a class="nav-link" href="<?php echo base_url('akademisyen/akademisyenDersEkle');?>"> Ders Ekle </a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="<?php echo base_url('akademisyen/ogrenciEkle');?>">Öğrenci Ekle</a>
  </li>
   <li class="nav-item ">
     <a class="nav-link" href="<?php echo base_url('giris/index');?>"> Çıkış Yap </a>
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
              Öğrenci Ekleme
            </h2>
          </div>
<form id="ogrenciEklemeFormu" method="POST" action="<?php echo base_url('akademisyen/ogrenciEkle');?>">
  <div class="contact_form-container">
    <div>
      <div>
        <input type="text" placeholder="Öğrenci Adı" name="ogrenciAdi" value="<?=@$ogrenci['ogrenciAdi'];?>" id="ogrenciAdi">
      </div>
      <div>
       <input type="text" placeholder="Öğrenci Soyadı" name="ogrenciSoyadi" id="ogrenciSoyadi" value="<?=@$ogrenci['ogrenciSoyad'];?>">
      </div>
      <div>
           <input type="text" placeholder="Öğrenci Nosu" name="ogrenciNO" id="ogrenciNO" value="<?=@$ogrenci['ogrenciNO'];?>">
       </div>
       <div>
         <input type="text" placeholder="Öğrenci Şifresi" name="ogrenciSifre" id="ogrenciSifre" value="<?=@$ogrenci['ogrenciSifre'];?>">
       </div>
       <div>
         <input type="text" placeholder="Öğrenci Dönemi" name="ogrenciDonem" id="ogrenciDonem" value="<?=@$ogrenci['ogrenciDonem'];?>">
         </div>
      <div class="mt-5">
      <input type="submit" value="ogrenciEkle" name="action" id="dersKayit" onClick="ekle(this.value)">    
      </div>
    </div>
  </div>
</form>                                                                                                                          
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