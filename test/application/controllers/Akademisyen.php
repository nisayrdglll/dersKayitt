<?php
class Akademisyen extends CI_Controller{


    public function akademisyenDersler()
    {
      $this->load->model('vt');
      $sonuc['list']=$this->vt->DersleriGetir();
     if($sonuc)
     {
        $this->load->view('akademisyen/akademisyenDersler',$sonuc);
     }	
    }
	
	 public function get_ogrenciler()
   {
      $draw=intval($this->input->post("draw"));
      $start=intval($this->input->post("start"));
      $length=intval($this->input->post("length"));
      
	  $this->load->model('vt');
      $query=$this->db->get("ogrenciler");
      $data= [];
      foreach($query->result() as $r) {
           $data[] =array(
                $r->ogrenciAdi,
                $r->ogrenciSoyad,
                $r->ogrenciNo,
				$r->ogrenciSifre,
				$r->donem,
           );
      }

      $result=array(
               "draw"=>$draw,
                 "recordsTotal"=>$query->num_rows(),
                 "recordsFiltered"=>$query->num_rows(),
                 "data"=>$data
            );
      echo json_encode($result);
      exit();
   }
	 public function get_dersler()
   {
	  
      $draw=intval($this->input->post("draw"));
      $start=intval($this->input->post("start"));
      $length=intval($this->input->post("length"));
      
	  $this->load->model('vt');
      $query=$this->db->get("dersler");
      $data= [];
      foreach($query->result() as $r) {
           $data[] =array(
                $r->dersKodu,
                $r->dersAdi,
                $r->dersSaati,
				$r->dersKredisi,
				$r->derslik,
				$r->ogretimUyesi,
				$r->dersGunu,
				$r->donemDers,
           );
      }

      $result=array(
               "draw"=>$draw,
                 "recordsTotal"=>$query->num_rows(),
                 "recordsFiltered"=>$query->num_rows(),
                 "data"=>$data
            );
      echo json_encode($result);
      exit();
   }

    public function akademisyenOgrenciler()
    {
      $this->load->model('vt');
      $sonuc['list']=$this->vt->ogrencileriGetir();
      if($sonuc)
      {
          $this->load->view('akademisyen/akademisyenOgrenciler',$sonuc);
      }	
    }
    
	
	 public function getOgrenciler()
    {
        $postData = $this->input->get();
        $this->load->model('vt');
       $data = $this->vt->getOgrenciler($postData);

       echo json_encode($data);
    }
	
	 public function getDersler()
    {
	   $postData = $this->input->get();
       $this->load->model('vt');
       $data = $this->vt->getDersler($postData);
       echo json_encode($data);
    }


    public function akademisyenDersEkle()
    {
	  $this->load->view('akademisyen/akademisyenDersEkle');
	  $dersKodu =$this->input->post("dersKodu");
	  $dersAdi =$this->input->post("dersAdi");
	  $dersSaati =$this->input->post("dersSaati");
	  $dersKredisi =$this->input->post("dersKredisi");
	  $derslik =$this->input->post("derslik");
	  $ogretimUyesi =$this->input->post("ogretimUyesi");
	  $dersGunu =$this->input->post("dersGunu");
	  $donemDers =$this->input->post("dersDonem");
  
    $data=array(
	  'dersKodu'=>$dersKodu,
	  'dersAdi'=>$dersAdi,
	  'dersSaati'=>$dersSaati,
	  'dersKredisi'=>$dersKredisi,
	  'derslik'=>$derslik,
	  'ogretimUyesi'=>$ogretimUyesi,
	  'dersGunu'=>$dersGunu,
	  'donemDers'=>$donemDers,
    );
     if($dersKodu!=null&&$dersAdi!=null&&$dersSaati!=null&&$dersKredisi!=null&&$derslik!=null&&$ogretimUyesi!=null&&$dersGunu!=null)
     {
        
	       $this->load->model('vt');
         $kayitliDersVarMi=$this->vt->kayitliDersVarmi($dersKodu);
         if($kayitliDersVarMi){        
            echo '<script language="javascript" type="text/javascript"> alert("Bu ders kodunda kayıtlı ders eklenemez!!")</script>';     
         }
         
          else{
          $sonuc=$this->vt->dersEkle('dersler',$data);
          if($sonuc>0)
          {
            echo '<script language="javascript" type="text/javascript"> alert("ders eklendii.")</script>';
          }	
         }
     }
    }




   public function ogrenciEkle()
   {
    
     $this->load->view('akademisyen/akademisyenOgrenciEkle');
     $ogrenciAdi =$this->input->post("ogrenciAdi");
     $ogrenciSoyadi =$this->input->post("ogrenciSoyadi");
     $ogrenciNO =$this->input->post("ogrenciNO");
     $ogrenciSifre =$this->input->post("ogrenciSifre");
     $ogrenciDonem =$this->input->post("ogrenciDonem");
    if($ogrenciSifre!=null)
    {
       $data=array(
       'ogrenciAdi'=>$ogrenciAdi,
       'ogrenciSoyad'=>$ogrenciSoyadi,
       'ogrenciNo'=>$ogrenciNO,
       'ogrenciSifre'=>md5($ogrenciSifre),
       'donem'=>$ogrenciDonem,
     );
    }
     if($ogrenciAdi!=null&&$ogrenciSoyadi!=null&&$ogrenciNO!=null&&$ogrenciSifre!=null&&$ogrenciDonem!=null)
     {
        $this->load->model('vt');
        $kayitliOgrenciVarmi=$this->vt->kayitliOgrenciVarMi($ogrenciNO);
        if($kayitliOgrenciVarmi)
        {
          echo '<script language="javascript" type="text/javascript"> alert("Bu numaralı öğrenci sistemde zaten kayıtlı!!")</script>';           
        }
        else{                    
          $sonuc=$this->vt->ogrenciEkle('ogrenciler',$data);
          if($sonuc>0)
          {
            echo '<script language="javascript" type="text/javascript"> alert("Öğrenci eklendii.")</script>';
          }	
          else{echo "aa";}
        }
     }

    }
    public function ogrenciSecilenDersleriGetir(){
		$this->load->model('vt');
	    $sonuc['list']=$this->vt->ogrencisecilenDersleriGetir();
	    if($sonuc)
	    {
	      $this->load->view('akademisyen/onaylanacakDersler',$sonuc);
	    }	
       
       else{
	   $this->load->view('akademisyen/onaylanacakDersler');
	   }
	}
		


    public function akademisyenDersleriOnaylama($ogrenciId,$dersId)
    {
         
		  if($dersId!=null)
		  {
			   $data=array(
			   'ogrenci_id'=>$ogrenciId,
               'dersid'=>$dersId,
               
             );
		    $this->load->model('vt'); 
		    $sonuc=$this->vt->akademisyenDersleriOnaylama('ogrencikayitders',$data);
		    if($sonuc>0)
		    {
              echo '<script language="javascript" type="text/javascript"> alert("Öğrencinin seçtiği ders onaylandı.")</script>';
			  $silme=$this->vt->ogrencininOnayladigiDersiSil($ogrenciId);
			  if($silme){
			  $this->load->view('akademisyen/akademisyenSayfasi');}
		    }	
		  }
		  else{
			   echo '<script language="javascript" type="text/javascript"> alert("Seçilen ders onaylanamadı!!!!.")</script>';
			    $this->load->view('akademisyen/akademisyenSayfasi');
		  }
      
    }





}


?>