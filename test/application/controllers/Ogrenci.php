<?php
class Ogrenci extends CI_Controller{

    public function ogrencininSectigiDersleriGetir()
    {
      $this->load->model('vt');
      $sonuc['list']=$this->vt->secilenDersleriGetir();
      if($sonuc)
     {
        $this->load->view('akademisyen/onaylanacakDersler',$sonuc);
     }	
    }

    public function dersleriGetir()
    {
       $donem =$this->input->post("donem");
       if($donem!=null)
       {
	    $this->load->model('vt');
	    $sonuc['list']=$this->vt->donemDersleriGetir($donem);
	    if($sonuc)
	    {
	      $this->load->view('ogrenci/ogrenciDersler',$sonuc);
	    }	
       }
       else{
	   $this->load->view('ogrenci/ogrenciSayfasi');
	   }

    }

    public function secilenDersiEkle($dersId)
    {
      $ogrenciID =$this->session->userdata('user');
      $data=array(
      'dersler_id'=>$dersId,
      'ogrenci_id'=>$ogrenciID,
      );
     if($dersId!=null&&$ogrenciID!=null)
     {
        $this->load->model('vt');
        $sonuc=$this->vt->secilenDersiEkle('secilendersler',$data);
        if($sonuc>0)
        {
	        echo '<script language="javascript" type="text/javascript"> alert("Ders seçildi. Danışmandan onay bekleniyor!!")</script>';
			$this->load->view('ogrenci/ogrenciSayfasi');
        } 
     }
    }



   public function onaylananDersler()
   {
	   $ogrenciID =$this->session->userdata('user');
     $this->load->model('vt');
     $sonuc['list']=$this->vt->onaylananDersleriGetir($ogrenciID);
     if($sonuc)
     {
       $this->load->view('ogrenci/onaylananDersler',$sonuc);
     }	
   }

}


?>