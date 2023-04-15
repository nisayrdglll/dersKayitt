<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giris extends CI_Controller {

	public function index()
	{
		$this->load->view('giris');
	}
	public function login()
    {
		$girisTuru =$this->input->post("tur");
		$kullaniciAdi =$this->input->post("kullaniciAdi");
        $sifre =$this->input->post("sifre");
		$sifreliVeri	= md5($sifre);
		if($girisTuru=="1")
		{
			$this->load->model('vt');
			$sonuc=$this->vt->ogrenciUyeVarMi($kullaniciAdi,$sifreliVeri);
			if($sonuc)
			{ 
				$this->load->library('session');
				$this->session->userdata('durum',true);
				$this->session->set_userdata('user',$sonuc->ogrenciID);
				$this->load->view('ogrenci/ogrenciSayfasi');
			}
			else{
				 echo '<script language="javascript" type="text/javascript"> alert("Kullanici adı veya şifre hatalı")</script>';
				$this->load->view('giris');
			}

		 }else{
			$this->load->model('vt');
            $sonuc=$this->vt->adminUyeVarMi($kullaniciAdi,$sifreliVeri);
            if($sonuc)
            { 
	           $this->load->library('session');
	           $this->session->userdata('durum',true);
	           $this->session->set_userdata('user',$sonuc->akademisyenSicilNo);
	           $this->load->view('akademisyen/akademisyenSayfasi');
            }
			else{
				 echo '<script language="javascript" type="text/javascript"> alert("Kullanici adı veya şifre hatalı")</script>';
				$this->load->view('giris');
			}

		}		        	    	    														
    }

     
     
     
     
     

}

?>
