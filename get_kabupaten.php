<?php


	require_once ('config/connect.php');

	$idProvinsi = $_GET['id'];

	$query = mysqli_query($connect, "SELECT kab.n_kabupaten, kab.id FROM trkabupaten kab, trkabupaten_trpropinsi kp 
							WHERE kab.id = kp.trkabupaten_id AND kp.trpropinsi_id=$idProvinsi ");

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
					'id_kabupaten' => $row->id,
					'nama_kabupaten' => $row->n_kabupaten
				);

			$result['result'][$idx] = $temp;

			$idx++;

		}


	}

	echo json_encode($result);



?>