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
                          $uid = $_SESSION["admin_id"];
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
                      <a href="../dashboard/dashboard" class="nav-item nav-link">&nbsp;<i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</a>
                    <a href="../amount-money/money" class="nav-item nav-link">&nbsp;<i class="bi bi-cash-stack"></i> ຍອດລວມສຳລະ</a>

                      
                      <a href="../profile/list_user" class="nav-item nav-link active">&nbsp;<i class="bi bi-person-badge"></i> ພະນັກງານ</a>
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
                  <div class="header"><h3><i class="bi bi-person-badge"></i> ຈັດການຂໍ້ມູນພະນັກງານ</h3></div>
                  <hr>
              </div>
              <div class="group-list-user">
                <div class="text-user">
                  <h4 id="text-user">ລາຍຊື່ພະນັກງານ</h4>
                  <p id="text-about">ຂໍ້ມູນພະນັກງານທັ້ງໝົດໄດ້ຖືກເກັບກຳໃນນະທີນີ້</p>
                </div>
                <div class="group-btn">
                  <a href="New_admin" class="btn-sm btn-info"><i class="bi bi-person-plus-fill"></i> New</a>
                </div>
              </div>
              <div class="group-table">
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                  <div class="border-card">
                    <div class="list-users">
                      <div class="row">
                        <?PHP
                          $sql_admin_fc = mysqli_query($conn, "SELECT * FROM `Admin`");
                          foreach($sql_admin_fc as $line_row){
                        ?>
                        <div class="card-profile">
                          <div class="group-img-profile">
                            <img src="https://i.pinimg.com/originals/10/04/a2/1004a274da5fe93bf47d3b13f12625fa.jpg" id="img-backgroup">
                            <img src="upload/<?PHP $img =$line_row['admin_img']; if($img == ""){ echo "images.png";}else{echo $line_row['admin_img'];} ?>" id="img-pro">
                          </div>
                          <div class="about-profile">
                            <?PHP echo $line_row['ad_name']." ".$line_row['ad_lname']."<br>" ?>
                            <a href="mailto: <?PHP echo $line_row['admin_email'] ?>"><?PHP echo '<i class="bi bi-envelope-check-fill"></i> '.$line_row['admin_email']."<br>" ?></a>
                            <a href="https://wa.me/+856<?PHP echo $line_row['admin_tel'] ?>" target="_blank"><?PHP echo '<i class="bi bi-whatsapp"></i> +856 '.$line_row['admin_tel'] ?></a>
                          </div>
                          <div class="edit-profile">
                            <div class="padding-edit">
                              <div class="row">
                                <div class="grid-text">
                                  ຈັດການ :
                                </div>
                                <div class="grid-text">
                                  <?PHP
                                    $online = $line_row['admin_status'];
                                    if($online == "Admin"){
                                      echo '<a href="?offline='.$line_row['admin_id'].'" class="btn-sm btn-info online"><i class="bi bi-toggle-on"></i> Online</a>';
                                    }elseif($online == "AD-offline"){
                                      echo '<a href="?online='.$line_row['admin_id'].'" class="btn-sm btn-outline-danger offline"><i class="bi bi-toggle-off"></i> offline</a>';
                                      echo '<div class="offline-div">
                                              <label id="label-offline"><i class="bi bi-eye-slash-fill"></i>ປິດສະຖານະ</label>
                                            </div>';
                                    }
                                  ?>
                                </div>
                                <div class="grid-text">
                                  <a href="View-profile?view=<?PHP echo $line_row['admin_id'] ?>" class="btn-sm btn-primary"><i class="bi bi-eye-fill"></i> View</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?PHP } ?>
                      </div>
                    </div>
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