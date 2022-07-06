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
  <link rel="stylesheet" href="footer.css">
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
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="../map/one-map-real?show=show" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-map-fill"></i> ທີ່ຕັ້ງອະສັງຫາ</a>
                  <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="../edit-index/edit-about-index" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-grid-1x2-fill"></i> ຈັດການໜ້າຫຼັກ</a> -->
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="../edit-index-distric/edit-index-distric" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-distribute-horizontal"></i> ຈັດການໜ້າຫຼັກ ແຂວງ</a>
                  <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="../footer/footer" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-border-width"></i> ຈັດການ Footer</a>

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                &nbsp;
                <div class="group-popup">
                <form runat="server" method="POST">
                  <!-- <?PHP
                    include_once 'popup.php';
                  ?> -->
                </form>

                </div>
                </div>
                <div class="group">
                  <div class="text-user">
                    <h4 id="text-user"><i class="bi bi-border-width"></i> ຈັດການເພີມເຕີມຂອງ Footer</h4>
                    <p id="text-about">ຈັດການປຽນແປ່ງ ຫຼື ເພີມຂໍ້ມູນສຳລັບ Footer ໄດ້</p>
                    <div class="group-cate-btn new_category">
                    </div>
                  </div>
                  <form action="" method="post">
                  <div class="card">
                    <div class="row">
                        <div class="column column-one">
                            <label for=""><b>Column 01</b>&nbsp;<button name="column-01" class="btn-sm btn-info"><i class="bi bi-cloud-download"></i> ປ່ຽນແປງ</button></label>
                            <div class="row">
                                <?PHP 
                                    $show_url = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `footer_admin` WHERE `fm_uid`='about'"));
                                ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><i class="bi bi-facebook"></i> Fackbok</label>
                                        <input type="url" name="facebook" class="form-control control" value="<?PHP if($show_url){echo $show_url['link_fackbook'];}else{} ?>" placeholder="Link: Fackbook">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="bi bi-twitter"></i> Twitter</label>
                                        <input type="url" name="Twitter" class="form-control control" value="<?PHP if($show_url){echo $show_url['link_twitter'];}else{} ?>" placeholder="Link: Twitter">
                                    </div>
                                    <div class="form-group">
                                        <label>ຂໍ້ມູນເນື້ອຫາ</label>
                                        <textarea name="about" cols="19" rows="4" class="form-control"><?PHP if($show_url){echo $show_url['about'];}else{} ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><i class="bi bi-youtube"></i> Youtube</label>
                                        <input type="url" name="Youtube" class="form-control control" value="<?PHP if($show_url){echo $show_url['link_yiutube'];}else{} ?>" placeholder="Link: Youtube">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="bi bi-instagram"></i> Instagram</label>
                                        <input type="url" name="Instagram" class="form-control control" value="<?PHP if($show_url){echo $show_url['link_instagram'];}else{} ?>" placeholder="Link: Instagram">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="bi bi-google"></i> Google</label>
                                        <input type="url" name="Google" class="form-control control" value="<?PHP if($show_url){echo $show_url['link_google'];}else{} ?>" placeholder="Link: Google">
                                    </div>
                                </div>
                                <?PHP 
                                    if(isset($_POST['column-01'])){
                                        $facebook = $_POST['facebook'];
                                        $Twitter = $_POST['Twitter'];
                                        $Youtube = $_POST['Youtube'];
                                        $Instagram = $_POST['Instagram'];
                                        $Google = $_POST['Google'];
                                        $about = $_POST['about'];
                                        $sql_delete = mysqli_query($conn, "DELETE FROM `footer_admin` WHERE `fm_uid`='about'");
                                        if($sql_delete){
                                            $insert_about = mysqli_query($conn, "INSERT INTO `footer_admin`(`link_fackbook`, `link_twitter`, `link_yiutube`, `link_instagram`, `link_google`, `about`, `about_us`, `fm_uid`)
                                            VALUES ('$facebook','$Twitter','$Youtube','$Instagram','$Google','$about','','about')");
                                            if($insert_about){
                                                echo '<script>
                                                    swal({
                                                    title: "ປ່ຽນແປງຂໍ້ມູນ Link ສຳເລັດ!",
                                                    text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                                    type: "success"
                                                    },
                                                    function(){
                                                    window.location=""
                                                    });
                                                </script>';
                                            }
                                        }
                                    }
                                ?>
                                
                            </div>
                        </div>
                        <div class="column">
                            <label for=""><b>Column 02</b>&nbsp;<button name="column-02" class="btn-sm btn-info"><i class="bi bi-cloud-download"></i> ປ່ຽນແປງ</button></label>
                            <div class="group-form">
                                <label for="">US ເລືອກຜູ້ຕິດຕໍ່ຫາ</label>
                                <select name="about_us" class="form-control control" style="font-size: 14px">
                                    <?PHP
                                        $show_admin = mysqli_query ($conn, "SELECT * FROM `admin` WHERE `admin_status`='Admin'");
                                        foreach($show_admin as $row_admin){
                                    ?>
                                    <option value="<?PHP echo $row_admin['admin_id'] ?>"><?PHP echo $row_admin['ad_name']." ".$row_admin['ad_lname'] ?></option>
                                    <?PHP } ?>
                                </select>
                            </div>
                            &nbsp;
                            
                            <div class="group-form">
                                <label for="">ປະຈຸບັນ</label>
                                <p><?PHP 
                                    $show_admin_on = mysqli_fetch_array (mysqli_query($conn, "SELECT about_us FROM `footer_admin` WHERE `fm_uid`='about_us'"));
                                    if($show_admin_on){
                                        $fm_uid = $show_admin_on['about_us'];
                                        $admin = mysqli_fetch_array (mysqli_query($conn, "SELECT * FROM `admin` WHERE `admin_id`=$fm_uid"));
                                        if($admin){
                                            echo $admin['ad_name']."\n".$admin['ad_lname'];
                                            echo "<br>";
                                            echo "Tel: +856 ".$admin['admin_tel'];
                                            echo "<br>";
                                            echo "Email: ".$admin['admin_email'];
                                            echo "<br>";
                                            echo "ບ້ານ: ".$admin['admin_home'];
                                            echo "<br>";
                                            echo "ເມືອງ: ".$admin['admin_distric'];
                                            echo "<br>";
                                            echo "ແຂວງ: ".$admin['admin_village'];
                                            
                                        }
                                    }else{
                                        echo "ຍັງບໍ່ມີຂໍ້ມູນ!";
                                    }
                                ?></p>
                            </div>
                            <?PHP
                                if(isset($_POST['column-02'])){
                                    $about_us = $_POST['about_us'];
                                    $sql_delete = mysqli_query($conn, "DELETE FROM `footer_admin` WHERE `fm_uid`='about_us'");
                                    if($sql_delete){
                                        $sql = mysqli_query($conn, "INSERT INTO `footer_admin`(`link_fackbook`, `link_twitter`, `link_yiutube`, `link_instagram`, `link_google`, `about`, `about_us`, `fm_uid`) 
                                        VALUES ('#','#','#','#','#','#','$about_us','about_us')");
                                        if($sql){
                                            echo '<script>
                                                swal({
                                                title: "ປ່ຽນແປງຜູ້ຕິດຕໍ່ ສຳເລັດ!",
                                                text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                                type: "success"
                                                },
                                                function(){
                                                window.location=""
                                                });
                                            </script>';
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </div>
                  </div>
                  </form>
                  <hr>
                  &nbsp;
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  </form>
<!-- img  -->



<i style="display: none">

</i>

</body>


</html>