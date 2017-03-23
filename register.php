<?php
	
	require_once ('config/connect.php');

	/*$json = file_get_contents('php://input');

	$obj = json_decode($json, true);*/

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
	$alamat_perusahaan = $_POST['nama_kelurahan'];
	$telp_perusahaan = $_POST['telp_perusahaan'];
	$id_provinsi_perusahaan = $_POST['id_provinsi_perusahaan'];
	$nama_provinsi_perusahaan = $_POST['nama_provinsi_perusahaan'];
	$id_kabupaten_perusahaan = $_POST['id_kabupaten_perusahaan'];
	$nama_kabupaten_perusahaan = $_POST['nama_kabupaten_perusahaan'];
	$id_kecamatan_perusahaan = $_POST['id_kecamatan_perusahaan'];
	$nama_kecamatan_perusahaan = $_POST['nama_kecamatan_perusahaan'];
	$id_kelurahan_perusahaan = $_POST['id_kelurahan_perusahaan'];
	$nama_kelurahan_perusahaan = $_POST['nama_kelurahan_perusahaan'];


	$alamat = $alamat_pemohon .' KELURAHAN '.$nama_kelurahan.' KECAMATAN '.$nama_kecamatan.' '.$nama_kabupaten.' - '.$nama_provinsi;

	$alamat_perusahaan = $alamat_perusahaan .' KELURAHAN '.$nama_kelurahan_perusahaan.' KECAMATAN '.$nama_kecamatan_perusahaan.' '.$nama_kabupaten_perusahaan.' - '.$nama_provinsi_perusahaan;




	$query = mysqli_query($connect, "INSERT INTO tmpemohon (no_referensi, n_pemohon, telp_pemohon, a_pemohon, source) 
						VALUES ('".$id_pemohon."', '".$nama_pemohon."','".$telp_pemohon."', '".$alamat."', '".$jenis_identitas."')
				");

	$query2 = mysqli_query($connect, "INSERT INTO tmperusahaan (n_perusahaan, npwp, a_perusahaan, i_telp_perusahaan, no_reg_perusahaan) 
						VALUES ('".$nama_perusahaan."', '".$npwp."','".$alamat_perusahaan."', '".$telp_perusahaan."', '".$no_register."')
				");

	$result = array();

	$result['id_pemohon'] = $id_pemohon;
	$result['nama_pemohon'] = $nama_pemohon;
	$result['telp_pemohon'] = $telp_pemohon;
	$result['alamat_pemohon'] = $alamat_pemohon;
	$result['jenis_identitas'] = $jenis_identitas;
	$result['npwp'] = $npwp;

	if((!$query) || (!$query2)){



		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured :'.mysqli_error($connect);

	}else{

		$result['error'] = false;
		$result['success'] = true;
		$result['message'] = 'Insert data success';


	}

	echo json_encode($result);

?>