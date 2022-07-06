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
  <link rel="stylesheet" href="update.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky1" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">ຈັດການເວບໄຊ & <span class="text-primary">real-estate.</span></a>

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

                    
                    <a href="../profile/list_user" class="nav-item nav-link">&nbsp;<i class="bi bi-person-badge"></i> ພະນັກງານ</a>
                    <a href="../document/one-index" class="nav-item nav-link">&nbsp;<i class="bi bi-list-ol"></i> ຈັດເກັບຂໍ້ມູນ</a>
                    <a href="../update/update" class="nav-item nav-link active">&nbsp;<i class="bi bi-postcard-heart"></i> ລໍການອັບເດດ&nbsp;
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
                    </a>
                    <a href="../confirm-real/confirm-real" class="nav-item nav-link" style="position: relative;">&nbsp;<i class="bi bi-card-checklist"></i> ຄວາມຄິດເຫັນ&nbsp;
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
                  <div class="header"><h3>ຜູ້ໃຊ້ທີ່ລໍການອັບເດດ</h3></div>
                  <hr>
              </div>
              <div class="group-nav">
                <nav>
                  <a href="../dashboard/dashboard" id="a1">ໜ້າແລກ</a> |
                  <a href="" id="a2">ແອັບເດດ</a> |
                  <a href="#:+-+:LOVE" id="a3">ລໍການອັບເດດ</a> 
                </nav>
              </div>
              &nbsp;
              <div class="group-list-user">
                <div class="text-user">
                    <h4 id="text-user">ຜູ້ໃຊ້ທີ່ລໍການອັບເດດ</h4>
                    <p id="text-about">ເມືອມີການອັບເດດ ກະລຸນາສົງຜ່ານເມວທັ້ງໝົດ</p>
                  </div>
              </div>
              <div class="card">
                <?PHP 
                  $newsletter = mysqli_query ($conn, "SELECT * FROM `newsletter`");
                  $one = 1;
                  foreach($newsletter as $row_newsletter){
                ?>
                <div class="group-comment">
                  <div class="row">
                    <div class="column-one"><b><?PHP echo $one++ ?></b></div>
                    <div class="column-text"><?PHP echo $row_newsletter['new_email'] ?></div>
                    <div class="column-user"><a href="mailto:peun955@gmail.com; jiphay7@gmail.com">Email</a></div>
                  </div>
                </div>
                <div class="wiht"></div>
                <?PHP } ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </header>

</body>
</html>