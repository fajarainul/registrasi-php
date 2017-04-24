<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Form Perizinan Online Ternate Kota
		</title>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	</head>

	<body>
		<div class="container">
			<form action="#" class="crud" id="form_pendaftaran" enctype="multipart/form-data" method="post" accept-charset="utf-8">
			
				<h2>Pendaftaran Online</h2>
				<h3>Data Pemohon</h3>
				<div class="form-group">
			    <label for="jenis-identitas">Jenis Identitas</label>
			    <select class="form-control" name="jenis_identitas" required="required">
			    	<option value="KTP"  selected="selected">KTP</option>
			    	<option value="SIM">SIM</option>
			    	<option value="PASSPORT">PASSPORT</option>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="id-pemohon">ID Pemohon )*</label>
			    <input type="text" name="id_pemohon" class="form-control" id="id-pemohon" placeholder="ID Pemohon" required="required" >
			  </div>
			  
			  <div class="form-group">
			    <label for="id-pemohon">Nama Pemohon )*</label>
			    <input type="text" name="nama_pemohon" class="form-control" id="id-pemohon" placeholder="Nama Pemohon" required="required" >
			  </div>

			  <div class="form-group">
			    <label for="telp-pemohon">Telp Pemohon )*</label>
			    <input type="text" name="telp_pemohon" class="form-control" id="telp-pemohon" placeholder="Telp Pemohon" required="required" >
			  </div>

			  <div class="form-group">
			    <label for="alamat-pemohon">Alamat Pemohon )*</label>
			    <textarea name="alamat_pemohon" class="form-control" id="alamat-pemohon" placeholder="Alamat Pemohon" required="required"  style="resize: none;"></textarea>	    
			  </div>

			  <div class="form-group">
			    <label for="provinsi-pemohon">Provinsi Pemohon</label>
			    <select class="form-control" name="provinsi_pemohon" required="required" id="provinsi-pemohon">
			    	<option value=""  disabled selected="selected">Pilih Provinsi</option>	    	
			    </select>
			    <input type="hidden" name="provinsi_pemohon_text" value="" />
			  </div>

			  <div class="form-group">
			    <label for="kabupaten-pemohon">Kabupaten Pemohon</label>
			    <select class="form-control pemohon" name="kabupaten_pemohon" required="required" id="kabupaten-pemohon">
			    	<option value=""  disabled selected="selected">Pilih Kabupaten</option>	    	
			    </select>
			    <input type="hidden" name="kabupaten_pemohon_text" value="" />
			  </div>

			  <div class="form-group">
			    <label for="kecamatan-pemohon">Kecamatan Pemohon</label>
			    <select class="form-control pemohon" name="kecamatan_pemohon" required="required" id="kecamatan-pemohon">
			    	<option value=""  disabled selected="selected">Pilih Kecamatan</option>	    	
			    </select>
			    <input type="hidden" name="kecamatan_pemohon_text" value="" />
			  </div>

			  <div class="form-group">
			    <label for="kelurahan-pemohon">Kelurahan Pemohon</label>
			    <select class="form-control pemohon" name="kelurahan_pemohon" required="required" id="kelurahan-pemohon">
			    	<option value=""  disabled selected="selected">Pilih kelurahan</option>	    	
			    </select>
			    <input type="hidden" name="kelurahan_pemohon_text" value="" />
			  </div>

			  <h3>Data Perusahaan</h3>

			  <div class="form-group">
			    <label for="npwp-perusahaaan">NPWP perusahaan</label>
			    <input type="text" name="npwp_perusahaan" class="form-control" id="npwp-perusahaaan" placeholder="NPWP Perusahaan" >
			  </div>

			  <div class="form-group">
			    <label for="no-register-perusahaaan">No Register perusahaan</label>
			    <input type="text" name="no_register_perusahaan" class="form-control" id="no-register-perusahaaan" placeholder="No Register Perusahaan" >
			  </div>

			  <div class="form-group">
			    <label for="nama-perusahaaan">Nama Perusahaan</label>
			    <input type="text" name="nama_perusahaan" class="form-control" id="nama-perusahaaan" placeholder="Nama Perusahaan" >
			  </div>

			  <div class="form-group">
			    <label for="telp-perusahaan">Telp perusahaan</label>
			    <input type="text" name="telepon_perusahaan" class="form-control" id="telp-perusahaan" placeholder="Telp perusahaan" >
			  </div>

			  <div class="form-group">
			    <label for="alamat-perusahaan">Alamat perusahaan</label>
			    <textarea name="alamat_perusahaan" class="form-control" id="alamat-perusahaan" placeholder="Alamat perusahaan"  style="resize: none;"></textarea>	    
			  </div>

			  <div class="form-group">
			    <label for="provinsi-perusahaan">Provinsi Perusahaan</label>
			    <select class="form-control" name="provinsi_perusahaan" id="provinsi-perusahaan">
			    	<option value=""  disabled selected="selected">Pilih Provinsi</option>	    	
			    </select>
			    <input type="hidden" name="provinsi_perusahaan_text" value="" />
			  </div>

			  <div class="form-group">
			    <label for="kabupaten-perusahaan">Kabupaten Perusahaan</label>
			    <select class="form-control perusahaan" name="kabupaten_perusahaan" id="kabupaten-perusahaan">
			    	<option value=""  disabled selected="selected">Pilih Kabupaten</option>	    	
			    </select>
			    <input type="hidden" name="kabupaten_perusahaan_text" value="" />
			  </div>

			  <div class="form-group">
			    <label for="kecamatan-perusahaan">Kecamatan Perusahaan</label>
			    <select class="form-control perusahaan" name="kecamatan_perusahaan" id="kecamatan-perusahaan">
			    	<option value=""  disabled selected="selected">Pilih Kecamatan</option>	    	
			    </select>
			    <input type="hidden" name="kecamatan_perusahaan_text" value="" />
			  </div>

			  <div class="form-group">
			    <label for="kelurahan-perusahaan">Kelurahan Perusahaan</label>
			    <select class="form-control perusahaan" name="kelurahan_perusahaan" id="kelurahan-perusahaan">
			    	<option value=""  disabled selected="selected">Pilih kelurahan</option>	    	
			    </select>
			    <input type="hidden" name="kelurahan_perusahaan_text" value="" />
			  </div>
				

				<h3>Data Perizinan</h3>
				<div class="form-group">
			    <label for="jenis-izin">Jenis Izin</label>
			    <select class="form-control" name="jenis_izin" id="jenis-izin" required="required">
			    	<option value=""  disabled selected="selected">Pilih Izin</option>	    	
			    </select>
			    <input type="hidden" name="nama_perizinan" value="" />
			  </div>

			  <div class="form-group">
			    <label for="unit-kerja">Daerah</label>
			    <select class="form-control" name="unit_kerja_id" id="unit-kerja" required="required">
			    	<option value=""  disabled selected="selected">Pilih Unit Kerja</option>	    	
			    </select>
			    <input type="hidden" name="unit_kerja_text" value="" />
			  </div>

			  <div class="form-group">
			    <label for="lampiran">Lampiran</label>
			    <input type="file" id="lampiran" name="lampiran" required="required" class="form-control">		    
			  </div>

			  <div class="col-xs-6" id="question" style="font-size: 20px; background: #1289dd; margin-bottom: 10px;color: white">
			  	
			  	20 + 20 =

			  </div>
			  <div class="col-xs-1" style="margin-bottom: 10px;">
			  	
			  	<span class="glyphicon glyphicon-refresh" id="refresh"></span>

			  </div>
			  <div class="col-xs-3" style="margin-bottom: 10px;">
			  	
			  	<input type="number" id="captcha" name="captcha" required="required" class="form-control">	

			  </div>

			  <div class="form-group">
			    <button name="btn_submit" id="btn_submit" onclick="return false;" type="submit" value="true" class="btn btn-primary" style="width: 100%">Simpan</button>		    
			  </div>

			

		</form>
		</div>

		<!-- modal -->
		<div class="modal fade" tabindex="-1" role="dialog" id="modalLoading">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      
		      <div class="modal-body">
		        <p>Memuat, harao tunggu</p>
		      </div>

		     
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</body>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
		var captchaResult;
		
		$(function () {
			//initialize province
			var url_province = 'get_provinsi.php';
			var data_province = {};
			var result_province = submitAjax(url_province, data_province, 'POST', 'json');
			
			if(result_province.success){
					$('#provinsi-pemohon').html('<option value=""  disabled selected="selected">Pilih provinsi</option>	    	');
					$('#provinsi-perusahaan').html('<option value=""  disabled selected="selected">Pilih provinsi</option>	    	');

				$.each(result_province.result, function(i, obj) {
					
					$('#provinsi-pemohon').append('<option value="'+obj.id_propinsi+'">'+obj.nama_propinsi+'</option>');
					$('#provinsi-perusahaan').append('<option value="'+obj.id_propinsi+'">'+obj.nama_propinsi+'</option>');
				
				});

			}


			//onclick province pemohon, reset kabupaten, kecamatan, kelurahan
			$('#provinsi-pemohon').change(function(){
				var selectedID = $("#provinsi-pemohon").val();
				var selectedText = $("#provinsi-pemohon option:selected").text();

				//reset first
				$('.pemohon').val("");
				//set selected text to hidden form				
				$('input[type="hidden"][name="provinsi_pemohon_text"]').val(selectedText);

				var url = 'get_kabupaten.php';
				var data = {id:selectedID};
				var result = submitAjax(url, data, 'GET', 'json');

				if(result.success){

					$('#kabupaten-pemohon').html('<option value=""  disabled selected="selected">Pilih Kabupaten</option>	    	');
					$.each(result.result, function(i, obj) {
						
						$('#kabupaten-pemohon').append('<option value="'+obj.id_kabupaten+'">'+obj.nama_kabupaten+'</option>');
						
					});

				}

			});

			//onclick kabupaten pemohon, kecamatan, kelurahan
			$('#kabupaten-pemohon').change(function(){
				var selectedID = $("#kabupaten-pemohon").val();
				var selectedText = $("#kabupaten-pemohon option:selected").text();
				
				//reset first
				$('#kecamatan-pemohon').val("");
				$('#kelurahan-pemohon').val("");
				//set selected text to hidden form				
				$('input[type="hidden"][name="kabupaten_pemohon_text"]').val(selectedText);

				var url = 'get_kecamatan.php';
				var data = {id:selectedID};
				var result = submitAjax(url, data, 'GET', 'json');

				if(result.success){

					$('#kecamatan-pemohon').html('<option value=""  disabled selected="selected">Pilih Kecamatan</option>	    	');
					$.each(result.result, function(i, obj) {
						
						$('#kecamatan-pemohon').append('<option value="'+obj.id_kecamatan+'">'+obj.nama_kecamatan+'</option>');
						
					});

				}

			});


			//onclick kecamatan pemohon, reset kelurahan
			$('#kecamatan-pemohon').change(function(){
				var selectedID = $("#kecamatan-pemohon").val();
				var selectedText = $("#kecamatan-pemohon option:selected").text();
				
				//reset first
				$('#kelurahan-pemohon').val("");
				//set selected text to hidden form				
				$('input[type="hidden"][name="kecamatan_pemohon_text"]').val(selectedText);

				var url = 'get_kelurahan.php';
				var data = {id:selectedID};
				var result = submitAjax(url, data, 'GET', 'json');

				if(result.success){

					$('#kelurahan-pemohon').html('<option value=""  disabled selected="selected">Pilih Kelurahan</option>	    	');
					$.each(result.result, function(i, obj) {
						
						$('#kelurahan-pemohon').append('<option value="'+obj.id_kelurahan+'">'+obj.nama_kelurahan+'</option>');
						
					});

				}

			});

			//set hidden value onclick kelurahan pemohon
			$('#kelurahan-pemohon').change(function(){
				
				var selectedText = $("#kelurahan-pemohon option:selected").text();

				//set selected text to hidden form				
				$('input[type="hidden"][name="kelurahan_pemohon_text"]').val(selectedText);

			});





			//onclick province perusahaan, reset kabupaten, kecamatan, kelurahan
			$('#provinsi-perusahaan').change(function(){
				var selectedID = $("#provinsi-perusahaan").val();
				var selectedText = $("#provinsi-perusahaan option:selected").text();
				
				//reset first
				$('.perusahaan').val("");
				//set selected text to hidden form				
				$('input[type="hidden"][name="provinsi_perusahaan_text"]').val(selectedText);

				var url = 'get_kabupaten.php';
				var data = {id:selectedID};
				var result = submitAjax(url, data, 'GET', 'json');

				if(result.success){

					$('#kabupaten-perusahaan').html('<option value=""  disabled selected="selected">Pilih Kabupaten</option>	    	');
					$.each(result.result, function(i, obj) {
						
						$('#kabupaten-perusahaan').append('<option value="'+obj.id_kabupaten+'">'+obj.nama_kabupaten+'</option>');
						
					});

				}

			});

			//onclick kabupaten perusahaan, kecamatan, kelurahan
			$('#kabupaten-perusahaan').change(function(){
				var selectedID = $("#kabupaten-perusahaan").val();
				var selectedText = $("#kabupaten-perusahaan option:selected").text();
				
				//reset first
				$('#kecamatan-perusahaan').val("");
				$('#kelurahan-perusahaan').val("");
				//set selected text to hidden form				
				$('input[type="hidden"][name="kabupaten_perusahaan_text"]').val(selectedText);

				var url = 'get_kecamatan.php';
				var data = {id:selectedID};
				var result = submitAjax(url, data, 'GET', 'json');

				if(result.success){

					$('#kecamatan-perusahaan').html('<option value=""  disabled selected="selected">Pilih Kecamatan</option>	    	');
					$.each(result.result, function(i, obj) {
						
						$('#kecamatan-perusahaan').append('<option value="'+obj.id_kecamatan+'">'+obj.nama_kecamatan+'</option>');
						
					});

				}

			});


			//onclick kecamatan perusahaan, reset kelurahan
			$('#kecamatan-perusahaan').change(function(){
				var selectedID = $("#kecamatan-perusahaan").val();
				var selectedText = $("#kecamatan-perusahaan option:selected").text();
				
				//reset first
				$('#kelurahan-perusahaan').val("");
				//set selected text to hidden form				
				$('input[type="hidden"][name="kecamatan_perusahaan_text"]').val(selectedText);

				var url = 'get_kelurahan.php';
				var data = {id:selectedID};
				var result = submitAjax(url, data, 'GET', 'json');

				if(result.success){

					$('#kelurahan-perusahaan').html('<option value=""  disabled selected="selected">Pilih Kelurahan</option>	    	');
					$.each(result.result, function(i, obj) {
						
						$('#kelurahan-perusahaan').append('<option value="'+obj.id_kelurahan+'">'+obj.nama_kelurahan+'</option>');
						
					});

				}

			});

			//set hidden value onclick kelurahan pemohon
			$('#kelurahan-perusahaan').change(function(){
				
				var selectedText = $("#kelurahan-perusahaan option:selected").text();

				//set selected text to hidden form				
				$('input[type="hidden"][name="kelurahan_perusahaan_text"]').val(selectedText);

			});


			//load list izin when reload
			var url = 'get_jenis_izin.php';
			var data = {};
			var result = submitAjax(url, data, 'GET', 'json');
			
			if(result.success){
					$('#jenis-izin').html('<option value=""  disabled selected="selected">Pilih Izin</option>	    	');
				
				$.each(result.result, function(i, obj) {
					
					$('#jenis-izin').append('<option value="'+obj.id_perizinan+'">'+obj.nama_perizinan+'</option>');
						
				});

			}


			//onclick jenis izin, load unit kerja
			$('#jenis-izin').change(function(){
				var selectedID = $("#jenis-izin").val();
				var selectedText = $("#jenis-izin option:selected").text();
				
				//reset first
				$('#unit-kerja').val("");
				//set selected text to hidden form				
				$('input[type="hidden"][name="nama_perizinan"]').val(selectedText);

				var url = 'get_unit_kerja.php';
				var data = {id:selectedID};
				var result = submitAjax(url, data, 'GET', 'json');

				if(result.success){

					$('#unit-kerja').html('<option value=""  disabled selected="selected">Pilih Unit Kerja</option>	    	');
					$.each(result.result, function(i, obj) {
						
						$('#unit-kerja').append('<option value="'+obj.id_unit_kerja+'">'+obj.nama_unit_kerja+'</option>');
						
					});

				}

			});


			//on click jenis unit kerja, set hidden value
			$('#unit-kerja').change(function(){
				var selectedID = $("#unit-kerja").val();
				var selectedText = $("#unit-kerja option:selected").text();
				
				//set selected text to hidden form				
				$('input[type="hidden"][name="unit_kerja_text"]').val(selectedText);

			});

			//load captcha first
			captchaResult =	generateCaptcha();

			$('#btn_submit').click(function(){
				

				var captchaAnswer = $('#captcha').val();

				if(captchaAnswer==captchaResult){
					
					return true;
				}else{
					alert("captcha salah!");
					captchaResult = generateCaptcha();
					$('#captcha').val("");
					return false;
				}
				

			});

			//refresh captcha
			$('#refresh').click(function(){
				captchaResult = generateCaptcha();

			});
			
		})


	</script>

	<script type="text/javascript">
		
		function submitAjax(url, data, method, type){
     		if(url != 'get_jenis_izin.php'){
     			$('#modalLoading').modal('show');	
     		}
     		
			
      $.ajax({
          url       :  url,
       
          method    : method,
          data      : data,
          dataType  : type,
          async			: false,
          success   : function(result){

              resultRequest =  result;
              console.log(result);
            },
          error     : function(x, y, z){
               console.log(x);
	            console.log(z);
	            console.log(y);   
	            resultRequest = {success:false, error:true, message:'an error ocured when request using ajax'};   
          },
          complete  : function(){
						
			     		if(url != 'get_jenis_izin.php'){
			     			$('#modalLoading').modal('hide');	
			     		}
			   
          }
      });  

      return resultRequest;

    }

    function generateCaptcha(){
    	var n1 = Math.round(Math.random() * 10 + 1);
	    var n2 = Math.round(Math.random() * 10 + 1);

	    $('#question').html(n1+" + "+n2+" = ");
	    
	    return n1+n2;
    }

	</script>
</html>