<?PHP  session_start(); 
  $uid = $_SESSION["admin_id"];
  if($uid){
  }else{
    header('Location: ../../');
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
  <link rel="shortcut icon" href="../../../assets/img/icon.PNG" width="500%" type="image/x-icon">

  <link rel="stylesheet" href="../../../assets/css/maicons.css">

  <link rel="stylesheet" href="../../../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../../../assets/css/theme.css">
  <link rel="stylesheet" href="../../../assets/style/index.css">
  <link rel="stylesheet" href="../../css/style_index.css">
  <link rel="stylesheet" href="../../css/style_group.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  <!-- container-one -->
  <link rel="stylesheet" href="../style-one/one-index.css">
  <link rel="stylesheet" href="one-map.css">
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

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="btn btn-sm btn-info ml-lg-2" href="../dashboard/dashboard"><i class="bi bi-person-rolodex"></i> ຈັດການ</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger ml-lg-2" href="../../"><i class="bi bi-box-arrow-in-right"></i> ອອກຈາກລະບົບ</a>
            </li>
          </ul>
        </div>

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
                  <a href="../../profile/profile">
                    <div class="d-flex align-items-center ms-4 mb-4 nav-user">
                      <?PHP 
                        include_once '../../../assets/data/database.php';
                        $uid = $_SESSION["admin_id"];
                        $sql_admin = mysqli_query($conn, "SELECT * FROM `Admin` WHERE `admin_id`=$uid");
                        $row = mysqli_fetch_array($sql_admin);
                      ?>
                        <div class="position-relative">
                            <img class="rounded-circle" src="../../profile/upload/<?PHP echo $row['admin_img'] ?>" alt="" style="width: 50px; height: 50px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0"><?PHP echo $row['admin_name'] ?></h6>
                            <span id="span"><?PHP echo $row['ad_name'] ?></span>
                        </div>
                    </div>
                  </a>
                  <?PHP include_once '../left-bar.php'; ?>

                </div>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="page-banner home-banner-one">
            <div class="container-one">
              <div class="header"><h3>ຈັດການເວບໄຊ</h3></div>
              <hr>
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="../one-index" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-blockquote-right"></i> ປະເພດອະສັງຫາ</a>
                  <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="../map/one-map-real?show=show" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-map-fill"></i> ທີ່ຕັ້ງອະສັງຫາ</a>
                  <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="../edit-index/edit-about-index" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-grid-1x2-fill"></i> ຈັດການໜ້າຫຼັກ</a> -->
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="../edit-index-distric/edit-index-distric" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-distribute-horizontal"></i> ຈັດການໜ້າຫຼັກ ແຂວງ</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="../footer/footer" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-border-width"></i> ຈັດການ Footer</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"></a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                &nbsp;
                
                <div class="group">
                  <div class="text-user">
                    <h4 id="text-user"><i class="bi bi-map-fill"></i> ເພີມຂໍ້ມູນສະຖານທີ່</h4>
                    <p id="text-about">ທີ່ຕັ້ງອະສັງຫາ ທ່ານສາມາດຈັດການ ເພີມ ຫຼື ລົບຂໍ້ມູນບ້ານເມືອງແຂວງ ໄດ້ເພືອຄວາມສະດວກແກ່ຜູ້ເຂົ້າໃຊ້ງານ</p>
                    <div class="group-cate-btn new_category">
                    </div>
                  </div>
                  <div class="row">
                      <?PHP include_once 'table-distric.php' ?>
                      <?PHP include_once 'table-village.php' ?>
                      <?PHP include_once 'table-home.php' ?>
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


<i style="display: none">
<?PHP 
  if(isset($_POST['delete_distric'])){
    $dis_checkbox = $_POST['dis_checkbox'];
      if($dis_checkbox){
        $cdk_dis = "";
        foreach($dis_checkbox as $name_dis){
        $cdk_dis .= $name_dis.",";
          }
        $query_se_home = mysqli_query($conn, "SELECT dcm_village_id FROM `AM-dcm-village` WHERE `distric_id` IN($cdk_dis 0)");
        $cdk_home = "";
        foreach($query_se_home as $name_home){
          $cdk_home .= $name_home['dcm_village_id'].",";
        }
        $query_dele_home = mysqli_query($conn, "DELETE FROM `AM-dcm-home` WHERE `village_id` IN($cdk_home 0)");
        if($query_dele_home){
          $query_dele_vil = mysqli_query($conn, "DELETE FROM `AM-dcm-village` WHERE `distric_id` IN($cdk_dis 0)");
          if($query_dele_vil){
            $query_dele_dis = mysqli_query($conn, "DELETE FROM `AM-dcm-distric` WHERE `dcm_distric_id` IN($cdk_dis 0)");
            echo '<script>
                  swal({
                  title: "ລົບປະຂໍ້ມູນແຂ່ວງສຳເລັດ!",
                  text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                  type: "success"
                  },
                    function(){
                    window.location="../map/one-map-real"
                  });
                </script>';
            }
        }
        
      }elseif($dis_checkbox == 0){
        
      }
  }

  // Village //

  if(isset($_POST['delete_village'])){
    $vil_checkbox = $_POST['vil_checkbox'];
      if($vil_checkbox){
        $cdk_vil = "";
        foreach($vil_checkbox as $name_vil){
        $cdk_vil .= $name_vil.",";
          }
        $query_dele_home = mysqli_query($conn, "DELETE FROM `AM-dcm-home` WHERE `village_id` IN($cdk_vil 0)");
        if($query_dele_home){
          $query_dele_vil = mysqli_query($conn, "DELETE FROM `AM-dcm-village` WHERE `dcm_village_id` IN($cdk_vil 0)");
            echo '<script>
                  swal({
                  title: "ລົບປະຂໍ້ມູນເມືອງສຳເລັດ!",
                  text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                  type: "success"
                  },
                    function(){
                    window.location="../map/one-map-real"
                  });
                </script>';
        }
        
      }elseif($vil_checkbox == 0){
        
      }
  }

  // Home //

  if(isset($_POST['delete_home'])){
    $home_checkbox = $_POST['home_checkbox'];
      if($home_checkbox){
        $cdk_home = "";
        foreach($home_checkbox as $name_home){
        $cdk_home .= $name_home.",";
          }
        $query_dele_home = mysqli_query($conn, "DELETE FROM `AM-dcm-home` WHERE `dcm_home_id` IN($cdk_home 0)");
        if($query_dele_home){
            echo '<script>
                  swal({
                  title: "ລົບປະຂໍ້ມູນບ້ານສຳເລັດ!",
                  text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                  type: "success"
                  },
                    function(){
                    window.location=""
                  });
                </script>';
        }
        
      }elseif($home_checkbox == 0){
        
      }
  }
?>
</i>
</body>

</html>