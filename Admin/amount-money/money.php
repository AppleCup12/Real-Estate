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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  <!-- container-one -->
  <link rel="stylesheet" href="money.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>

  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  <form method="POST" enctype="multipart/form-data">
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
                    <a href="../amount-money/money" class="nav-item nav-link active">&nbsp;<i class="bi bi-cash-stack"></i> ຍອດລວມສຳລະ</a>
                    
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
          <div class="page-banner home-banner-one">
            <div class="container-one">
                &nbsp;
              <div class="header"><h3><i class="bi bi-cash-stack"></i> ຍອດລວມສຳລະ</h3></div>
              <hr>
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-blockquote-right"></i> ລາຍການທີ່ສຳລະແລ້ວ</a>
                  <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="map/one-map-real?show=show" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-map-fill"></i> ທີ່ຕັ້ງອະສັງຫາ</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="edit-index/edit-about-index" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-grid-1x2-fill"></i> ຈັດການໜ້າຫຼັກ</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="edit-index-distric/edit-index-distric" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-distribute-horizontal"></i> ຈັດການໜ້າຫຼັກ ແຂວງ</a> -->

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                &nbsp;

                <div class="group">
                  <div class="text-user">
                    <h4 id="text-user"><i class="bi bi-cash-stack"></i> ຂໍ້ມູນຍອດລວມທີ່ສຳລະແລ້ວ</h4>
                    <p id="text-about">ກວດສອບຂໍ້ມູນຍອດເງີນລວມ ແລະ ສາມາດປຽນແປງເລດເງີນປະຈູບັນໄດ້</p>
                    <div class="row group-cate-btn new_category">
                        <?PHP 
                            $show_sm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time'"));
                        ?>
                      <div class="btn btn-sm btn-warning money-setting setiing_01 "><i class="bi bi-sliders"></i> ຈຳກັດເງີນໂຄສະນາ</div>
  
                      <div class="wid-show">
                        <div class="card-money-setting-show ">
                            <div class="about-real-time-money">
                                <div class="row">
                                    <i class="bi bi-cash-stack"></i>&nbsp;
                                    <div class="real-time-money-01" style="font-size: 18px; margin-top: 1px">ເລດເງີນປະຈຸບັນ: </div>
                                    <div class="real-time-money"><?PHP echo number_format($show_sm['ad_sm']) ?> KIP</div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="btn btn-sm btn-info money-setting show setiing_02"><i class="bi bi-sliders"></i> ເລດເງີນ</div>
                      <?PHP include_once 'money-setting.php'; ?>
                      <script>
                        $(".setiing_02").click(function(){
                            $('.popup').toggle();
                        })
                        $(".closs").click(function(){
                            $('.popup').toggle();
                        })

                        $(".setiing_01").click(function(){
                            $('.popup_01').toggle();
                        })
                        $(".closs_01").click(function(){
                            $('.popup_01').toggle();
                        })
                      </script>
                    </div>
                  </div>
                  <div class="card">
                    <div class="group-card">
                      <?PHP 
                        include_once 'chart-payment.php';
                      ?>
                    </div>
                  </div>
                </div>
                <div class="real_show_money">
                  <div class="row">
                    <div class="column row_column_show">
                      <div class="card-money-setting-show row_show">
                        <div class="about-real-time-money">
                          <div class="row">
                            <i class="bi bi-cash-stack"></i>&nbsp;
                            <div class="real-time-money-01" style="font-size: 18px; margin-top: 1px">ລາຍໄດ້ທັ້ງໝົດ LAK: </div>
                            <div class="real-time-money"><?PHP echo number_format($ap_money_KIP) ?> KIP</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column row_column_show">
                      <div class="card-money-setting-show row_show red">
                        <div class="about-real-time-money">
                          <div class="row">
                            <i class="bi bi-cash-stack"></i>&nbsp;
                            <div class="real-time-money-01" style="font-size: 18px; margin-top: 1px">ລາຍໄດ້ທັ້ງໝົດ THB: </div>
                            <div class="real-time-money"><?PHP echo number_format($ap_money).",00" ?> THB</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column row_column_show">
                      <div class="card-money-setting-show row_show green">
                        <div class="about-real-time-money">
                          <div class="row">
                            <i class="bi bi-cash-stack"></i>&nbsp;
                            <div class="real-time-money-01" style="font-size: 18px; margin-top: 1px">ຍອດເງີນຄ້າງໂຄສະນາລວມ LAK: </div>
                            <div class="real-time-money"><?PHP echo number_format($Bl_amount) ?> KIP</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column row_column_show">
                      <div class="card-money-setting-show row_show parimary">
                        <div class="about-real-time-money">
                          <div class="row">
                            <i class="bi bi-cash-stack"></i>&nbsp;
                            <div class="real-time-money-01" style="font-size: 18px; margin-top: 1px">ຍອດເງີນລວມທັ້ງໝົດ LAK: </div>
                            <div class="real-time-money"><?PHP echo number_format($all) ?> KIP</div>
                          </div>
                        </div>
                      </div>
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
  </form>
</body>

</html>