<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
<canvas id="myChart" style="width:100%;max-width:600px; height: 350px"></canvas>

<?PHP 
    $show_alr = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(`ap_money_KIP`) as `ap_money_KIP` , SUM(`ap_money`) as `ap_money` FROM `already_paid`"));
    $Bl_amount = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(`Bl_amount`) as Bl_amount FROM `real_balance`"));
    $ap_money_KIP = $show_alr['ap_money_KIP'];
    $ap_money = $show_alr['ap_money'];
    $Bl_amount = $Bl_amount['Bl_amount'];
    
    $all = ($ap_money_KIP + $Bl_amount);
    
?>

<script>
var xValues = ["ຍອດເງີນກິບ", "ເງີນຄ້າງລວມ", "ລາຍໄດ້ທັ້ງໝົດ"];
var yValues = [<?PHP echo ($ap_money_KIP) ?>, <?PHP echo ($Bl_amount) ?>, <?PHP echo ($all) ?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
    }
  }
});
</script>

</body>
</html>