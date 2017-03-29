<?php


	require_once ('config/connect.php');

	$idKabupaten = $_GET['id'];

	$query = mysqli_query($connect, "SELECT kec.n_kecamatan, kec.id FROM trkecamatan kec, trkabupaten_trkecamatan kk 
							WHERE kec.id = kk.trkecamatan_id AND kk.trkabupaten_id=$idKabupaten ");

	$result = array();

	if(!$query){

		$result['error'] = true;
		$result['success'] = false;
		$result['message'] = 'An error occured :'.mysqli_error($connect);

	}else{
		$result['error'] = false;
		$result['success'] = true;
		$result['result'] = array();
		$idx = 0;
		while ($row=mysqli_fetch_object($query)) {
			
			$temp = array(
					'id_kecamatan' => $row->id,
					'nama_kecamatan' => $row->n_kecamatan
				);

			$result['result'][$idx] = $temp;

			$idx++;

		}


	}

	echo json_encode($result);



?>