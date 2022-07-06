<?php
$sql_show_alr = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(`ap_money_KIP`)as ap_money_KIP, COUNT(`ap_money`)as ap_money FROM `already_paid` WHERE `user_uid`=$uid"));
$KIP = $sql_show_alr['ap_money_KIP'];
// $THB = $sql_show_alr['ap_money'];
$sql_show_balan = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(Bl_amount)as Bl_amount FROM `real_balance` WHERE `user_uid`=$uid"));
$balan = $sql_show_balan['Bl_amount'];

$amount = ($KIP + $balan);

if($balan){
	$dataPoints1 = array( 
		array("label"=>"ຍອດເງີນລວມ", "y"=>$amount),
		array("label"=>"ຍອດສຳລະລວມ", "y"=>$KIP),
		array("label"=>"ເງີນຄ້າງລວມ", "y"=>$balan)
	); 	
}else{
	$dataPoints1 = array( 
		array("label"=>"ຍອດເງີນລວມ", "y"=>1),
		array("label"=>"ຍອດສຳລະລວມ", "y"=>0),
		array("label"=>"ເງີນຄ້າງລວມ", "y"=>0)
	);
}

if($KIP){
	$dataPoints1 = array( 
		array("label"=>"ຍອດເງີນລວມ", "y"=>$amount),
		array("label"=>"ຍອດສຳລະລວມ", "y"=>$KIP),
		array("label"=>"ເງີນຄ້າງລວມ", "y"=>$balan)
	);
}else{
	$dataPoints1 = array( 
		array("label"=>"ຍອດເງີນລວມ", "y"=>1),
		array("label"=>"ຍອດສຳລະລວມ", "y"=>0),
		array("label"=>"ເງີນຄ້າງລວມ", "y"=>0)
	);
}

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart1 = new CanvasJS.Chart("chartContainer1", {
	theme: "light2",
	animationEnabled: true,
	title: {
		// text: "Wsdfຫກດກະກເ"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0\" KIP\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#ffff",
		indexLabelFontSize: 11,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
 
}
</script>
</head>
<body>
<label id="header-chart-all-about"><b>ຕາຕະລາງຍອດເງີນລວມ</b></label>
<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>            