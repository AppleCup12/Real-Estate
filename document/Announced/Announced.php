<?PHP  session_start(); 
  $uid = $_SESSION["user_id"];
  if($uid){
  }else{
    header('Location: ../../login');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>REAL-ESTATE LAOS</title>
  <link rel="shortcut icon" href="../../assets/img/icon.PNG" width="500%" type="image/x-icon">

  <link rel="stylesheet" href="../../assets/css/maicons.css">

  <link rel="stylesheet" href="../../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../assets/vendor/animate/animate.css">
  
  <!-- <link rel="stylesheet" href="../header.css"> -->


  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/style/index.css">
  <link rel="stylesheet" href="../../assets/style/Responsive-document.css">
  <link rel="stylesheet" href="../../assets/style/group-document.css">
  <link rel="stylesheet" href="../dasbord/dasbord.css">
  <link rel="stylesheet" href="style_anounced.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Table -->
  

  
</head>
<body>
<?PHP include_once '../header.php' ?>

<form action="" method="POST" enctype="multipart/form-data">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
  <div class="bac"></div>
    <div class="container">
      <div class="row">
        <div class="page-banner home-banner1">
            <nav class="nav-bar-list">
              <div class="padding-list-nav">
                <a href="../profile/profile">
                  <div class="d-flex align-items-center ms-4 mb-4 nav-user">
                    <?PHP 
                      include_once '../../assets/data/database.php';
                      include_once '../../assets/data/price-time.php';
                      
                      $uid = $_SESSION["user_id"];
                      $sql_user = mysqli_query($conn, "SELECT * FROM `Users` WHERE user_id=$uid");
                      $row = mysqli_fetch_array($sql_user);
                    ?>
                      <div class="position-relative">
                          <img class="rounded-circle" src="../profile/upload/<?PHP echo $row['user_img'] ?>" alt="" style="width: 50px; height: 50px;">
                          <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                      </div>
                      <div class="ms-3">
                          <h6 class="mb-0"><?PHP echo $row['name'] ?></h6>
                          <span id="span"><?PHP echo $row['user_status'] ?></span>
                      </div>
                  </div>
                </a>
                <div class="navbar-nav w-100">
                  <a href="../dasbord/dasbord" class="nav-item nav-link">&nbsp;<i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</a>
                  <a href="../Pay-monney/Money" class="nav-item nav-link">&nbsp;<i class="bi bi-wallet2"></i> ຊຳລະເງີນ</a>
                  <a href="../R-estate/R-estate" class="nav-item nav-link">&nbsp;<i class="bi bi-cash-coin"></i> ອະສັງຫາ</a>
                  <a href="../Announced/Announced" class="nav-item nav-link active">&nbsp;<i class="bi bi-bookmark-plus"></i> ປະກາດຂອງທ່ານ</a>
                  <a href="../message/message" class="nav-item nav-link">&nbsp;<i class="bi bi-postcard-heart"></i> ລາຍການສອບຖາມຂໍ້ມູນ</a>
                  <a href="../Save-real/Save-real" class="nav-item nav-link">&nbsp;<i class="bi bi-bookmark-dash"></i> ປະກາດທີ່ບັນທືກໄວ້</a>
                </div>
              </div>
            </nav>
        </div>
        <div class="page-banner home-banner-3">
          <div class="group-table">
            <div class="header-R">
                <h3><i class="bi bi-bookmark-plus"></i> ປະກາດຂອງທ່ານ</h3>
                <!-- &nbsp; -->
                <hr>
            </div>
            <!-- <div class="nav-r">
                <nav>
                    &nbsp;
                    <a href="../" id="a1">ໜ້າແລກ</a> |
                    <a href="" id="a2">ປະກາດ</a> |
                    <a href="#R-estate" id="a3">ຍືນຍັນກາປະກາດ</a> 
                </nav>
            </div> -->
            <!-- &nbsp; -->
            <div class="group-header">
                <h4>ຕາຕະລາງປະກາດຂອງທ່ານ</h4>
                <label for="">ເລືອກອະສັງຫາທີ່ຈະປະກາດ ແລ້ວຍືນຍັ້ນ ພ້ອມອັບໂຫຼດໂປຣຟ່າຍ ປະກາດ</label>
                
            </div>
            <div class="group-table-real">
                <div class="group">
                    <div class="row">
                        <div class="col-md-5">
                            <input class="form-control control" id="myInput" type="text" placeholder="ຄົ້ນຫາປະກາດ.....">
                        </div>
                        <div class="col-md-7">
                            <div class="group-btn-real">
                                <?PHP
                                  $sql_paybl = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real_balance` WHERE user_uid=$uid"));
                                  $show_sm_CSN = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time_CSN'"));

                                  if($sql_paybl){
                                  // $sql_paybl = number_format("40000");s
                                  // echo $sql_paybl;
                                    if( $sql_paybl['Bl_amount']>=$show_sm_CSN['ad_sm']){
                                        echo '<a href="../Pay-monney/Money" class="btn btn-sm btn-danger control"><i class="bi bi-wallet2"></i> ເງີນຄ້າງລວມ '.number_format($sql_paybl['Bl_amount']).".LAK".'</a>';
                                    }else{
                                      echo '<a href="../Pay-monney/Money" class="btn btn-sm btn-info control"><i class="bi bi-wallet2"></i> ເງີນຄ້າງລວມ '.number_format($sql_paybl['Bl_amount']).".LAK".'</a>';
                                    }
                                  }
                                ?>
                                
                                <!-- <button type="submit" name="save_not" class="btn-real eye"><i class="bi bi-eye-slash-fill"></i> ປິດສະຖານະ</button> -->
                                <button class="btn-link"><a href="../R-estate/R-estate" class="btn-link-text"><i class="bi bi-cash-coin"></i> ເພີ່ມອະສັງຫາ</a></button>
                                <button type="submit" name="delete" class="btn-delete"><i class="bi bi-trash"></i> # ລົບປະກາດ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr id="table-tr-h">
                        <th id="checkbox-td"><div class="popup-check"># <div class="check-popup"><label for="" id="check-text-popup">ເລືອກຂໍ້ມູນທີ່ທ່ານຕ້ອງການ ແລ້ວກົດປຸ່ມບົນຂ້າງຂວ່າ.... <button class="btn-primary primary">#</button> <button class="btn-danger danger">#</button></label></div></div></th>
                        <th>ຫົວຂໍ້ອະສັງຫາ</th>
                        <th>ປະເພດ</th>
                        <th>ລາຄາ</th>
                        <!-- <th>ຫ້ອງນອນ / ນ້ຳ / ຊັ້ນ</th> -->
                        <th>ສະຖານະ</th>
                        <th>ສະຖານະປະກາດ</th>
                        <th>ວັນທີ່-ເວລາ ບັນທືກ</th>
                        <th>ລົງປະກາດ</th>
                        <th>ຈັດການ</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    <?PHP 
                        $real_document = mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_uid` in(1,2,3) and user_uid=$uid order by real_id desc");
                        foreach($real_document as $row_tb){
                    ?>
                    <tr id="tr-list"> 
                        <td>
                            <input type="checkbox" name="checkbox[]" value="<?PHP echo $row_tb['real_id'] ?>">
                            <!-- <input type="checkbox" name="checkbox[]" value="0" style="display: none;" checked> -->
                        </td>
                        <td><?PHP echo $row_tb['real_about_laos'] ?> ປະກາດອະສັງຫາ </td>
                        <td><?PHP echo $row_tb['real_type'] ?></td>
                        <td><?PHP echo number_format($row_tb['real_bprice']) ?> .LAK</td>
                        <!-- <td><? echo $row_tb['real_bedroom']." / ".$row_tb['real_bathroom']." / ".$row_tb['real_floor'] ?></td> -->
                        <td><?PHP if($row_tb['r_radio']=="ເຊົ່າ"){echo "<p id='p-z'><i class='bi bi-emoji-heart-eyes'></i> ເຊົ່າ</p>";}else if($row_tb['r_radio']=="ຂາຍ"){echo "<p id='p-b'><i class='bi bi-emoji-heart-eyes'></i> ຂາຍ</p>";} ?></td>
                        <td><?PHP if($row_tb['real_uid']=="2"){echo "<a href='#ຂອບໃຈທີ່ອ່ານ'><div id='p-p'>ອ່ອນໄລຣ໌ <div class='p-p-01'><p id='text-2'>ສະຖານະ ອ່ອນໄລຣ໌</p></div></div></a>";}else if($row_tb['real_uid']=="1"){echo "<a href='#ຂອບໃຈທີ່ອ່ານ'><div id='p-n'>ອ໋ອບໄລຣ໌<div class='p-n-02'><p id='text-2'>ສະຖານະ ອ໋ອບໄລຣ໌</p></div></div></a>";}else if($row_tb['real_uid']=="3"){echo "<a href='#ຂອບໃຈທີ່ອ່ານ'><div id='p-y'>ກວດສອບ<div class='p-n-03'><p id='text-2'>ສະຖານະ ກວດສອບ</p></div></div></a>";} ?></td>
                        <td><?PHP echo $row_tb['real_time']?></td>
                        <td class="td-real">
                          <?PHP if($row_tb['real_uid']=="2"){echo '<a href="?show_status='.$row_tb['real_id'].'" class="btn-sm btn-success r-02"><i class="bi bi-megaphone-fill"></i><div class="real_2">ກະລຸນາປິດປະກາດກອນຖືງຈະປຽນຂໍ້ມູນໄດ້</div> ປະກາດສຳເລັດ</a></td>';}elseif($row_tb['real_uid']=="1"){echo '<a href="?save='.$row_tb['real_id'].'" class="btn-sm btn-info r-01"><i class="bi bi-megaphone-fill"></i><div class="real_1">ກົດເພືອທຳການກຳນົດວັນເວລາປະກາດ</div> ລົງປະກາດ</a></td>';}elseif($row_tb['real_uid']=="3"){echo '<a href="?update_r-02='.$row_tb['real_id'].'" class="btn-sm btn-warning r-03"><i class="bi bi-megaphone-fill"></i> <div class="real_3">ກົດເພືອທຳການແກ້ໄຂວັນເວລາປະກາດ</div> ລໍເວລາປະກາດ</a></td>';} ?>  
                        </td>
                        <?PHP if($row_tb['real_uid']=="2"){?>
                        <td><select name="" id="" class="select-tb" onchange="location = this.value;">
                            <option value="#">ຈັດການ</option>
                            <option value="../../User-real/about-real/view-user?uid=<?PHP echo $row_tb['real_id'] ?>"> ເບິງຕົວຢ່າງ</option>
                            <option value="?real_off=<?PHP echo $row_tb['real_id'] ?>">ປົດສະຖານະ</option>
                            <option value="update_img?update_img=<?PHP echo $row_tb['real_id'] ?>">ປ່ຽນແປ່ງຮູບ</option>
                            <option value="real_update?update=<?PHP echo $row_tb['real_id'] ?>">ແກ້ໄຂ</option>
                        </select></td>
                        <?PHP } ?>
                        <?PHP if($row_tb['real_uid']=="3"){?>
                        <td><select name="" id="" class="select-tb" onchange="location = this.value;">
                            <option value="#">ຈັດການ</option>
                            <option value="../../User-real/about-real/view-user?uid=<?PHP echo $row_tb['real_id'] ?>">ເບິງຕົວຢ່າງ</option>
                            <option value="update_img?update_img=<?PHP echo $row_tb['real_id'] ?>">ປ່ຽນແປ່ງຮູບ</option>
                            <option value="real_update?update=<?PHP echo $row_tb['real_id'] ?>">ແກ້ໄຂ</option>
                            <option value="?delete_01=<?PHP echo $row_tb['real_id'] ?>">ລົບ</option>
                        </select></td>
                        <?PHP } ?>
                        <?PHP if($row_tb['real_uid']=="1"){?>
                        <td><select name="" id="" class="select-tb" onchange="location = this.value;">
                            <option value="#">ຈັດການ</option>
                            <option value="../../User-real/about-real/view-user?uid=<?PHP echo $row_tb['real_id'] ?>">ເບິງຕົວຢ່າງ</option>
                            <option value="update_img?update_img=<?PHP echo $row_tb['real_id'] ?>">ປ່ຽນແປ່ງຮູບ</option>
                            <option value="real_update?update=<?PHP echo $row_tb['real_id'] ?>">ແກ້ໄຂ</option>
                            <option value="?delete_01=<?PHP echo $row_tb['real_id'] ?>">ລົບ</option>
                        </select></td>
                        <?PHP } ?>
                        
                    </tr>
                    <?PHP } ?>
                    </tbody>
                </table>

          </div>
        </div>
      <?PHP include_once '../footer.php'; ?>

      </div>
 
    </div>
  </header>
<p style="display:none">
  <?PHP
    $update_paymn_real = mysqli_query($conn, "SELECT sum(pay_money)as pay_money, sum(pay_mn_hour)as pay_mn_hour FROM `Real_paymoney` WHERE `user_uid`=$uid order by paymn_id desc");
    if($update_paymn_real -> num_rows > 0 ){
        while($row_pay_mn = $update_paymn_real->fetch_assoc()){
           echo $amount = number_format($row_pay_mn['pay_money'])."<br>";
           echo $pay_mn_hour = number_format($row_pay_mn['pay_mn_hour']).",000<br>";
           $amount_paymn = ($amount + $pay_mn_hour).",000";
        }
    }
 ?>
</p>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../../assets/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/js/google-maps.js"></script>

<script src="../../assets/vendor/wow/wow.min.js"></script>

<script src="../../assets/js/theme.js"></script>
  
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>


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
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<link rel="stylesheet" href="popup.css">
  <?PHP
  if(isset($_GET['save'])){
    $real_cdk = $_GET['save'];
    if($real_cdk){
      $online = mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_id`=$real_cdk");
      $show_sm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time'"));
      $delete_curdate = mysqli_query($conn, "DELETE FROM `Real-curdate` WHERE `real_uid`=$real_cdk");
      if($online){
          echo '<div class="popup">
          <div class="closs"></div>
          <div class="conatiner-payment">
            <div class="header-popup">
              <h5><i class="bi bi-calendar-date-fill"></i> ກຳນົດເວລາລົງປະກາດ</h5>
              <hr>
              <i class="bi bi-x-circle closs-icon"></i>
            </div>
            &nbsp;
            <div class="group-payment">
              <div class="row">
                <div class="col-md-6">
                  <div class="group">
                    <label for="">ສຳລະລາຍວັນ</label>
                    <input type="number" value="'.($show_sm['ad_sm']).'" class="form-control control" placeholder="ຈຳນວນຕໍ່ວັນ: '.number_format($show_sm['ad_sm']).' KIP" readonly>
                  </div>
                  &nbsp;
                  <div class="group-curdate">
                    <label for="">ກຳນົດປະກາດຕໍວັນ</label>
                    <div class="row">
                      <div class="curdate-input">
                        <label for="">ເລີມແຕ່ວັນ</label>
                        <input type="date" name="curdat-in" min="'.$date_out.'"  value="'.$date_out.'" class="form-control control curdate" required>
                      </div>
                      &nbsp;
                      <div class="curdate-input">
                        <label for="">ຈົບໃນວັນ</label>
                        <input type="date" name="curdate-out" min="'.$date_out.'" class="form-control control curdate" required>
                      </div>
                      &nbsp;
                      <div class="curdate-input">
                        <label for="">ເລີມຕົ້ນເວລາ</label>
                        <input type="time" name="time-in" value="'.$time_out.'" class="form-control control curdate" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="group">
                    <label for="">ຈະເອີ້ນເກັບ '.number_format($show_sm['ad_sm']).'₭ ຕໍ່ວັນຕາມການກຳນົດປະກາດຂອງທ່ານ ຈະດຳເນີນການເກັບເງີນພາຍຫຼັງ</label>
                  </div>
                  
                  <div class="group">
                    <label for="">ປ່ອນຈຳນວນວັນເລີມປະກາດ ແລະ ສີ້ນສຸດປະກາດໃນວັນທີ່</label>
                  </div>
                  <hr>
                  <div class="group">
                    <button type="submit" name="curdate-sub" class="btn-sm btn-info"><i class="bi bi-megaphone-fill"></i> ເລີມປະກາດ</button>
                  </div>
                </div>
              </div>
              <hr>
              <label for="">ອະສັງຫາທີ່ທ່ານເລືອກປະກາດຕອນນີ້</label>
              <div class="group">';
              if($online->num_rows > 0 ){
                while ($row_v = $online->fetch_assoc()) {
                  echo '<p>ປະເພດ: '. $row_v['real_type']." ". number_format($row_v['real_bprice'])."LAK - ວັນທີ່ສ້າງ ".$row_v['real_curdate'].'</p>';
                }
              }

              if(isset($_POST['curdate-sub'])){
                date_default_timezone_set('Asia/Bangkok');
                $timenew = time();
                $time = date("H:i:s",$timenew);
                $curdate_in = mysqli_real_escape_string($conn, $_POST['curdat-in']);
                $time_in = mysqli_real_escape_string($conn, $_POST['time-in']);
                $curdate_out = mysqli_real_escape_string($conn, $_POST['curdate-out']);

                
                  $inser_curdate = mysqli_query($conn, "INSERT INTO `Real-curdate`(`curdate_in`, `time_in`, `curdate_out`, `time_out`, `real_uid`, `user_uid`, `curendate`, `curentime`, `payment`) VALUES ('$curdate_in','$time_in','$curdate_out','00:00','$real_cdk','$uid',curdate(),'$time','ຍັງບໍ່ມີຂໍ້ມູນເງີນ')");
                  if($inser_curdate){
                    $update_chechk_01 = mysqli_query($conn, "UPDATE `Real-document` SET `real_curdate`=curdate(),`real_uid`='3' WHERE `real_id`=$real_cdk");

                    echo '<script>
                          swal({
                          title: "ອະສັງຫາຂອງທ່ານຢູ່ລະຫວ່າງເວລາທີ່ທ່ານກຳນົດ ກະລຸນາລໍຖ້າ!",
                          text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                          type: "warning"
                        },
                        function(){
                        window.location="../Announced/Announced"
                        });
                      </script>';
                  }else{
                    echo '<script>
                        swal({
                        title: "ບໍ່ສາມາດລົງປະະກາດໄດ້!",
                        text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                        type: "error"
                      },
                        function(){
                        window.location="../Announced/Announced"
                        });
                    </script>';
                  }
                $sql_paybl = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real_balance` WHERE user_uid=$uid"));
                $show_sm_CSN = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time_CSN'"));
                if($sql_paybl){
                  if($sql_paybl['Bl_amount']>=$show_sm_CSN['ad_sm']){
                    $update_chechk_01 = mysqli_query($conn, "UPDATE `Real-document` SET `real_curdate`=curdate(),`real_uid`='1' WHERE `real_id`=$real_cdk");
                    if($update_chechk_01){
                      $delete_curdate = mysqli_query($conn, "DELETE FROM `Real-curdate` WHERE `real_uid`=$real_cdk");

                      echo '<script>
                        swal({
                        title: "ຈຳນວນເງີນເກິດກຳນົດ ກະລຸນາສຳລະເງີນກອນເພືອລົງໂຄສະນາໄດ້!",
                        text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                        type: "error"
                      },
                        function(){
                        window.location="../Pay-monney/Money"
                        });
                    </script>';
                    }else{

                    }
                    
                  }else{
                  }
                }
              }

              echo '</div>
              </div>
            </div>
          </div>';
      }else{
          echo '<script>
                  swal({
                  title: "ບໍ່ສາມາດລົງປະະກາດໄດ້!",
                  text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                  type: "error"
                  },
                  function(){
                  window.location="../Announced/Announced"
                  });
              </script>';
      }
      
    }else{
      echo '<script>
              swal({
              title: "ກະລຸນາເລືອກອະສັງຫາທີ່ຕ້ອງການກອນ!",
              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
              type: "info"
              },
              function(){
              window.location="../Announced/Announced"
              });
          </script>';
    }
    
  }



  if(isset($_GET['update_r-02'])){
    $real_cdk = $_GET['update_r-02'];
    if($real_cdk){
      $online = mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_id`=$real_cdk");
      $show_sm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time'"));
      $row_curdate = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `Real-curdate` WHERE `real_uid`=$real_cdk"));
      if($online){
          echo '<div class="popup">
          <div class="closs"></div>
          <div class="conatiner-payment">
            <div class="header-popup">
              <h5><i class="bi bi-calendar-date-fill"></i> ກຳນົດເວລາລົງປະກາດ</h5>
              <hr>
              <i class="bi bi-x-circle closs-icon"></i>
            </div>
            &nbsp;
            <div class="group-payment">
              <div class="row">
                <div class="col-md-6">
                  <div class="group">
                    <label for="">ສຳລະລາຍວັນ</label>
                    <input type="number" value="'.number_format($show_sm['ad_sm']).'" class="form-control control" placeholder="ຈຳນວນຕໍ່ວັນ: '.number_format($show_sm['ad_sm']).' KIP" readonly>
                  </div>
                  &nbsp;
                  <div class="group-curdate">
                    <label for="">ກຳນົດປະກາດຕໍວັນ</label>
                    <div class="row">
                      <div class="curdate-input">
                        <label for="">ເລີມແຕ່ວັນ</label>
                        <input type="date" name="curdat-in" value="'.$row_curdate['curdate_in'].'" min="'.$date_out.'" class="form-control control curdate" required>
                      </div>
                      &nbsp;
                      <div class="curdate-input">
                        <label for="">ຈົບໃນວັນ</label>
                        <input type="date" name="curdate-out" value="'.$row_curdate['curdate_out'].'" min="'.$date_out.'" class="form-control control curdate" required>
                      </div>
                      &nbsp;
                      <div class="curdate-input">
                        <label for="">ເລີມຕົ້ນເວລາ</label>
                        <input type="time" name="time-in" value="'.$row_curdate['time_in'].'" class="form-control control curdate" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="group">
                    <label for="">ຈະເອີ້ນເກັບ '.number_format($show_sm['ad_sm']).'₭ ຕໍ່ວັນຕາມການກຳນົດປະກາດຂອງທ່ານ ຈະດຳເນີນການເກັບເງີນພາຍຫຼັງ</label>
                  </div>
                  
                  <div class="group">
                    <label for="">ປ່ອນຈຳນວນວັນເລີມປະກາດ ແລະ ສີ້ນສຸດປະກາດໃນວັນທີ່</label>
                  </div>
                  <hr>
                  <div class="group">
                    <button type="submit" name="curdate-sub" class="btn-sm btn-info"><i class="bi bi-megaphone-fill"></i> ເລີມປະກາດ</button>
                    <button type="submit" name="off" class="btn-sm btn-warning"><i class="bi bi-eye-slash-fill"></i> ລົບສະຖານະ</button>
                  </div>
                </div>
              </div>
              <hr>
              <label for="">ອະສັງຫາທີ່ທ່ານເລືອກປະກາດຕອນນີ້</label>
              <div class="group">';
              if($online->num_rows > 0 ){
                while ($row_v = $online->fetch_assoc()) {
                  echo '<p>ປະເພດ: '. $row_v['real_type']." ". number_format($row_v['real_bprice'])."LAK - ວັນທີ່ສ້າງ ".$row_v['real_curdate'].'</p>';
                }
              }

              if(isset($_POST['curdate-sub'])){
                  date_default_timezone_set('Asia/Bangkok');
                  $timenew = time();
                  $time = date("H:i:s",$timenew);
                  $curdate_in = mysqli_real_escape_string($conn, $_POST['curdat-in']);
                  $time_in = mysqli_real_escape_string($conn, $_POST['time-in']);
                  $curdate_out = mysqli_real_escape_string($conn, $_POST['curdate-out']);
                  
                    $inser_curdate = mysqli_query($conn, "UPDATE `Real-curdate` SET `curdate_in`='$curdate_in',`time_in`='$time_in',`curdate_out`='$curdate_out' WHERE `real_uid`=$real_cdk");
                    if($inser_curdate){
                      $update_chechk_01 = mysqli_query($conn, "UPDATE `Real-document` SET `real_curdate`=curdate(),`real_uid`='3' WHERE `real_id`=$real_cdk");

                      echo '<script>
                            swal({
                            title: "ປຽນແປ່ງຂໍ້ມູນສຳເລັດ!",
                            text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                            type: "success"
                          },
                            function(){
                            window.location="../Announced/Announced"
                          });
                        </script>';
                    }else{
                      echo '<script>
                          swal({
                          title: "ບໍ່ສາມາດລົງປະະກາດໄດ້!",
                          text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                          type: "error"
                        },
                          function(){
                          window.location="../Announced/Announced"
                          });
                      </script>';
                    }
                    $sql_paybl = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real_balance` WHERE user_uid=$uid"));
                    $show_sm_CSN = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time_CSN'"));
                    if($sql_paybl){
                      if($sql_paybl['Bl_amount']>=$show_sm_CSN['ad_sm']){
                        $update_chechk_01 = mysqli_query($conn, "UPDATE `Real-document` SET `real_curdate`=curdate(),`real_uid`='1' WHERE `real_id`=$real_cdk");
                        if($delete_curdate){
                          $delete_curdate = mysqli_query($conn, "DELETE FROM `Real-curdate` WHERE `real_uid`=$real_cdk");

                          echo '<script>
                            swal({
                            title: "ຈຳນວນເງີນເກິດກຳນົດ ກະລຸນາສຳລະເງີນກອນເພືອລົງໂຄສະນາໄດ້!",
                            text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                            type: "error"
                          },
                            function(){
                            window.location="../Pay-monney/Money"
                            });
                        </script>';
                        }else{
    
                        }
                        
                      }else{
                      }
                    }
              }

              if(isset($_POST['off'])){
                $delete_curdate = mysqli_query($conn, "DELETE FROM `Real-curdate` WHERE `real_uid`=$real_cdk");
                  if($delete_curdate){
                    $update_chechk_01 = mysqli_query($conn, "UPDATE `Real-document` SET `real_curdate`=curdate(), `real_uid`='1' WHERE `real_id`=$real_cdk");

                    echo '<script>
                          swal({
                          title: "ປຽນແປ່ງຂໍ້ມູນສຳເລັດ!",
                          text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                          type: "success"
                        },
                          function(){
                          window.location="../Announced/Announced"
                        });
                      </script>';
                  }else{
                    echo '<script>
                        swal({
                        title: "ບໍ່ສາມາດລົງປະະກາດໄດ້!",
                        text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                        type: "error"
                      },
                        function(){
                        window.location="../Announced/Announced"
                        });
                    </script>';
                  }
                  
              }

              echo '</div>
              </div>
            </div>
          </div>';
      }else{
          echo '<script>
                  swal({
                  title: "ບໍ່ສາມາດລົງປະະກາດໄດ້!",
                  text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                  type: "error"
                  },
                  function(){
                  window.location="../Announced/Announced"
                  });
              </script>';
      }
      
    }else{
      echo '<script>
              swal({
              title: "ກະລຸນາເລືອກອະສັງຫາທີ່ຕ້ອງການກອນ!",
              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
              type: "info"
              },
              function(){
              window.location="../Announced/Announced"
              });
          </script>';
    }
    
  }

  if(isset($_GET['show_status'])){
    $real_cdk = $_GET['show_status'];
    if($real_cdk){
      $online = mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_id`=$real_cdk");
      $show_sm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time'"));
      $delete_curdate = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `real-curdate` WHERE `real_uid`=$real_cdk"));
      if($delete_curdate){
          echo '<div class="popup">
          <div class="closs"></div>
          <div class="conatiner-payment">
            <div class="header-popup">
              <h5><i class="bi bi-calendar-date-fill"></i> ກຳນົດເວລາລົງປະກາດ</h5>
              <hr>
              <i class="bi bi-x-circle closs-icon"></i>
            </div>
            &nbsp;
            <div class="group-payment">
              <div class="row">
                <div class="col-md-6">
                  <div class="group">
                    <label for="">ສຳລະລາຍວັນ</label>
                    <input type="number" value="'.number_format($show_sm['ad_sm']).'" class="form-control control" placeholder="ຈຳນວນຕໍ່ວັນ: '.number_format($show_sm['ad_sm']).' KIP" readonly>
                  </div>
                  &nbsp;
                  <div class="group-curdate">
                    <label for="">ກຳນົດປະກາດຕໍວັນ</label>
                    <div class="row">
                      <div class="curdate-input">
                        <label for="">ເລີມແຕ່ວັນ</label>
                        <input type="text" name="curdat-in" value="'.$delete_curdate['curdate_in'].'" class="form-control control curdate" readonly>
                      </div>
                      &nbsp;
                      <div class="curdate-input">
                        <label for="">ຈົບໃນວັນ</label>
                        <input type="text" name="curdate-out" value="'.$delete_curdate['curdate_out'].'" class="form-control control curdate" readonly>
                      </div>
                      &nbsp;
                      <div class="curdate-input">
                        <label for="">ເລີມຕົ້ນເວລາ</label>
                        <input type="text" name="time-in" value="'.$delete_curdate['time_in'].'" class="form-control control curdate" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="group">
                    <label for="">ຈະເອີ້ນເກັບ '.number_format($show_sm['ad_sm']).'₭ ຕໍ່ວັນຕາມການກຳນົດປະກາດຂອງທ່ານ ຈະດຳເນີນການເກັບເງີນພາຍຫຼັງ</label>
                  </div>
                  
                  <div class="group">
                    <label for="">ປ່ອນຈຳນວນວັນເລີມປະກາດ ແລະ ສີ້ນສຸດປະກາດໃນວັນທີ່</label>
                  </div>
                  <hr>
                  <div class="group">
                  </div>
                </div>
              </div>
              <hr>
              <label for="">ອະສັງຫາທີ່ທ່ານເລືອກປະກາດຕອນນີ້</label>
              <div class="group">';
              if($online->num_rows > 0 ){
                while ($row_v = $online->fetch_assoc()) {
                  echo '<p>ປະເພດ: '. $row_v['real_type']." ". number_format($row_v['real_bprice'])."LAK - ວັນທີ່ສ້າງ ".$row_v['real_curdate'].'</p>';
                }
              }


              echo '</div>
              </div>
            </div>
          </div>';
      }else{
          echo '<script>
                  swal({
                  title: "ບໍ່ສາມາດລົງປະະກາດໄດ້!",
                  text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                  type: "error"
                  },
                  function(){
                  window.location="../Announced/Announced"
                  });
              </script>';
      }
      
    }else{
      echo '<script>
              swal({
              title: "ກະລຸນາເລືອກອະສັງຫາທີ່ຕ້ອງການກອນ!",
              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
              type: "info"
              },
              function(){
              window.location="../Announced/Announced"
              });
          </script>';
    }
    
  }
  
  ?>
</form>
<script>
  $(".closs").click(function(){
    $(".popup").toggle();
  });
  $(".closs-icon").click(function(){
    $(".popup").toggle();
  });
</script>
</body>
<text style="display: none">
<?PHP 
  include_once 'all-fuction.php';
?>
</text>
</html>