<?php 
include_once '../../assets/data/database.php';

if (isset($_POST['distric_id'])) {
	$query_v = "SELECT * FROM `AM-dcm-village` where `distric_id`=".$_POST['distric_id'];
	$result_v = $conn->query($query_v);
	if ($result_v->num_rows > 0 ) {
			echo '<option value="">ເລືອກເມືອງ........</option>';
		 while ($row_v = $result_v->fetch_assoc()) {
		 	echo '<option value='.$row_v['dcm_village_id'].'>'.$row_v['dcm_village'].'</option>';
		 }
	}else{

		echo '<option>No City Found!</option>';
	}

}elseif (isset($_POST['home'])) {
	$query_h = "SELECT * FROM `AM-dcm-home` where village_id=".$_POST['home'];
	$result_h = $conn->query($query_h);
	if ($result_h->num_rows > 0 ) {
			echo '<option value="">ເລືອກບ້ານ........</option>';
		 while ($row_h = $result_h->fetch_assoc()) {
		 	echo '<option value='.$row_h['dcm_home_id'].'>'.$row_h['dcm_home'].'</option>';
		 }
	}else{

		echo '<option>No Home Found!</option>';
	}

}


?>