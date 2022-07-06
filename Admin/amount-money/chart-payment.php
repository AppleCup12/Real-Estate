<?php
include_once '../../assets/data/database.php';
$show_alr = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(`ap_money_KIP`) as `ap_money_KIP` , SUM(`ap_money`) as `ap_money` FROM `already_paid`"));
$Bl_amount = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(`Bl_amount`) as Bl_amount FROM `real_balance`"));
$ap_money_KIP = $show_alr['ap_money_KIP'];
$ap_money = $show_alr['ap_money'];
$Bl_amount = $Bl_amount['Bl_amount'];

$all = ($ap_money_KIP + $Bl_amount);


$dataPoints = array(
	array("label"=> "ລາຍໄດ້ທັ້ງໝົດ LAK", "y"=> ($ap_money_KIP)),
	array("label"=> "ລາຍໄດ້ທັ້ງໝົດ THB", "y"=> $ap_money),
	array("label"=> "ຍອດເງີນຄ້າງໂຄສະນາລວມ LAK", "y"=> $Bl_amount),
	array("label"=> "ຍອດເງີນລວມທັ້ງໝົດ LAK", "y"=> ($all))
);
	
?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "ຕາຕະລາງ ຍອດເງີນລວມທັ້ງໝົດ"
	},
	subtitles: [{
		text: "ສະກຸນເງີນຫຼັ້ກ ( LAK )"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>,
		yValueFormatString: " #,##0"

	}]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
