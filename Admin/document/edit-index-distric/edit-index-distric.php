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
  <link rel="stylesheet" href="index-distric.css">
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
                  <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="../edit-index-distric/edit-index-distric" role="tab" aria-controls="nav-index" aria-selected="false"><i class="bi bi-distribute-horizontal"></i> ຈັດການໜ້າຫຼັກ ແຂວງ</a>
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
                </div>
                <div class="group">
                  <div class="text-user">
                    <h4 id="text-user"><i class="bi bi-distribute-horizontal"></i> ຈັດການປຽນແປ່ງໂຄສະໜາປະເພດໜ້າສົນໃຈ ໜ້າຫຼັກ</h4>
                    <p id="text-about">ຈັດການປຽນແປ່ງໂຄສະໜາປະເພດໜ້າສົນໃຈ</p>
                    <div class="group-cate-btn new_category">
                    </div>
                  </div>
                  <!-- <button type="submit" name="save" class="btn-sm btn-warning btn-edit"><i class="bi bi-check2-square"></i> ເລືອກແກ້ໄຂ</button>
                  <button type="submit" name="save" class="btn-sm btn-info btn-position"><i class="bi bi-download"></i> ບັນທືກການປຽນແປ່ງ</button> -->
                  <hr>
                  &nbsp;
                  
                </div>
                <?PHP 

                    if(isset($_POST['save'])){
                        $input_01 = mysqli_real_escape_string($conn, $_POST['about-distric-01']);
                        $input_02 = mysqli_real_escape_string($conn, $_POST['about-distric-02']);
                        $delete_sql = mysqli_query ($conn, "DELETE FROM `ad_typetext` WHERE `ad_uid_text`='about-distr'");
                        $sql_input = mysqli_query($conn, "INSERT INTO `ad_typetext`( `ad_text`, `ad_text_are`, `ad_uid_text`) VALUES ('$input_01','$input_02','about-distr')");
                        if($sql_input){
                            echo '<script>
                                swal({
                                title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ໜື່ງ ສຳເລັດ!",
                                text: "ກົດນີ້ເພືອ Reset.",
                                type: "success"
                                },
                                function(){
                                window.location="";
                                });
                            </script>';
                        }
                    }
                    $show_about_distr = mysqli_fetch_array (mysqli_query($conn, "SELECT * FROM `ad_typetext` WHERE `ad_uid_text`='about-distr'"));
                ?>
                
                <div class="layout-distric">
                    <div class="row padding-group">
                        <div class="group-tex-distric">
                            <div class="text-align-dsitric">
                                <input type="text" name="about-distric-01" value="<?PHP echo $show_about_distr['ad_text'] ?>" class="form-control"><br>
                                <button name="save" class="btn-sm - btn-info"><i class="bi bi-cloud-download"></i> ບັກທືກ</button>
                            </div>
                        </div>
                        <div class="group-tex-distric-about">
                            <div class="text-align-dsitric">
                                <textarea name="about-distric-02" id="" class="form-control" cols="30" rows="5"><?PHP echo $show_about_distr['ad_text_are'] ?></textarea>
                            </div>
                    </div>
                    </div>
                    <div class="row padding-group">
                        <div class="column group-img-distric one">
                          <?PHP 
                              $show_one_type = $sql_show_one['AM_type'];
                              $one_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as one_show FROM `Real-document` WHERE `real_distric`='$show_one_type'"));
                          ?>
                            <div class="group-hover-text">
                              <div class="hover-text"></div>  
                              <div class="text-hover">
                                  <label><?PHP echo $one_show_sql['one_show'] ?> ຂໍ້ມູນ</label><br>
                                  <b><?PHP echo $sql_show_one['AM_type'] ?></b>
                              </div>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $sql_show_one['AM_img'] ?>" style="width: 180px; height: 280px; border-radius: 6px">
                            <script>
                              DIS_ONE.onchange = evt => {
                                const [file] = DIS_ONE.files
                                if (file) {
                                  mgdis_one.src = URL.createObjectURL(file)
                                }
                              }
                              $(".one").click(function(){
                                $(".popup-one").toggle();
                              });
                              $(".closs-one").click(function(){
                                $(".popup-one").toggle();
                              });
                            </script>
                        </div>


                        <div class="column group-img-distric two">
                          <?PHP 
                              $show_two_type = $sql_show_two['AM_type'];
                              $two_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as two_show FROM `Real-document` WHERE `real_distric`='$show_two_type'"));
                          ?>
                            <div class="group-hover-text">
                              <div class="hover-text"></div>  
                              <div class="text-hover">
                                  <label><?PHP echo $two_show_sql['two_show'] ?> ຂໍ້ມູນ</label><br>
                                  <b><?PHP echo $sql_show_two['AM_type'] ?></b>
                              </div>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $sql_show_two['AM_img'] ?>" style="width: 180px; height: 280px; border-radius: 6px">
                            <script>
                              DIS_TWO.onchange = evt => {
                                const [file] = DIS_TWO.files
                                if (file) {
                                  mgdis_two.src = URL.createObjectURL(file)
                                }
                              }
                              $(".two").click(function(){
                                $(".popup-two").toggle();
                              });
                              $(".closs-two").click(function(){
                                $(".popup-two").toggle();
                              });
                            </script>
                        </div>

                        <div class="column group-img-distric three">
                          <?PHP 
                              $show_three_type = $sql_show_three['AM_type'];
                              $three_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as three_show FROM `Real-document` WHERE `real_distric`='$show_three_type'"));
                          ?>
                            <div class="group-hover-text">
                              <div class="hover-text"></div>  
                              <div class="text-hover">
                                  <label><?PHP echo $three_show_sql['three_show'] ?> ຂໍ້ມູນ</label><br>
                                  <b><?PHP echo $sql_show_three['AM_type'] ?></b>
                              </div>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $sql_show_three['AM_img'] ?>" style="width: 180px; height: 280px; border-radius: 6px">
                            <script>
                              DIS_THREE.onchange = evt => {
                                const [file] = DIS_THREE.files
                                if (file) {
                                  mgdis_three.src = URL.createObjectURL(file)
                                }
                              }
                              $(".three").click(function(){
                                $(".popup-three").toggle();
                              });
                              $(".closs-three").click(function(){
                                $(".popup-three").toggle();
                              });
                            </script>
                        </div>

                        <div class="column group-img-distric flow">
                          <?PHP 
                              $show_flow_type = $sql_show_flow['AM_type'];
                              $flow_show_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as flow_show FROM `Real-document` WHERE `real_distric`='$show_flow_type'"));
                          ?>
                            <div class="group-hover-text">
                              <div class="hover-text"></div>  
                              <div class="text-hover">
                                  <label><?PHP echo $flow_show_sql['flow_show'] ?> ຂໍ້ມູນ</label><br>
                                  <b><?PHP echo $sql_show_flow['AM_type'] ?></b>
                              </div>
                            </div>
                            <img src="../../../User-real/img/<?PHP echo $sql_show_flow['AM_img'] ?>" style="width: 180px; height: 280px; border-radius: 6px">
                            <script>
                              DIS_FLOW.onchange = evt => {
                                const [file] = DIS_FLOW.files
                                if (file) {
                                  mgdis_flow.src = URL.createObjectURL(file)
                                }
                              }
                              $(".flow").click(function(){
                                $(".popup-flow").toggle();
                              });
                              $(".closs-flow").click(function(){
                                $(".popup-flow").toggle();
                              });
                            </script>
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

</body>


</html>