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

  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/style/index.css">
  <link rel="stylesheet" href="../../assets/style/group-document.css">
  <link rel="stylesheet" href="dasbord.css">
  <link rel="stylesheet" href="style.css">
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
                  <a href="../dasbord/dasbord" class="nav-item nav-link active">&nbsp;<i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</a>
                  <a href="../Pay-monney/Money" class="nav-item nav-link">&nbsp;<i class="bi bi-wallet2"></i> ຊຳລະເງີນ</a>
                  <a href="../R-estate/R-estate" class="nav-item nav-link">&nbsp;<i class="bi bi-cash-coin"></i> ອະສັງຫາ</a>
                  <a href="../Announced/Announced" class="nav-item nav-link ">&nbsp;<i class="bi bi-bookmark-plus"></i> ປະກາດຂອງທ່ານ</a>
                  <a href="../message/message" class="nav-item nav-link">&nbsp;<i class="bi bi-postcard-heart"></i> ລາຍການສອບຖາມຂໍ້ມູນ</a>
                  <a href="../Save-real/Save-real" class="nav-item nav-link">&nbsp;<i class="bi bi-bookmark-dash"></i> ປະກາດທີ່ບັນທືກໄວ້</a>
                </div>
              </div>
            </nav>
        </div>
        <div class="page-banner home-banner2">
          <div class="banner-padding">
            <div class="group-header"><h4><i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</h4></div><hr>
            <div class="card">
              <div class="row">
                <div class="column card-chart">
                    <?PHP include_once 'chart-all-about.php'; ?>
                </div>
                <div class="column list-about-alr">
                  <label id="header-chart-all-about">ຕາລາງຂໍ້ມູນຍອດເງີນທັ້ງໝົດ</label><hr>
                  <div class="card-about-alr green">
                    <i class="bi bi-cash" style="font-size: 28px"></i>
                    <div class="group-text">
                      <label for="">ຍອດສຳລະລວມ:</label>
                      <label style="text-align: center; width: 60%"><?PHP echo number_format($KIP) ?> KIP</label>
                      <label style="position: absolute; right: 2%">QTY</label>
                    </div>
                  </div>
                  &nbsp;
                  <div class="card-about-alr red">
                    <i class="bi bi-cash" style="font-size: 28px"></i>
                    <div class="group-text">
                      <label for="">ຍອດເງີນຄ້າງ:</label>
                      <label style="text-align: center; width: 60%"><?PHP echo number_format($balan) ?> KIP</label>
                      <label style="position: absolute; right: 2%">QTY</label>
                    </div>
                  </div>
                  &nbsp;
                  <div class="card-about-alr blue">
                    <i class="bi bi-cash" style="font-size: 28px"></i>
                    <div class="group-text">
                      <label for="">ຍອດລວມທັ້ງໝົດ:</label>
                      <label style="text-align: center; width: 60%"><?PHP echo number_format($amount) ?> KIP</label>
                      <label style="position: absolute; right: 2%">QTY</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            &nbsp;
            <div class="card">
              <div class="row">
                <div class="column card-chart">
                    <?PHP include_once 'chart-real.php'; ?>
                    <label id="header-chart-all-about " class="text-position"><b>ຕາຕະລາງອະສັງຫາ</b></label>
                </div>
                <div class="column list-about-alr">
                  <label id="header-chart-all-about">ຕາລາງຂໍ້ມູນອະສັງຫາ</label><hr>
                  <div class="row">
                    <div class="card-about-real real-red">
                      <!-- <i class="bi bi-cash" style="font-size: 28px"></i> -->
                      <div class="group-text-one">
                        <label for="">ລວມທັ້ງໝົດ:</label>
                        <label style="text-align: center; width: 45%"><?PHP echo number_format($all_real['Count']); ?></label>
                        <label style="position: absolute; right: 5%">QTY</label>
                      </div>
                    </div>

                    <div class="card-about-real real-bone">
                    <!-- <i class="bi bi-cash" style="font-size: 28px"></i> -->
                      <div class="group-text-one">
                        <label for="">ປະກາດແລ້ວ:</label>
                        <label style="text-align: center; width: 45%"><?PHP echo number_format($real_two['count']); ?></label>
                        <label style="position: absolute; right: 5%">QTY</label>
                      </div>
                    </div>

                    <div class="card-about-real real-green">
                    <!-- <i class="bi bi-cash" style="font-size: 28px"></i> -->
                      <div class="group-text-one">
                        <label for="">ລົບແລ້ວ:</label>
                        <label style="text-align: center; width: 45%"><?PHP echo number_format($real_zero['count']); ?></label>
                        <label style="position: absolute; right: 5%">QTY</label>
                      </div>
                    </div>

                    <div class="card-about-real real-blue">
                    <!-- <i class="bi bi-cash" style="font-size: 28px"></i> -->
                      <div class="group-text-one">
                        <label for="">ປົດສະຖານະ:</label>
                        <label style="text-align: center; width: 45%"><?PHP echo number_format($real_one['count']); ?></label>
                        <label style="position: absolute; right: 5%">QTY</label>
                      </div>
                    </div>

                    <div class="card-about-real real-wite">
                    <!-- <i class="bi bi-cash" style="font-size: 28px"></i> -->
                      <div class="group-text-one">
                        <label for="">ລໍການປະກາດ:</label>
                        <label style="text-align: center; width: 45%"><?PHP echo number_format($real_three['count']); ?></label>
                        <label style="position: absolute; right: 5%">QTY</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            &nbsp;
            <div class="card">
              <div class="row">
                <div class="column card-chart" style="width: 100%">
                    <?PHP include_once 'chart-view.php'; ?>
                    <label id="header-chart-all-about " class="text-position-one"><b>ຕາຕະລາງອະສັງຫາຍອດນິຍົມ</b></label>

                </div>
                
              </div>
            </div>

          </div>
          
          <?PHP include_once '../footer.php'; ?>

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