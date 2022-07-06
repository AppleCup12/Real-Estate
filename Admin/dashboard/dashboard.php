<?PHP  session_start(); 
  $uid = $_SESSION["admin_id"];
  if($uid){
  }else{
    header('Location: ../');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>REAL-ESTATE</title>
  <link rel="shortcut icon" href="../../assets/img/icon.PNG" width="500%" type="image/x-icon">

  <link rel="stylesheet" href="../../assets/css/maicons.css">

  <link rel="stylesheet" href="../../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/style/index.css">
  <link rel="stylesheet" href="../css/style_index.css">
  <link rel="stylesheet" href="../css/style_group.css">
  <link rel="stylesheet" href="list_user.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky1" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">ຈັດການເວບໄຊ & <span class="text-primary">real-estate. LAOS</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?PHP include_once '../header.php'; ?>

      </div>
    </nav>
    <div class="sb"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="page-banner home-banner-list">
            <div class="row align-items-center flex-wrap-reverse h-101">
              <nav class="nav-bar-list">
                  <div class="padding-list-nav">
                    <a href="../profile/profile">
                      <div class="d-flex align-items-center ms-4 mb-4 nav-user">
                        <?PHP 
                          include_once '../../assets/data/database.php';
                          // include_once '../../assets/data/price-time.php';
                          
                          $sql_admin = mysqli_query($conn, "SELECT * FROM `Admin` WHERE `admin_id`=$uid");
                          $row = mysqli_fetch_array($sql_admin);
                        ?>
                          <div class="position-relative">
                              <img class="rounded-circle" src="../profile/upload/<?PHP echo $row['admin_img'] ?>" alt="" style="width: 50px; height: 50px;">
                              <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                          </div>
                          <div class="ms-3">
                              <h6 class="mb-0"><?PHP echo $row['admin_name'] ?></h6>
                              <span id="span"><?PHP echo $row['ad_name'] ?></span>
                          </div>
                      </div>
                    </a>
                    <div class="navbar-nav w-100">
                      <a href="../dashboard/dashboard" class="nav-item nav-link active">&nbsp;<i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</a>
                      <a href="../amount-money/money" class="nav-item nav-link">&nbsp;<i class="bi bi-cash-stack"></i> ຍອດລວມສຳລະ</a>

                      
                      <a href="../profile/list_user" class="nav-item nav-link">&nbsp;<i class="bi bi-person-badge"></i> ພະນັກງານ</a>
                      <a href="../User-login/user-login" class="nav-item nav-link">&nbsp;<i class="bi bi-person-lines-fill"></i> ຜູ້ເຂົ້າໃຊ້ງານ</a>
                      <a href="../document/one-index" class="nav-item nav-link">&nbsp;<i class="bi bi-list-ol"></i> ຈັດເກັບຂໍ້ມູນ</a>
                      <!-- <a href="../update/update" class="nav-item nav-link">&nbsp;<i class="bi bi-postcard-heart"></i> ລໍການອັບເດດ&nbsp;
                        <label class="sms-show" style="font-size: 14px;background-color: red;color: #ffff; border-radius: 100%; width: 26px; height: 26px; text-align: center; position: absolute; padding: 3px">
                          <?PHP 
                              $newsletter = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`new_id`)as count FROM `newsletter`"));
                              $cc = "99";
                              if($cc >= $newsletter['count']){
                                echo $newsletter['count'];
                              }else{
                                echo "99+";
                              }
                          ?>
                        </label>
                      </a> -->
                      <a href="../confirm-real/confirm-real" class="nav-item nav-link">&nbsp;<i class="bi bi-card-checklist"></i> ຄວາມຄິດເຫັນ&nbsp;
                        <label class="sms-show" style="font-size: 14px;background-color: red;color: #ffff; border-radius: 100%; width: 26px; height: 26px; text-align: center; position: absolute; padding: 3px">
                          <?PHP 
                              $show_cound = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`cm_id`)as count FROM `comment`"));
                              $cc = "99";
                              if($cc >= $show_cound['count']){
                                echo $show_cound['count'];
                              }else{
                                echo "99+";
                              }
                          ?>
                        </label>
                      </a>
                    </div>
                  </div>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="page-banner banner-about">
            <div class="group-padding">
              <div class="group">
                  <div class="header"><h3><i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</h3></div>
                  <hr>
              </div>
              <div class="card">
                <div class="row">
                  <div class="column column-one">
                    <?PHP include_once 'chart-money.php' ?>
                    <label id="label-chart">ຕາລາງລາຍໄດ້ທັ້ງໝົດ</label>
                    <label id="label-chart-one"></label>
                  </div>
                  <div class="column column-one">
                    <label id="label-chart-two">ຕາລາງລາຍໄດ້ທັ້ງໝົດ</label>
                    <div class="card-column alr">
                      <i class="bi bi-cash"></i>
                      <label style="font-size: 16px;">ຍອດສຳລະແລ້ວ:</label>
                      <label style="font-size:18px; position: absolute; width: 65%; text-align: center; top: 12px"><?PHP echo number_format($ap_money_KIP) ?></label>
                      <label style="position: absolute; right: 2%">KIP</label>
                    </div>

                    <div class="card-column money">
                      <i class="bi bi-cash"></i>
                      <label style="font-size: 16px;">ຍອດເງີນຄ້າງສຳລະ:</label>
                      <label style="font-size:18px; position: absolute; width: 65%; text-align: center; top: 12px;"><?PHP echo number_format($Bl_amount_one) ?></label>
                      <label style="position: absolute; right: 2%">KIP</label>
                    </div>

                    <div class="card-column all-alr">
                      <i class="bi bi-cash"></i>
                      <label style="font-size: 16px;">ລາຍໄດ້ລວມ:</label>
                      <label style="font-size:18px; position: absolute; width: 65%; text-align: center; top: 12px;"><?PHP echo number_format($all) ?></label>
                      <label style="position: absolute; right: 2%">KIP</label>
                    </div>
                  </div>
                </div>
              </div>
              &nbsp;
              <div class="card">
                <div class="row">
                  <div class="column "></div>
                  <div class="column"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<?PHP
  if(isset($_GET['offline'])){
    $offline = $_GET['offline'];
    $up_offline = mysqli_query($conn, "UPDATE `Admin` SET `admin_status`='AD-offline' WHERE `admin_id`=$offline");
    if($up_offline){
      echo '<script>
          swal({
              title: "ປິດສະຖານະຜູ້ໃຊ້ ສຳເລັດ",
              text: "ກົດເພືອ Reset.",
              type: "success"
            },
            function(){
              window.location="../profile/list_user"
            });
        </script>';
    }
  }

  if(isset($_GET['online'])){
    $online = $_GET['online'];
    $up_online = mysqli_query($conn, "UPDATE `Admin` SET `admin_status`='Admin' WHERE `admin_id`=$online");
    if($up_online){
      echo '<script>
          swal({
              title: "ອອນໄລຣ໌ສະຖານະຜູ້ໃຊ້ ສຳເລັດ",
              text: "ກົດເພືອ Reset.",
              type: "success"
            },
            function(){
              window.location="../profile/list_user"
            });
        </script>';
    }
  }
?>

</html>