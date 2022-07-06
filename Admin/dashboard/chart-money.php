<?php
   $show_alr = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(`ap_money_KIP`) as `ap_money_KIP` , SUM(`ap_money`) as `ap_money` FROM `already_paid`"));
   $Bl_amount = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(`Bl_amount`) as Bl_amount FROM `real_balance`"));
   $ap_money_KIP = $show_alr['ap_money_KIP'];
   $ap_money = $show_alr['ap_money'];
   $Bl_amount_one = $Bl_amount['Bl_amount'];
   
   $all = ($ap_money_KIP + $Bl_amount_one);
   
$dataPoints = array( 
	array("label"=>"ລາຍໄດ້ລວມ", "y"=>$all),
	array("label"=>"ຍອດສຳລະແລ້ວ", "y"=>$ap_money_KIP),
	array("label"=>"ຍອດເງີນຄ້າງສຳລະ", "y"=>$Bl_amount_one)
)
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0\" KIP\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#ffff",
		indexLabelFontSize: 10,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
    &nbsp;
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 