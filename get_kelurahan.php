<?php


	require_once ('config/connect.php');

	$idKecamatan = $_GET['id'];

	$query = mysqli_query($connect, "SELECT kel.n_kelurahan, kel.id FROM trkelurahan kel, trkecamatan_trkelurahan kk 
							WHERE kel.id = kk.trkelurahan_id AND kk.trkecamatan_id=$idKecamatan ");

	$result = array();

	if(!$query){

		$result['error'] = true;
		$result['message'] = 'An error occured :'.mysqli_error($connect);

	}else{

		$idx = 0;
		while ($row=mysqli_fetch_object($query)) {
			
			$temp = array(
					'id_kelurahan' => $row->id,
					'nama_kelurahan' => $row->n_kelurahan
				);

			$result[$idx] = $temp;

			$idx++;

		}


	}

	echo json_encode($result);



?>