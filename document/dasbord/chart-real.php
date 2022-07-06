<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
<?php 
    $all_real = mysqli_fetch_array(mysqli_query($conn, "SELECT Count(`real_id`)as Count FROM `real-document` WHERE `user_uid`=$uid"));
    $real_zero = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=0 AND `user_uid`=$uid"));
    $real_one = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=1 AND `user_uid`=$uid"));
    $real_two = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=2 AND `user_uid`=$uid"));
    $real_three = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=3 AND `user_uid`=$uid"));
?>
<canvas id="myChart" style="width:100%;max-width:600px; height: 300px"></canvas>
<script>
var xValues = ["ລວມທັ້ງໝົດ", "ລົບແລ້ວ", "ປົດສະຖານະ", "ປະກາດແລ້ວ", "ລໍການປະກາດ"];
var yValues = [<?PHP echo number_format($all_real['Count']); ?>, <?PHP echo number_format($real_zero['count']); ?>, <?PHP echo number_format($real_one['count']); ?>, <?PHP echo number_format($real_two['count']); ?> ,<?PHP echo number_format($real_three['count']); ?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9"
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
