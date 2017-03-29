<?php


	require_once ('config/connect.php');

	$query = mysqli_query($connect, "SELECT per.n_perizinan, per.id FROM trperizinan per");

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
					'id_perizinan' => $row->id,
					'nama_perizinan' => $row->n_perizinan,					
				);

			$result['result'][$idx] = $temp;

			$idx++;

		}


	}

	echo json_encode($result);



?>