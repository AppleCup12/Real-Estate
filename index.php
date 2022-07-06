
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>REAL-ESTATE LAOS</title>
  <link rel="shortcut icon" href="assets/img/icon.PNG" width="500%" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
  <link rel="stylesheet" href="assets/style/index.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  <?PHP
  include_once 'assets/data/database.php';
  ?>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">Real <span class="text-primary">Estate. LAOS</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">ໜ້າຫຼັກ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="TYPE-REAL/type_real?about-one=0">ປະເພດລາຍການ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Gather">ສົນໃຈ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ກຽວກັບ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.me/+8562095188702" target="_blank" id="wa"><i class="bi bi-whatsapp"></i> +856 2095188702</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger ml-lg-2" href="register"><i class="bi bi-box-arrow-in-right"></i> ເຂົ້າສູລະບົບ</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">ສະບາຍດີ</h1>
            <p class="text-lg text-grey mb-5">ຍີນດີຕ້ອນຮັບທ່ານສູ່ Real Estate Laos ອະສັງຫາໜ້າສົນໃຈໃນປະເທດລາວ ທ່ານສາມາດເຂົ້າຍ່ຽມຊົມ ຫຼື ລົງປະກາດງ່າຍໆກັບພວກເຮົາໄດ່ເລີຍທີ່ນີ້</p>
            <a href="#" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="assets/img/IMG_4121.PNG" id="img-logo">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">ຍອດຜູ້ເຂົ້າຊົມສູງສຸດ</h5>
              <p>ຜູ້ສ້າງປະກາດທີ່ມີຜູ້ເຂົ້າຊົມສູງສຸດ ແລະ ໜ້າສົນໃຈຕ່າງໆຂອງອະສັງຫາ</p>
              <a href="" class="btn btn-primary">ຂໍ້ມູນເພີມເຕີມ</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-2.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">ສ້າງປະກາດ</h5>
              <p>ສ້າງປະກາດ ເພືອການມອງເຫັນທີ່ກວ່າງຂ່ວງແດ່ຜູ້ຍ່ຽມຊົມ ແລະ ການລົງໂຄສະນາໄດ້</p>
              <a href="login" class="btn btn-primary">ໄປທີ່ໜ້າຈັດການຂອງທ່ານ</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-3.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">ຄົ້ນຫາອະສັງຫາທີ່ໜ້າສົນໃຈ</h5>
              <p>ເພືອຄວາມສະດວກແດ່ການຊອກຫາ ອະສັງຫາໜ້າສົນໃຈແດ່ທ່ານ</p>
              <a href="TYPE-REAL/type_real?about-one=0" class="btn btn-primary">ໄປທີ່ໜ້າຄົ້ນຫາ</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- <div class="page-section" id="about">
    <div class="container">
      <?PHP 
        $one_type = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='one-type'")); 
        $type_uid_one = $one_type['AM_type'];
        $doc_one = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=2 AND `real_type`='$type_uid_one'"));

        $two_type = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='two-type'")); 
        $type_uid_two = $two_type['AM_type'];
        $doc_two = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=2 AND `real_type`='$type_uid_two'"));

        $three_type = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='three-type'")); 
        $type_uid_three = $three_type['AM_type'];
        $doc_three = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=2 AND `real_type`='$type_uid_three'"));

        $flow_type = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='flow-type'"));
        $type_uid_flow = $flow_type['AM_type'];
        $doc_flow = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=2 AND `real_type`='$type_uid_flow'"));

        $fly_type = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='fly-type'")); 
        $type_uid_fly = $fly_type['AM_type'];
        $doc_fly = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=2 AND `real_type`='$type_uid_fly'"));

        $zero_type = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='zero-type'")); 
        $type_uid_zero = $zero_type['AM_type'];
        $doc_zero = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_uid`=2 AND `real_type`='$type_uid_zero'"));

        $top_type = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typetext` WHERE `ad_uid_text`='top'")); 
        $bottom_type = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typetext` WHERE `ad_uid_text`='bottom'")); 
      ?>
      <div class="row align-items-center">
        <div class="column column-real-one">
          <div class="group-label">
            <h4><?PHP echo $top_type['ad_text'] ?></h4>
            <label for=""><?PHP echo $top_type['ad_text_are'] ?></label>
            <div class="bottom"></div>
          </div>

          <div class="group">
            <a href="TYPE-REAL/type_real?about-one='<?PHP echo $one_type['AM_type'] ?>'">
            <div class="card-img">
              <img src="User-real/img/<?PHP echo $one_type['AM_img'] ?>" alt="ຮູບພາບ" style="width: 100%; height: 250px ; border-radius: 6px">
              <div class="hr"></div>
              <label style="position: absolute; color: #ffff; top: 8%; left: 7%; font-size: 14px"><?PHP echo $doc_one['count'] ?> ຂໍ້ມູນ</label>
              <label style="position: absolute; color: #ffff; top: 15%; left: 7%"><?PHP echo $one_type['AM_type'] ?></label>
              <label style="position: absolute; color: #ffff; bottom: 10%; left: 7%">ເພີມເຕີມ</label>
            </div>
            </a>
          </div>

          <div class="group-label">
            <h4><?PHP echo $bottom_type['ad_text'] ?></h4>
            <label for=""><?PHP echo $bottom_type['ad_text_are'] ?></label>
            <div class="bottom"></div>
          </div>
        </div>
        <div class="column column-real-one">
          <div class="group zero">
            <a href="TYPE-REAL/type_real?about-one='<?PHP echo $zero_type['AM_type'] ?>'">
            <div class="card-img-zero">
              <img src="User-real/img/<?PHP echo $zero_type['AM_img'] ?>" alt="ຮູບພາບ" style="width: 100%; height: 520px ; border-radius: 6px">
              <div class="hr-zero"></div>
              <label style="position: absolute; color: #ffff; top: 8%; left: 7%; font-size: 14px"><?PHP echo $doc_zero['count'] ?> ຂໍ້ມູນ</label>
              <label style="position: absolute; color: #ffff; top: 15%; left: 7%"><?PHP echo $zero_type['AM_type'] ?></label>
              <label style="position: absolute; color: #ffff; bottom: 10%; left: 7%">ເພີມເຕີມ</label>
            </div>
            </a>
          </div>

          <div class="group">
            <a href="TYPE-REAL/type_real?about-one='<?PHP echo $two_type['AM_type'] ?>'">
            <div class="card-img">
              <img src="User-real/img/<?PHP echo $two_type['AM_img'] ?>" alt="ຮູບພາບ" style="width: 100%; height: 250px ; border-radius: 6px">
              <div class="hr"></div>
              <label style="position: absolute; color: #ffff; top: 8%; left: 7%; font-size: 14px"><?PHP echo $doc_two['count'] ?> ຂໍ້ມູນ</label>
              <label style="position: absolute; color: #ffff; top: 15%; left: 7%"><?PHP echo $two_type['AM_type'] ?></label>
              <label style="position: absolute; color: #ffff; bottom: 10%; left: 7%">ເພີມເຕີມ</label>
            </div>
            </a>
          </div>
        </div>
        <div class="column column-real-one">
          <div class="group">
            <a href="TYPE-REAL/type_real?about-one='<?PHP echo $three_type['AM_type'] ?>'">
            <div class="card-img">
              <img src="User-real/img/<?PHP echo $three_type['AM_img'] ?>" alt="ຮູບພາບ" style="width: 100%; height: 250px ; border-radius: 6px">
              <div class="hr"></div>
              <label style="position: absolute; color: #ffff; top: 8%; left: 7%; font-size: 14px"><?PHP echo $doc_three['count'] ?> ຂໍ້ມູນ</label>
              <label style="position: absolute; color: #ffff; top: 15%; left: 7%"><?PHP echo $three_type['AM_type'] ?></label>
              <label style="position: absolute; color: #ffff; bottom: 10%; left: 7%">ເພີມເຕີມ</label>
            </div>
            </a>
          </div>

          <div class="group">
            <a href="TYPE-REAL/type_real?about-one='<?PHP echo $flow_type['AM_type'] ?>'">
            <div class="card-img">
              <img src="User-real/img/<?PHP echo $flow_type['AM_img'] ?>" alt="ຮູບພາບ" style="width: 100%; height: 250px ; border-radius: 6px">
              <div class="hr"></div>
              <label style="position: absolute; color: #ffff; top: 8%; left: 7%; font-size: 14px"><?PHP echo $doc_flow['count'] ?> ຂໍ້ມູນ</label>
              <label style="position: absolute; color: #ffff; top: 15%; left: 7%"><?PHP echo $flow_type['AM_type'] ?></label>
              <label style="position: absolute; color: #ffff; bottom: 10%; left: 7%">ເພີມເຕີມ</label>
            </div>
            </a>
          </div>

          <div class="group">
            <a href="TYPE-REAL/type_real?about-one='<?PHP echo $fly_type['AM_type'] ?>'">
            <div class="card-img">
              <img src="User-real/img/<?PHP echo $fly_type['AM_img'] ?>" alt="ຮູບພາບ" style="width: 100%; height: 250px ; border-radius: 6px">
              <div class="hr"></div>
              <label style="position: absolute; color: #ffff; top: 8%; left: 7%; font-size: 14px"><?PHP echo $doc_fly['count'] ?> ຂໍ້ມູນ</label>
              <label style="position: absolute; color: #ffff; top: 15%; left: 7%"><?PHP echo $fly_type['AM_type'] ?></label>
              <label style="position: absolute; color: #ffff; bottom: 10%; left: 7%">ເພີມເຕີມ</label>
            </div>
            </a>
          </div>
         
        </div>
      </div>
    </div> 
  </div>  -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">ປະເພດລາຍການ</div>
        <h2 class="title-section">ປະເພດໜ້າສົນໃຈ</h2>
        <div class="divider mx-auto"></div>
      </div>

        <div class="row">
          <?PHP 
            $category = mysqli_query($conn, "SELECT * FROM `am-dcm-category` LIMIT 8");
            foreach($category as $category_row){
          ?>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <a href="TYPE-REAL/type_real?about-one='<?PHP echo $category_row['dcm_category'] ?>'">
              <div class="features">
                <div class="header mb-3">
                  <span class="mai-business"></span>
                </div>
                <h5><?PHP echo $category_row['dcm_category'] ?></h5>
                <p><?PHP echo $category_row['dcm_category'] ?> ຍ່ຽມຊົມອະສັງຫາປະເພດທີ່ທ່ານສົນໃຈໄດ້ເລີຍທີ່ນີ້</p>
              </div>
            </a>
          </div>
          <?PHP } ?>
        </div>

    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section banner-seo-check">
    <div class="wrap bg-image" style="background-image: url(assets/img/bg_pattern.svg);">
      <div class="container text-center">
        <div class="row justify-content-center wow fadeInUp">
          <div class="col-lg-8">
            <h2 class="mb-4">ຄວາມຄິດເຫັນຂອງທ່ານຕໍ່ເວບໄຊຣ໌</h2>
            <form method="POST">
              <input id="ticketNum" type="text" name="ticketNum01" list="defaultNumbers01"  class="form-control" style="border:none; font-size: 16px;" placeholder="ຄວາມຄິດເຫັນ">
              <span class="validity"></span>
              <datalist id="defaultNumbers01">
                <option value="ຄວາມຄິດເຫັນລ່າສຸດ">
                <?PHP 
                  $select_money = mysqli_query ($conn, "SELECT * FROM `comment` LIMIT 6 ");
                  foreach($select_money as $row_sm){
                ?>
                <option value="<?PHP echo $row_sm['cm_name'] ?>">
                <?PHP } ?>
                </datalist>
              <button name="comment" class="btn btn-success"><i class="bi bi-cursor-fill"></i> ສົງ</button>
            </form>
            <?PHP 
              if(isset($_POST['comment'])){
                $comment = $_POST['ticketNum01'];
                if($comment){
                  $insert_commnet = mysqli_query($conn, "INSERT INTO `comment`(`cm_name`, `cm_uid`, `user_uid`) VALUES ('$comment','1','0')");
                  if($insert_commnet){
                    echo ("<script LANGUAGE='JavaScript'>
                      window.alert('ຂອບໃຈທີ່ໃຫ້ຄວາມຄິດເຫັນ ພວກເຮົາຈະພັດເພືອຄວາມສະດ່ວກແດ່ທ່ານ ຂໍຂອບໃຈ');
                      window.location.href='';
                      </script>");
                  }
                }
              }
            ?>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">ອະສັງຫາໜ້າສົນໃຈ</div>
        <h2 class="title-section">ອະສັງຫາໜ້າສົນໃຈໃນປະເທດລາວ</h2>
        <div class="divider mx-auto"></div>
        <div class="row">
          <?PHP $about_dir = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_typetext` WHERE `ad_uid_text`='about-distr'")); ?>
          <div class="column one column-01">
            <p><?PHP echo $about_dir['ad_text'] ?></p>
            <div class="text"><?PHP echo $about_dir['ad_text_are'] ?></div><hr>
          </div>
          <?PHP
            $type_pot = mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type` IN ('one_dis','two_dis','three_dis','flow_dis')");
            foreach($type_pot as $row_post){
            $type_name =$row_post ['AM_type'];
            $show_count = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`real_id`)as count FROM `real-document` WHERE `real_distric`='$type_name' AND `real_uid`=2"))
          ?>
          <div class="column one column-02">
            <a href="TYPE-REAL/type_real?about-two='<?PHP echo $row_post['AM_type'] ?>'">
            <img src="User-real/img/<?PHP echo $row_post['AM_img'] ?>" alt="" style="width: 100%; height: 400px; border-radius: 6px">
            <div class="hover"></div>
            <label id="label-one"><?PHP echo $show_count['count'] ?> ຂໍ້ມູນ</label>
            <label id="label-two"><?PHP echo $row_post['AM_type'] ?></label>
            <label id="label-three">ເພີມເຕີມ</label>
            </a>
          </div>
          <?PHP } ?>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- Banner info -->
  <div class="page-section banner-info">
    <div class="wrap bg-image" style="background-image: url(assets/img/bg_pattern.svg);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
            <h2 class="title-section">Real Estate Laos <br> ອະສັງຫາໜ້າສົນໃຈໃນປະເທດລາວ</h2>
            <div class="divider"></div>
            <p>ຂໍ້ມູນເພີມເຕີມ ຄົ້ນຫາອະສັງຫາທີ່ໂດດເດັ່ນຂອງພວກເຮົາ ແລະ ຍັງສາດມາດລົງປະກາດໄດ້ງາຍຜ່ານເວັບໄຊຣ໌ນີ້ໄດ້ທັນທີ່.</p>
            
            <ul class="theme-list theme-list-light text-white">
              <li>
                <div class="h5">ການລົງປະກາດ</div>
                <p>ສ້າງອະສັງຫາ ເພືອລົງປະກາດຜ່ານເວບໄຊ້ນີ້ໄດ້ໂດຍການ ໄປທີ່ໜ້າຈັດການຂອງທ່ານ ແລ້ວທຳການສ້າງປະກາດເພືອລົງປະກາດໄດ້ເລີຍຕອນນີ້</p>
              </li>
              <li>
                <div class="h5">ອະສັງຫາໜ້າສົນໃຈ</div>
                <p>ເລືອກອະສັງຫາທີ່ທ່ານສົນໃຈ ແລ້ວທັກທາຍສອບຖາມຂໍມູນໄດ້ ເຊັ່ນ: whatsapp - Email ແລະ ຍັງສາດມາດກົດໃຈ ຫຼື ບັນທືກໄວ້ເພືອເບິງຍ້ອນຫຼັງໄດ້</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <div class="img-fluid text-center">
              <img src="assets/img/banner_image_2.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <!-- Blog -->
  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">ອະສັງຫາໜ້າສົນໃຈ</div>
        <h2 class="title-section">ອະສັງຫາໜ້າສົນໃຈໃນປະເທດລາວ</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5">
        <?PHP 
          $real = mysqli_query($conn, "SELECT * FROM `real-document` WHERE `real_uid`=2 ORDER BY rand() LIMIT 3");
          foreach($real as $row_real){
        ?>
        <div class="col-lg-4 py-3 wow fadeInUp">
          <a href="login">
            <div class="card-blog">
              <div class="header">
                <div class="post-thumb">
                  <img src="document/R-estate/upload_real/upload/<?PHP echo $row_real['real_img'] ?>" style="width: 100%; height: 200px">
                </div>
              </div>
              <div class="body">
                <h5 class="post-title"><a href="#"><?PHP echo $row_real['real_about_laos'] ?></a></h5>
                <div class="post-date">ໂພດເມືອ <a href="#"><?PHP echo $row_real['real_curdate'] ?></a></div>
              </div>
              <?PHP 
                if($row_real['r_radio'] == "ເຊົ່າ"){echo '<label id="label_real-one">ພ້ອມເຊົ່າ</label>';}elseif($row_real['r_radio'] == "ຂາຍ"){echo '<label id="label_real">ພ້ອມຂາຍ</label>';}
              ?>
              
            </div>
          </a>
        </div>
        <?PHP } ?>
        <div class="col-12 mt-4 text-center wow fadeInUp">
          <a href="TYPE-REAL/type_real?about-one=0" class="btn btn-primary">ຂໍ້ມູນເພີມເຕີມ</a>
        </div>
      </div>
    </div>
  </div>

  <?PHP include_once 'footer.php'; ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>
  
</body>
</html>