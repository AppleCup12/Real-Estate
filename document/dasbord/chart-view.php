<!DOCTYPE html>
<html>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>
<div id="myPlot" style="width:100%;max-width:900px"></div>

<?PHP 
    $show_real_user  = mysqli_query($conn, "SELECT * FROM `real-document` WHERE `user_uid`=$uid");
    $cdk_delete = "";
    foreach($show_real_user as $name_2){
        $cdk_delete .= $name_2['real_id'].",";
    }
    $show_view = mysqli_query($conn, "SELECT `real_uid`,`user_uid`,`View`,`view_id`, COUNT(*)as count FROM `user_view` WHERE `real_uid` IN ($cdk_delete 0) GROUP BY `View` ORDER BY View DESC LIMIT 5");
    
?>

<script>
var xArray = ["ຍອດວີວ TOP 1", "ຍອດວີວ TOP 2", "ຍອດວີວ TOP 3", "ຍອດວີວ TOP 4", "ຍອດວີວ TOP 5"];
var yArray = [
    <?PHP 
        foreach($show_view as $row_view){
            echo number_format($row_view['View']).",";
        }
    ?>
];

var data = [{
  x:xArray,
  y:yArray,
  type:"bar"
}];

var layout = {};

Plotly.newPlot("myPlot", data, layout);
</script>

</body>
</html>
