<?PHP  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>REAL-ESTATE LAOS</title>
  <link rel="shortcut icon" href="../../../assets/img/icon.PNG" width="500%" type="image/x-icon">

  <link rel="stylesheet" href="../../../assets/css/maicons.css">

  <link rel="stylesheet" href="../../../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../../../assets/css/theme.css">
  <link rel="stylesheet" href="../../../assets/style/index.css">
  <link rel="stylesheet" href="../../../assets/style/group-document.css">
  <link rel="stylesheet" href="../../dasbord/dasbord.css">
  <link rel="stylesheet" href="../message.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <?PHP include_once '../header.php' ?>
  <div class="bac"></div>
    <div class="container">
      <div class="row">
        <div class="page-banner home-banner1">
            <?PHP include_once '../left_bar.php'; ?>
        </div>
        <div class="page-banner home-banner2">
          
          <div class="messae-padding">
            <div class="header-group"><h4><b><i class="bi bi-postcard-heart"></i> ລາຍການສອບຖາມຂໍ້ມູນ</b></h4></div><hr>
            <div class="group-message">
              <div class="group-header-ms">
                <h5><i class="bi bi-star-fill"></i> ລາຍການຂໍ້ມູນອະາສັງຫາຍອດນິຍົມ</h5>
                <label for="" style="font-size: 12p3;">ລາຍການຂອງລູກຄ້າທີ່ມີຄວາມສົນໃຈຕໍ່ອະສັງຫາຂອງທ່ານ</label>
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="../message" class="btn btn-light btn-outline-dark ">ຂໍ້ມູນສອບຖາມ</a>
                <a href="" class="btn btn-warning">ອະສັງຫາຍອດນິຍົມ</a>
                <a href="../Like/Like" class="btn btn-light btn-outline-dark">ຍອດກົດໃຈ</a>
                <a href="../Save/Save" class="btn btn-light btn-outline-dark">ຍອດບັນທືກ</a>

              </div>
                &nbsp;
              <div class="card group-about-ms">
                <?PHP 
                  $show_real_user  = mysqli_query($conn, "SELECT * FROM `real-document` WHERE `user_uid`=$uid");
                  $cdk_delete = "";
                  foreach($show_real_user as $name_2){
                  $cdk_delete .= $name_2['real_id'].",";
                  }
                  $show_wa_top = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(`View`)as View FROM `user_view` WHERE `real_uid` IN ($cdk_delete 0)"));
                  $show_top_wa = $show_wa_top['View'];

                  $show_em_top = mysqli_fetch_array(mysqli_query($conn, "SELECT  `View` FROM `user_view` WHERE `real_uid` IN ($cdk_delete 0) GROUP BY `View` ORDER BY View DESC"));
                  $show_top_em = $show_em_top['View'];

                  
                   
                ?>
                <div class="row">
                  <div class="column column-chart">
                    <?PHP include_once 'chart-message.php' ?>
                  </div>
                  <div class="column column-about">
                    <div class="group-header"><h4>ຕາລາງຍອດວົວ</h4></div><hr>
                    
                    <div class="card-about-ms email">
                      <div class="text-ms">
                        <i class="bi bi-star-half"></i>
                        <label style="font-size: 16px">ຍອດວິວ TOP 1: </label>
                        <label style="position: absolute; width: 180px; text-align: center ;font-size: 18px; top: 25%; right: 6%;"><?PHP echo number_format($show_top_em) ?></label>
                        <label style="font-size: 18px; position: absolute; right: 2%; top:25%">QTY</label>
                      </div>
                    </div>
                    &nbsp;
                    <div class="card-about-ms qty">
                      <div class="text-ms">
                        <i class="bi bi-bar-chart-line-fill"></i>
                        <label style="font-size: 16px">ຍອດວີວທັ້ງໝົດ: </label>
                        <label style="position: absolute; width: 180px; text-align: center ;font-size: 18px; top: 25%; right: 6%;"><?PHP echo number_format($show_top_wa) ?></label>
                        <label style="font-size: 18px; position: absolute; right: 2%; top:25%">QTY</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card group-about-ms">
                <div class="group-header"><h4>ຕາລາງຂໍ້ມູນສອບຖາມ</h4></div><hr>
                  <?PHP
                    $show_all = mysqli_query($conn, "SELECT `real_uid`,`user_uid`,`View`,`view_id`, COUNT(*)as count FROM `user_view` WHERE `real_uid` IN ($cdk_delete 0) GROUP BY `View` ORDER BY View DESC LIMIT 6");
                    $argc = 1;
                    foreach($show_all as $row_all){
                    $real_uid = $row_all['real_uid'];
                    $show_sql_real = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `real-document` WHERE `real_id`=$real_uid"));

                    $uers = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `users` WHERE `user_id`=$uid"));

                    $show_wa_top1 = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`ms_id`)as ms_id1 FROM `message_real` WHERE `real_uid`=$real_uid AND `ms_uid` in('real_time_tel','tel')"));
                    $show_top_wa1 = $show_wa_top1['ms_id1'];

                    $show_em_top2 = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`ms_id`)as ms_id1 FROM `message_real` WHERE `real_uid`=$real_uid AND `ms_uid` in('real_time_mail','mail')"));
                    $show_top_em2 = $show_em_top2['ms_id1'];

                  ?>
                  <div class="card-about-lit-real">
                    <div class="row">
                      <div class="column group-img column-01">
                        <img src="../../R-estate/upload_real/upload/<?PHP echo $show_sql_real['real_img'] ?>" alt="" id="img">
                      </div>
                      <div class="column column-01">
                        <h5><b>TOP <?PHP echo $argc++ ?></b></h5><hr>
                      </div>
                      <div class="column column-01 column-02">
                        <h6><b>ຍອດວີວທັ້ງໝົດ</b></h6>
                        <b><?PHP echo number_format($row_all['View']);?></b> View
                      </div>
                      <div class="column column-01 column-04">
                        <text style="font-size: 14px">+856 <?PHP echo $uers['user_tel'] ?></text>
                        <text style="font-size: 14px"><?PHP echo $uers['user_email'] ?></text>
                      </div>
                    </div>
                  </div>
                  &nbsp;
                  <?PHP } ?>
              </div>
            </div>
          </div>
          
          <?PHP include_once '../../footer.php'; ?>
        </div>
      </div>
    </div>
  </header>

  

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../../assets/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/js/google-maps.js"></script>

<script src="../../assets/vendor/wow/wow.min.js"></script>

<script src="../../assets/js/theme.js"></script>
  
<!-- dropdown -->
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>