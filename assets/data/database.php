<!--  -->
<style>
 @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@500&display=swap');
  *{
    font-family: 'Noto Sans Lao', sans-serif;
  }
</style>

<?php
$conn = new mysqli("localhost","root","","Real-estate");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$show_sm_money = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time'"));
?>