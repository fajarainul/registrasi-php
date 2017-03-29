<?php


	require_once ('config/connect.php');

	$idPerizinan = $_GET['id'];

	$query = mysqli_query($connect, "SELECT uk.n_unitkerja, uk.id FROM trunitkerja uk, trperizinan_trunitkerja pk 
							WHERE uk.id = pk.trunitkerja_id AND pk.trperizinan_id=$idPerizinan ");

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
					'id_unit_kerja' => $row->id,
					'nama_unit_kerja' => $row->n_unitkerja
				);

			$result['result'][$idx] = $temp;

			$idx++;

		}


	}

	echo json_encode($result);



?>