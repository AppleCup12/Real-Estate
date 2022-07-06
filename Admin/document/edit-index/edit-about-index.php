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
  <link rel="stylesheet" href="edit-index.css">
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
                  <a href="../profile/profile">
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
                            <span id="span"><?PHPecho $row['ad_name'] ?></span>
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
                  <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="../edit-index/edit-about-index" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-grid-1x2-fill"></i> ຈັດການໜ້າຫຼັກ</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="../edit-index-distric/edit-index-distric" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-distribute-horizontal"></i> ຈັດການໜ້າຫຼັກ ແຂວງ</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="../footer/footer" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-border-width"></i> ຈັດການ Footer</a>

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                &nbsp;
                <div class="group-popup">
                <form runat="server" method="POST">
                  <?PHP
                    include_once 'popup.php';
                  ?>
                              </form>

                </div>
                <div class="group">
                  <div class="text-user">
                    <h4 id="text-user"><i class="bi bi-grid-1x2-fill"></i> ຈັດການປຽນແປ່ງໂຄສະໜາປະເພດໜ້າສົນໃຈ ໜ້າຫຼັກ</h4>
                    <p id="text-about">ເພີມຂໍ້ມູນ ປະເພດອະສັງຫາ ກົດ New</p>
                    <div class="group-cate-btn new_category">
                    </div>
                  </div>
                  <!-- <button type="submit" name="save" class="btn-sm btn-warning btn-edit"><i class="bi bi-check2-square"></i> ເລືອກແກ້ໄຂ</button>
                  <button type="submit" name="save" class="btn-sm btn-info btn-position"><i class="bi bi-download"></i> ບັນທືກການປຽນແປ່ງ</button> -->
                  <hr>
                  &nbsp;
                  <div class="row">
                    <div class="row row_banner-pading">
                      <div class="col-md-4">
                        <?PHP 
                          $sql_top = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Ad_typetext` WHERE `ad_uid_text`='Top'"));
                        ?>
                        <div class="group-about-01">
                          <b><h4><input type="text" name="text-top-input" class="form-control" value="<?PHP echo $sql_top['ad_text'] ?>"></h4></b>
                          <label ><textarea name="text-top" id="" style="font-size: 11px " class="form-control" cols="30" rows="5"><?PHP echo $sql_top['ad_text_are'] ?></textarea></label>
                          <button name="save-input-top" class="btn-sm btn-info"><i class="bi bi-download"></i> ບັກທືກ</button>
                          <div class="hr"></div>
                        </div>
                        <?PHP
                          if(isset($_POST['save-input-top'])){
                            $sql_delete_top = mysqli_query($conn, "DELETE FROM `Ad_typetext` WHERE `ad_uid_text`='Top'");
                            if($sql_delete_top){
                              $text_top_input = mysqli_real_escape_string($conn, $_POST['text-top-input']);
                              $text_top = mysqli_real_escape_string($conn, $_POST['text-top']);
                              $sql_top = mysqli_query($conn, "INSERT INTO `Ad_typetext`(`ad_text`, `ad_text_are`, `ad_uid_text`) VALUES ('$text_top_input','$text_top','Top')");
                              if($sql_top){
                                echo '<script>
                                          swal({
                                            title: "ບັກທືກຂໍ້ມູນປະເພດ ສຳເລັດ!",
                                            text: "ກົດນີ້ເພືອ Reset.",
                                            type: "success"
                                          },
                                          function(){
                                            window.location="../edit-index/edit-about-index";
                                          });
                                        </script>';
                              }
                            }
                          }
                        ?>

                        <form method="POST" runat="server">
                          <div class="group-about-01">
                            <div class="layout-hover">
                              <?PHP
                                $show_one_type = $one_show['AM_type'];
                                $one_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as one_show FROM `Real-document` WHERE `real_type`='$show_one_type'"));
                              ?>
                              <div class="hover-layout"></div>
                              <label id="text-label"> <?PHP echo $one_show_sql['one_show'] ?> ຂໍ້ມູນ</label>
                              <h5 id="text-h5"><?PHP echo $one_show['AM_type'] ?></h5>
                              <h5 id="text-h5-clickview">ຍ່ຽມຊົມ</h5>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $one_show['AM_img'] ?>" style="width:100%; height:80%; border-radius:6px">
                            <a href="#show-insert=one " name="save-img-one" class="btn-sm btn-info" id="click-popup" style="color: #ffff"><i class="bi bi-download"></i> ປ່ຽນແປ່ງ</a>
                          </div>
                          <script>
                            imgInp.onchange = evt => {
                              const [file] = imgInp.files
                              if (file) {
                                blah.src = URL.createObjectURL(file)
                              }
                            }
                            $("#click-popup").click(function(){
                              $(".popup").toggle();
                            });
                            $(".closs").click(function(){
                              $(".popup").toggle();
                            });
                                                      
                          </script>
                        </form>
                        
                        <?PHP 
                          $sql_bottom = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Ad_typetext` WHERE `ad_uid_text`='Bottom'"));
                        ?>
                        <div class="group-about-01">
                          <b><h4><input type="text" name="text-bottom-input" class="form-control" value="<?PHP echo $sql_bottom['ad_text'] ?>"></h4></b>
                          <label ><textarea name="text-bottom" id="" style="font-size: 11px " class="form-control" cols="30" rows="5"><?PHP echo $sql_bottom['ad_text_are'] ?></textarea></label>
                          <button name="save-input" class="btn-sm btn-info"><i class="bi bi-download"></i> ບັກທືກ</button>
                          <div class="hr"></div>
                        </div>
                        <?PHP 
                          if(isset($_POST['save-input'])){
                            $sql_delete_bottom = mysqli_query($conn, "DELETE FROM `Ad_typetext` WHERE `ad_uid_text`='Bottom'");
                            if($sql_delete_bottom){
                              $text_bottom_input = mysqli_real_escape_string($conn, $_POST['text-bottom-input']);
                              $text_bottom = mysqli_real_escape_string($conn, $_POST['text-bottom']);
                              $sql_bottom = mysqli_query($conn, "INSERT INTO `Ad_typetext`(`ad_text`, `ad_text_are`, `ad_uid_text`) VALUES ('$text_bottom_input','$text_bottom','Bottom')");
                              if($sql_bottom){
                                echo '<script>
                                          swal({
                                            title: "ບັກທືກຂໍ້ມູນປະເພດ ສຳເລັດ!",
                                            text: "ກົດນີ້ເພືອ Reset.",
                                            type: "success"
                                          },
                                          function(){
                                            window.location="../edit-index/edit-about-index";
                                          });
                                        </script>';
                              }
                            }
                          }
                        ?>
                      </div>
                      <div class="col-md-4">
                      <form method="POST" runat="server">
                          <div class="group-about-01 about-02">
                            <div class="layout-hover">
                              <?PHP
                                $show_zero_type = $zero_show['AM_type'];
                                $zero_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as zero_show FROM `Real-document` WHERE `real_type`='$show_zero_type'"));
                              ?>
                              <div class="hover-layout"></div>
                              <label id="text-label"> <?PHP echo $zero_show_sql['zero_show'] ?> ຂໍ້ມູນ</label>
                              <h5 id="text-h5"><?PHP echo $zero_show['AM_type'] ?></h5>
                              <h5 id="text-h5-clickview">ຍ່ຽມຊົມ</h5>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $zero_show['AM_img'] ?>" style="width:100%; height:80%; border-radius:6px">
                            <a href="#show-insert=one " name="save-img-one" class="btn-sm btn-info" id="click-popup-zero" style="color: #ffff"><i class="bi bi-download"></i> ປ່ຽນແປ່ງ</a>
                          </div>
                          <script>
                            imgInp_zero.onchange = evt => {
                              const [file] = imgInp_zero.files
                              if (file) {
                                blah_zero.src = URL.createObjectURL(file)
                              }
                            }
                            $("#click-popup-zero").click(function(){
                              $(".popup-zero").toggle();
                            });
                            $(".closs-zero").click(function(){
                              $(".popup-zero").toggle();
                            });
                                                      
                          </script>
                        </form>
                          <div class="div-top"></div>
                        &nbsp;

                        <!-- Tow-office  -->
                        <form method="POST" runat="server">
                          <div class="group-about-01">
                            <div class="layout-hover">
                              <?PHP
                                $show_two_type = $two_show['AM_type'];
                                $two_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as two_show FROM `Real-document` WHERE `real_type`='$show_two_type'"));
                              ?>
                              <div class="hover-layout"></div>
                              <label id="text-label"> <?PHP echo $two_show_sql['two_show'] ?> ຂໍ້ມູນ</label>
                              <h5 id="text-h5"><?PHP echo $two_show['AM_type'] ?></h5>
                              <h5 id="text-h5-clickview">ຍ່ຽມຊົມ</h5>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $two_show['AM_img'] ?>" style="width:100%; height:80%; border-radius:6px">
                            <a href="#show-insert=one " name="save-img-one" class="btn-sm btn-info" id="click-popup-two" style="color: #ffff"><i class="bi bi-download"></i> ປ່ຽນແປ່ງ</a>
                          </div>
                          <script>
                            imgInp_two.onchange = evt => {
                              const [file] = imgInp_two.files
                              if (file) {
                                blah_two.src = URL.createObjectURL(file)
                              }
                            }
                            $("#click-popup-two").click(function(){
                              $(".popup-two").toggle();
                            });
                            $(".closs-two").click(function(){
                              $(".popup-two").toggle();
                            });
                                                      
                          </script>
                        </form>
                      </div>


                      <div class="col-md-4">

                      <!-- Three-office  -->
                      <form method="POST" runat="server">
                          <div class="group-about-01">
                            <div class="layout-hover">
                              <?PHP
                                $show_three_type = $three_show['AM_type'];
                                $three_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as two_show FROM `Real-document` WHERE `real_type`='$show_three_type'"));
                              ?>
                              <div class="hover-layout"></div>
                              <label id="text-label"> <?PHP echo $three_show_sql['two_show'] ?> ຂໍ້ມູນ</label>
                              <h5 id="text-h5"><?PHP echo $three_show['AM_type'] ?></h5>
                              <h5 id="text-h5-clickview">ຍ່ຽມຊົມ</h5>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $three_show['AM_img'] ?>" style="width:100%; height:80%; border-radius:6px">
                            <a href="#show-insert=one " name="save-img-one" class="btn-sm btn-info" id="click-popup-three" style="color: #ffff"><i class="bi bi-download"></i> ປ່ຽນແປ່ງ</a>
                          </div>
                          <script>
                            imgInp_three.onchange = evt => {
                              const [file] = imgInp_three.files
                              if (file) {
                                blah_three.src = URL.createObjectURL(file)
                              }
                            }
                            $("#click-popup-three").click(function(){
                              $(".popup-three").toggle();
                            });
                            $(".closs-three").click(function(){
                              $(".popup-three").toggle();
                            });
                                                      
                          </script>
                        </form>

                        <!-- flow-office  -->
                      <form method="POST" runat="server">
                          <div class="group-about-01">
                            <div class="layout-hover">
                              <?PHP
                                $show_flow_type = $flow_show['AM_type'];
                                $flow_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as flow_show FROM `Real-document` WHERE `real_type`='$show_flow_type'"));
                              ?>
                              <div class="hover-layout"></div>
                              <label id="text-label"> <?PHP echo $flow_show_sql['flow_show'] ?> ຂໍ້ມູນ</label>
                              <h5 id="text-h5"><?PHP echo $flow_show['AM_type'] ?></h5>
                              <h5 id="text-h5-clickview">ຍ່ຽມຊົມ</h5>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $flow_show['AM_img'] ?>" style="width:100%; height:80%; border-radius:6px">
                            <a href="#show-insert=one " name="save-img-one" class="btn-sm btn-info" id="click-popup-flow" style="color: #ffff"><i class="bi bi-download"></i> ປ່ຽນແປ່ງ</a>
                          </div>
                          <script>
                            imgInp_flow.onchange = evt => {
                              const [file] = imgInp_flow.files
                              if (file) {
                                blah_flow.src = URL.createObjectURL(file)
                              }
                            }
                            $("#click-popup-flow").click(function(){
                              $(".popup-flow").toggle();
                            });
                            $(".closs-flow").click(function(){
                              $(".popup-flow").toggle();
                            });
                                                      
                          </script>
                        </form>

                        <!-- fly-office  -->
                      <form method="POST" runat="server">
                          <div class="group-about-01">
                            <div class="layout-hover">
                              <?PHP
                                $show_fly_type = $fly_show['AM_type'];
                                $fly_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as fly_show FROM `Real-document` WHERE `real_type`='$show_fly_type'"));
                              ?>
                              <div class="hover-layout"></div>
                              <label id="text-label"> <?PHP echo $fly_show_sql['fly_show'] ?> ຂໍ້ມູນ</label>
                              <h5 id="text-h5"><?PHP echo $fly_show['AM_type'] ?></h5>
                              <h5 id="text-h5-clickview">ຍ່ຽມຊົມ</h5>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $fly_show['AM_img'] ?>" style="width:100%; height:80%; border-radius:6px">
                            <a href="#show-insert=one " name="save-img-one" class="btn-sm btn-info" id="click-popup-fly" style="color: #ffff"><i class="bi bi-download"></i> ປ່ຽນແປ່ງ</a>
                          </div>
                          <script>
                            imgInp_fly.onchange = evt => {
                              const [file] = imgInp_fly.files
                              if (file) {
                                blah_fly.src = URL.createObjectURL(file)
                              }
                            }
                            $("#click-popup-fly").click(function(){
                              $(".popup-fly").toggle();
                            });
                            $(".closs-fly").click(function(){
                              $(".popup-fly").toggle();
                            });
                                                      
                          </script>
                        </form>
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
<!-- img  -->



<i style="display: none">

</i>
<?PHP 
  if(isset($_POST['save-img-one'])){
    $file_name = $_FILES['']['name'];
    $file_tmp = $_FILES['']['tmp_name'];
    $uplaod = "../../../User-real/img/".$file_name;
    move_uploaded_file($file_tmp, $uplaod);
    $sql = mysqli_query($conn, "");
    if($sql){
      echo '<script>
            swal({
                title: "ປຽນແປ່ງຮູບພາບສຳເລັດ!",
                text: "ກົດເພືອ Reset.",
                type: "success"
              },
              function(){
                window.location="../edit-index/edit-about-index"
              });
          </script>';
    }else{
      echo '<script>
            swal({
                title: "ເປັນຮູບເດີມຢູ່ແລ້ວ!",
                text: "ກົດເພືອ Reset.",
                type: "warning"
              },
              function(){
                window.location="../edit-index/edit-about-index"
              });
          </script>';
    }
  }
?>
</body>


</html>