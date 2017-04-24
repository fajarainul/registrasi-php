<?php
	
	require_once ('config/connect.php');
	date_default_timezone_set('Asia/Jakarta');

	$result = array();

	$tgl_skr = date("Y-m-d H:i:s");

	$jenis_identitas = $_POST['jenis_identitas'];
	$id_pemohon = $_POST['id_pemohon'];
	$nama_pemohon = $_POST['nama_pemohon'];
	$telp_pemohon = $_POST['telp_pemohon'];
	$alamat_pemohon = $_POST['alamat_pemohon'];
	$id_provinsi = $_POST['id_provinsi'];
	$nama_provinsi = $_POST['nama_provinsi'];
	$id_kabupaten = $_POST['id_kabupaten'];
	$nama_kabupaten = $_POST['nama_kabupaten'];
	$id_kecamatan = $_POST['id_kecamatan'];
	$nama_kecamatan = $_POST['nama_kecamatan'];
	$id_kelurahan = $_POST['id_kelurahan'];
	$nama_kelurahan = $_POST['nama_kelurahan'];

	$npwp = $_POST['npwp'];
	$no_register = $_POST['no_register'];
	$nama_perusahaan = $_POST['nama_perusahaan'];
	$alamat_perusahaan = $_POST['alamat_perusahaan'];
	$telp_perusahaan = $_POST['telp_perusahaan'];
	$id_provinsi_perusahaan = $_POST['id_provinsi_perusahaan'];
	$nama_provinsi_perusahaan = $_POST['nama_provinsi_perusahaan'];
	$id_kabupaten_perusahaan = $_POST['id_kabupaten_perusahaan'];
	$nama_kabupaten_perusahaan = $_POST['nama_kabupaten_perusahaan'];
	$id_kecamatan_perusahaan = $_POST['id_kecamatan_perusahaan'];
	$nama_kecamatan_perusahaan = $_POST['nama_kecamatan_perusahaan'];
	$id_kelurahan_perusahaan = $_POST['id_kelurahan_perusahaan'];
	$nama_kelurahan_perusahaan = $_POST['nama_kelurahan_perusahaan'];

	$jenis_izin_id = $_POST['jenis_izin_id'];
	$nama_perizinan_text = $_POST['jenis_izin_text'];

	$unit_kerja_id = $_POST['unit_kerja_id'];
	$unit_kerja_text = $_POST['unit_kerja_text'];
	$jenis_permohonan_id = 1;


	$file = $_POST['file'];
	$filename = $_POST['filename'];


	//check file
	/*$data = urldecode($file);
	$data = base64_decode($data, true);*/
	//jika upload gagal, maka failed
	/*if(!file_put_contents($filename, $data)){

		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured when saving file';
		die();

	}*/

	$data = urldecode($file);
	$binary = base64_decode($data, true);

	$filename = 'upload/'.$filename;
	
	$file = fopen($filename, 'wb');
    
    fwrite($file, $binary);

    fclose($file); 
	
	if(!file_exists($filename)){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured when saving file';
		echo json_encode($result);
		die();
	}

	$no_urut = get_latest_urut($connect2);
	$no_urut = $no_urut->urut;
	if ($no_urut != NULL) {
	    $no_uniq = $no_urut + 1;
	} else {
	    $no_uniq = 1;
	}

	$query_perizinan = mysqli_query($connect, "SELECT  * FROM trperizinan WHERE id=$jenis_izin_id");
	$perizinan = mysqli_fetch_object($query_perizinan);

	if(!$query_perizinan){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query perizinan:'.mysqli_error($connect);

		echo json_encode($result);
		die();
	}

	$query_permohonan = mysqli_query($connect, "SELECT  * FROM trjenis_permohonan WHERE id=$jenis_permohonan_id");
	$jenis_permohonan = mysqli_fetch_object($query_permohonan);	

	if(!$query_permohonan){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query permohonan:'.mysqli_error($connect);

		echo json_encode($result);
		die();
	}

	$query_get_last_tmpermohonan = mysqli_query($connect, "SELECT * FROM tmpermohonan WHERE id = (SELECT max(id) FROM tmpermohonan)");
	$data_last_permohonan = mysqli_fetch_object($query_get_last_tmpermohonan);

	if(!$query_get_last_tmpermohonan){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query last permohonan:'.mysqli_error($connect);

		echo json_encode($result);
		die();
	}

    $data_tahun = date("Y");
    //Per Tahun Auto Restart NoUrut
    if ($data_last_permohonan->d_tahun === $data_tahun)

        $data_urut = $data_last_permohonan->i_urut + 1;

    else {

        $data_urut = 1;
        $query_insert_new_year = mysqli_query($connect, "INSERT INTO year (tahun) VALUES ($data_tahun)");    

        if(!$query_insert_new_year){
			$result['error'] = true;
			$result['success'] = false;
			$result['message'] = 'An error occured query insert new year:'.mysqli_error($connect);

			echo json_encode($result);
			die();
		}
   
    }


    $i_urut = strlen($data_urut);
    for ($i = 5; $i > $i_urut; $i--) {
        $data_urut = "0" . $data_urut;
    }

    $data_izin = $perizinan->id;
    $i_izin = strlen($data_izin);
    for ($i = 3; $i > $i_izin; $i--) {
        $data_izin = "0" . $data_izin;
    }

    $data_jenis = $jenis_permohonan->id;
    $i_izin = strlen($data_jenis);
    for ($i = 2; $i > $i_izin; $i--) {
        $data_jenis = "0" . $data_jenis;
    }

    $data_bulan = date("n");
    $i_bulan = strlen($data_bulan);
    for ($i = 2; $i > $i_bulan; $i--) {
        $data_bulan = "0" . $data_bulan;
    }


    $nomor_pendaftaran = $data_urut
            . $data_izin . $data_jenis
            . $data_bulan . $data_tahun;

    $user = "................................";

    if (isset($_SESSION['username'])){
    	$username = $_SESSION['username'];
    	$query_get_username = mysqli_query($connect, "SELECT * FROM user WHERE username = '".$username."' ");

    	if(!$query_get_username){
			$result['error'] = true;
			$result['success'] = false;
			$result['message'] = 'An error occured query get username:'.mysqli_error($connect);

			echo json_encode($result);
			die();
		}

    	$data_username = mysqli_fetch_object($query_get_username);

    	if($data_username->id!=NULL){

    		$user = $username->realname;

    	}
    }

    $query_permohonan_akhir = mysqli_query($connect, "SELECT * FROM tmpermohonan WHERE id = (SELECT max(id) FROM tmpermohonan) ");

    if(!$query_permohonan_akhir){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query permohonan akhir:'.mysqli_error($connect);

		echo json_encode($result);
		die();
	}

    $query_insert_pemohon_sementara = mysqli_query($connect, "INSERT INTO tmpemohon_sementara

    						(no_referensi, source, n_pemohon, telp_pemohon, a_pemohon, a_pemohon_luar)
    						VALUES
    						('".$id_pemohon."', '".$jenis_identitas."', '".$nama_pemohon."', '".$telp_pemohon."', '".$alamat_pemohon."', '')
    			");

    if(!$query_insert_pemohon_sementara){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query insert pemohonan sementara:'.mysqli_error($connect);

		echo json_encode($result);
		die();
	}

    if($nama_perusahaan!=''){

    	$query_insert_perusahaan = mysqli_query($connect, "INSERT INTO tmperusahaan_sementara

    						(n_perusahaan, npwp, i_telp_perusahaan, a_perusahaan, no_reg_perusahaan)
    						VALUES
    						('".$nama_perusahaan."', '".$npwp."', '".$telp_perusahaan."', '".$alamat_perusahaan."', '".$no_register."')
    			");

    	if(!$query_insert_perusahaan){
			$result['error'] = true;
			$result['success'] = false;
			$result['message'] = 'An error occured query insert perusahaab:'.mysqli_error($connect);

			echo json_encode($result);
			die();
		}

    }

    /* Input Data Tracking Progress */
    $query_insert_tracking_izin = mysqli_query($connect, "INSERT INTO tmtrackingperizinan

    						(pendaftaran_id, status, d_entry)
    						VALUES
    						('".$nomor_pendaftaran."', 'Insert', '".$tgl_skr."')
    			");

    if(!$query_insert_tracking_izin){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query insert tracking perizinan:'.mysqli_error($connect);

		echo json_encode($result);
		die();
	}


    //INPUT DATA PERMOHONAN
    $tgl_durasi = set_date($tgl_skr, $perizinan->v_hari);

    $hari_libur = mysqli_query($connect, "SELECT COUNT(*) as count FROM tmholiday WHERE date>='".$tgl_skr."' AND date<='".$tgl_durasi."' ");    
    
    if(!$hari_libur){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query get hari libur:'.mysqli_error($connect);

		echo json_encode($result);
		die();
	}

    $hari_libur = mysqli_fetch_object($hari_libur);
    $hari_libur = $hari_libur->count;

    $hari_durasi = ($perizinan->v_hari) + $hari_libur;
    $tgl_selesai = set_date($tgl_skr, $hari_durasi);
 

    $query_insert_permohonan = mysqli_query($connect, "INSERT INTO tmpermohonan

    						(i_urut, d_tahun, i_entry, pendaftaran_id, d_terima_berkas, d_survey, a_izin, keterangan, c_pendaftaran, trunitkerja_id, file_ttd, d_entry, d_selesai_proses)
    						VALUES
    						('".$data_urut."', '".$data_tahun."', '".$user."', '".$nomor_pendaftaran."', '".$tgl_skr."', '".$tgl_skr."', '', '', '2', '".$unit_kerja_id."', '', '".$tgl_skr."', '".$tgl_selesai."')
    			");

    if(!$query_insert_permohonan){
		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query insert permohonan:'.mysqli_error($connect);

		echo json_encode($result);
		die();
	}


  
   // $permohonan->file_ttd = $this->input->post('file');

    
    //INSERT PERIZINAN ONLINE
    $query_insert_perizinan_default = mysqli_query($connect2, "INSERT INTO default_perizinan_online 

    		(id_pemohon, jenis_identitas, nama_pemohon, telp_pemohon, alamat_pemohon, provinsi_pemohon, kabupaten_pemohon, kecamatan_pemohon, kelurahan_pemohon,
    			npwp_perusahaan, no_register_perusahaan, nama_perusahaan, alamat_perusahaan, telepon_perusahaan, provinsi_perusahaan, kabupaten_perusahaan,
    			kecamatan_perusahaan, kelurahan_perusahaan, lampiran, jenis_izin, urut, nama_perizinan, no_pendaftaran, provinsi_pemohon_text,
    			kabupaten_pemohon_text, kecamatan_pemohon_text, kelurahan_pemohon_text, provinsi_perusahaan_text, kabupaten_perusahaan_text, 
    			kecamatan_perusahaan_text, kelurahan_perusahaan_text, unit_kerja_id, unit_kerja_text)
    		VALUES
    		('".$id_pemohon."', '".$jenis_identitas."', '".$nama_pemohon."', '".$telp_pemohon."', '".$alamat_pemohon."', '".$id_provinsi."', '".$id_kabupaten."', '".$id_kecamatan."', '".$id_kelurahan."',
    			'".$npwp."', '".$no_register."', '".$nama_perusahaan."', '".$alamat_perusahaan."', '".$telp_perusahaan."', '".$id_provinsi_perusahaan."', '".$id_kabupaten_perusahaan."',
    			'".$id_kecamatan_perusahaan."', '".$id_kelurahan_perusahaan."', '".$filename."', '".$jenis_izin_id."', '".$no_uniq."', '".$nama_perizinan_text."', '".$nomor_pendaftaran."', '".$nama_provinsi."',
    			'".$nama_kabupaten."', '".$nama_kecamatan."', '".$nama_kelurahan."', '".$nama_provinsi_perusahaan."', '".$nama_kabupaten_perusahaan."',
    			'".$nama_kecamatan_perusahaan."', '".$nama_kelurahan_perusahaan."', '".$unit_kerja_id."', '".$unit_kerja_text."')

    	");
    
    if(!$query_insert_perizinan_default){
    	$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured query insert permohonan:'.mysqli_error($connect2);

		echo json_encode($result);
		die();
    }

    $result['error'] = false;
	$result['success'] = true;
	$result['message'] = 'Success';
	$result['no_pendaftaran'] = $nomor_pendaftaran;
	$result['nama_pemohon'] = $nama_pemohon;
	$result['nama_perusahaan'] = $nama_perusahaan;


	echo json_encode($result);



    function set_date($date, $length = NULL) {
        if ($length === NULL)
            $length = 1;
        $day = 86400 * $length;
        $timestamp = strtotime($date);
        $date_value = date('Y-m-d', $timestamp + $day);
        return $date_value;
    }

    function get_latest_urut($connect2){


        $sql="SELECT MAX(urut) as urut FROM default_perizinan_online";
        $query=mysqli_query($connect2, $sql);
        return mysqli_fetch_object($query);
    }
?>