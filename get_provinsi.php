<?php


	require_once ('config/connect.php');

	$query = mysqli_query($connect, "SELECT prop.n_propinsi, prop.id FROM trpropinsi prop");

	$result = array();

	if(!$query){

		$result['error'] = true;
		$result['message'] = 'An error occured :'.mysqli_error($connect);

	}else{

		$idx = 0;
		while ($row=mysqli_fetch_object($query)) {
			
			$temp = array(
					'id_propinsi' => $row->id,
					'nama_propinsi' => $row->n_propinsi
				);

			$result[$idx] = $temp;

			$idx++;

		}


	}

	echo json_encode($result);



?>