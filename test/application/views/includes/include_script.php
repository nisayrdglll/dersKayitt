<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script>document.getElementById("dersEklemeFormu").reset();</script>
<script>document.getElementById("ogrenciEklemeFormu").reset();</script>
<script src="<?= base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/js/jquery-3.5.1.js')?>"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- jquery with datatable -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 

<script>
$(document).ready(function () {
	 //$.fn.dataTable.ext.errorMode = "throw";
  $('#ogrenciTablosu').DataTable({
	  // "aoColumnDefs": [{ 'bSortable': false, 'aTargets': [5] }],
             "bSort": true,
             //"scrollY": 160,
          //   "scrollX": true,
     //bRetrieve: true,
     lengthMenu: [
      [5, 10, 15, -1],
            [5, 10, 15, 'hepsi'],
     ],
	  buttons: [
                 'excelHtml5'
             ],
	  
   'ajax': {
             url:'<?=base_url()?>akademisyen/getOgrenciler',
			   dataSrc: 'data',
			   type :'POST'
               
            
          },
        
  });
}); 
    
 </script>

<script>
$(document).ready(function () {
  $('#myTable').DataTable({
	    'processing': true,
        'serverSide': true,
        'serverMethod': 'get',
     lengthMenu: [
      [5, 10, 15, -1],
            [5, 10, 15, 'hepsi'],
     ],
	  
   'ajax': {
             url:'<?=base_url()?>akademisyen/getDersler',
			 dataSrc: 'data',		 
          },
		     'columns':[
             { data: 'dersKodu' },
             { data: 'dersAdi' },
             { data: 'dersSaati' },
             { data: 'dersKredisi' },
             { data: 'derslik' },
			 { data: 'ogretimUyesi' },
			 { data: 'dersGunu' },
			 { data: 'donemDers' },
          ]
		   
       
        
  });
}); 
    
 </script>