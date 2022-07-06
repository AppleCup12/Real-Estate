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
  <link rel="stylesheet" href="about-real.css">
  <link rel="stylesheet" href="card-real.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<?php
  include_once '../../assets/data/database.php';
  include_once '../../assets/data/price-time.php';
  $uid = $_SESSION["user_id"];
    if(isset($_GET['uid'])){
        $uid = $_GET['uid'];
        $about_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real-document` WHERE real_id=$uid"));
    }
    
?>
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
            <li class="nav-item">
              <a class="nav-link" href="../index">ໜ້າຫຼັກ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../TYPE-REAL/type_real?about-one=0">ປະເພດລາຍການ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Gather/Gather">ສົນໃຈ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ກຽວກັບ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.me/+8562095188702" target="_blank" id="wa"><i class="bi bi-whatsapp"></i> +856 2095188702</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn btn btn-sm btn-primary"><i class="bi bi-file-earmark-person"></i> ຈັດການ</button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="../../document/dasbord/dasbord"><i class="bi bi-speedometer2"></i> ແດດບອກ</a>
                  <a href="../../document/profile/profile"><i class="bi bi-person-video2"></i> ໂປຣຟ່າຍ</a>
                  <a href="../../login"><i class="bi bi-box-arrow-right"></i> ອອກຈາກລະບົບ</a>
                </div>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="top"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="page-banner home-banner-show-about-real">
            <div class="column-about">
              <div class="row">
                    <div class=" w3-content">
                          <div class="row label">
                              <?PHP
                                $r_radio = $about_show['r_radio'];
                                if($r_radio == "ເຊົ່າ"){
                                  echo '<div class="text-radio-yellow">
                                      <b id="type-padding">ພ້ອມເຊົ່າ</b>
                                    </div>';
                                }elseif($r_radio == "ຂາຍ"){
                                  echo '<div class="text-radio-red">
                                        <b id="type-padding">ພ້ອມຂາຍ</b>
                                      </div>';
                                }
                              ?>
                              <div class="text-type">
                                  <b id="type-padding"><?PHP echo $about_show['real_type'] ?></b>
                              </div>
                              
                              <div class="box">
                                  <div class="box-img"><i class="bi bi-images"></i></div>
                                  <div class="box-location"><i class="bi bi-map"></i></div>
                              </div>
                            
                              
                          </div>
                          
                          <img class="mySlides" src="../../document/R-estate/upload_real/upload/<?PHP echo $about_show['real_img'] ?>" style="width:100%;">
                          <?PHP
                              $show_list_img = mysqli_query ($conn, "SELECT * FROM `real_upload` WHERE `real_id_up`=$uid");
                              foreach($show_list_img as $row_list_img){
                          ?>
                          <img class="mySlides" src="../../document/R-estate/upload_real/<?PHP echo $row_list_img['upload_mg'] ?>" style="width:100%;display:none">
                          <?PHP } ?>
                          
                          <div class="w3-row-padding w4-section">
                              <div class="like-view">
                                <div class="user_view">
                                  <label id="view"><i class="bi bi-eye-fill"></i>
                                    <?PHP
                                      $id_r = $about_show['real_id'];
                                      $view_id = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`View`)as view FROM `User_view` WHERE `real_uid`=$id_r"));
                                      echo $view_id['view'];
                                    ?>
                                    &nbsp;
                                    <i class="bi bi-heart-fill"></i>
                                    <?PHP
                                      $id_r = $about_show['real_id'];
                                      $view_id = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`cound_like`)as view_like FROM `User_like` WHERE `real_uid_k`=$id_r"));
                                      echo $view_id['view_like'];
                                    ?>
                                  </label>
                                </div>
                              </div>
                            <div class="row">
                              <div class="w4-col s4">
                                  <img class="demo w3-opacity w3-hover-opacity-off" src="../../document/R-estate/upload_real/upload/<?PHP echo $about_show['real_img'] ?>" onclick="currentDiv(1)">
                              </div>
                              <?PHP
                                  $show_list_img_one = mysqli_query ($conn, "SELECT * FROM `real_upload` WHERE `real_id_up`=$uid");
                                  $x = 2;
                                  foreach($show_list_img_one as $row_list_img_one){
                              ?>
                              <div class="w4-col s4">
                                  <img class="demo w3-opacity w3-hover-opacity-off" src="../../document/R-estate/upload_real/<?PHP echo $row_list_img_one['upload_mg'] ?>" onclick="currentDiv(<?PHP echo $x++ ?>)">
                              </div>
                              <?PHP } ?>
                              </div>
                              
                          </div>
                      </div>
                 
                      <?PHP
                                    $uid_about = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_id`=$uid"));
                                    $uid_img_about = $uid_about['user_uid'];
                                    $user_uid = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Users` WHERE `user_id`=$uid_img_about"));
                                    $Users = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Users`as s, `Real-document`as r WHERE s.user_id=$uid_img_about and r.real_id=$uid"));
                                  ?>
                                  <?PHP 
                                        $user_uid1 = $uid_about['user_uid'];
                                        $user_uid_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Users` WHERE `user_id`=$user_uid1"));
                                      ?>
              </div>
            </div>
        </div>
        <div class="page-banner home-banner-show-about-real">
          <div class="row">
            <div class="column colum-padding">
              <div class="card card-container">
                <div class="header-card"><label style="font-size: 20px">ຂໍ້ມູນຈຳເພາະອະສັງຫາ</label></div>
              </div>
              <div class="real-about">
                <div class="row">
                  <div class="column col-text">ໝວດໝູ່:</div>
                  <div class="column col-text-01"><?PHP echo $uid_about['real_type'] ?></div>
                </div>
                <div class="row">
                  <div class="column col-text">ສະຖານທີ່:</div>
                  <div class="column col-text-01"><?PHP echo $uid_about['real_home']." > ".$uid_about['real_village']." > ".$uid_about['real_distric'] ?></div>
                </div>
                <div class="row">
                  <div class="column col-text">ໂພດໂດຍ:</div>
                  <div class="column col-text-01"><?PHP echo $user_uid_show['name']." ".$user_uid_show['lname']?></div>
                </div>
                &nbsp;
              </div>
              <div class="card card-container">
                <div class="header-card"><label style="font-size: 20px">ລາຍລະອຽດອະສັງຫາ</label></div>
              </div>
              <div class="real-about">
                <div class="row">
                  <div class="column col-text-01"><?PHP echo $uid_about['real_about_laos'] ?></div>
                </div>
                <div class="row">
                  <div class="column col-text-01"><?PHP echo $uid_about['about_laos'] ?></div>
                </div>
                <div class="row">
                  <div class="column col-text-01"><?PHP echo $uid_about['real_about_english'] ?></div>
                </div>
                <div class="row">
                  <div class="column col-text-01"><?PHP echo $uid_about['about_english'] ?></div>
                </div>
                <div class="row">
                  <div class="column col-text-01"><?PHP echo $uid_about['real_bedroom']."ຫ້ອງນອນ / ".$uid_about['real_bathroom']."ຫ້ອງນ້ຳ / ".$uid_about['real_floor']."ຊັ້ນ" ?></div>
                </div>
                <div class="row">
                  <div class="column col-text-01"><?PHP echo $uid_about['real_checkbox'] ?></div>
                </div>
                <div class="row">
                  <div class="column col-text-01"><?PHP echo "ເນື້ອທີ່ ".$uid_about['real_width']."ຍ x ".$uid_about['real_height']."ຍ ".$uid_about['real_area'] ?></div>
                </div>
                <div class="row">
                  <div class="column-01 col-text-01">
                    <div class="widht-hieght" style="width: <?PHP echo $uid_about['real_width'] ?>px; height: <?PHP echo $uid_about['real_height'] ?>px;">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="column col-text-01"><?PHP echo "ສະຖານທີ່ຕັ້ງ ".$uid_about['real_home']." > ".$uid_about['real_village']." > ".$uid_about['real_distric'] ?></div>
                </div>
                <div class="row">
                  <div class="column col-text-01"><?PHP echo "ເບີຕິດຕໍ່: +856 ".$uid_about['real_tel'] ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="page-banner home-banner-show-about-real">
          <div class="row">
            <div class="column colum-padding">
              <div class="card card-container">
                <div class="header-card"><h5>Footer</h5></div>
              </div>
            </div>
          </div>
        </div>
        &nbsp;
        </div>
      <div class="col-md-4">
                      <div class="group-list-about">
                          <div class="card-user">
                              <div class="user-padding">
                             
                                <div class="group-about">ຂໍ້ມູນຜູ້<?PHPecho $Users['user_gender'] ?></div>
                                  <div class="group-user-uid">
                                      <div class="img">
                                          <img src="../../document/profile/upload/<?PHP echo $user_uid['user_img'] ?>" id="img-user-uid">
                                      </div>
                                      <div class="user_name-list">
                                        <div class="more">
                                          <a href="../../document/profile/view-profile?user_uid=<?PHP echo $Users['user_id'] ?>">ລາຍລະອຽດຜູ້<?PHP echo $Users['user_gender'] ?></a>
                                        </div>
                                        <b id="name"><?PHP echo $user_uid['name']?></b><br>
                                        <b id="lname"><?PHP echo $user_uid['lname'] ?></b>
                                      </div> 
                                  </div>
                                  <div class="hr-top"></div>
                                <div class="list_about-user">
                                    <label style="font-size: 20px; padding-top: 10px"><?PHP echo $uid_about['real_about_laos'] ?></label>

                                      <h4 style="color:red"> <?PHP echo number_format($uid_about['real_bprice'])."".$uid_about['real_currency'] ?></h4>
                                      <label style="font-size: 13px"><?PHP echo "ປະກາດ".$uid_about['r_radio']."ເມືອ ".$uid_about['real_curdate']." ທີ່ ".$uid_about['real_village'] ?> </label><br>
                                      <div class="group-ms">
                                        <div class="row">
                                          <div class="column col-ms"><label id="col-text"><a href="https://wa.me/+856<?PHP echo $uid_about['real_tel'] ?>" style="color: #ffff" target="_blank"><i class="bi bi-whatsapp"></i> ຂໍ້ຄວາມ</a></label></div>
                                          <div class="column col-save">
                                            <?PHP
                                                $save_view = $uid_about['real_id'];
                                                $uid_save = $_SESSION["user_id"]; 
                                                $se_save = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `User_save` WHERE `user_uid`=$uid_save AND `real_uid`=$save_view"));
                                                if($se_save){
                                                  echo '<div class="text-save">
                                                          <label style="font-size: 12px; text-align: center">ລົບ</label></div>
                                                        <label id="col-text"><a href="#deletesave='.$save_view.'" style="color: #ffff"><i class="bi bi-bookmark-heart-fill"></i></a></label>';
                                                }else{
                                                  echo '<div class="text-save">
                                                          <label style="font-size: 12px; text-align: center">ບັນທືກ</label></div>
                                                        <label id="col-text"><a href="#view_save='.$save_view.'" style="color: #ffff"><i class="bi bi-bookmark-heart"></i></a></label>';
                                                }
                                              ?>
                                            
                                          </div>
                                          <div class="column col-like">
                                            <?PHP
                                              $like_view = $uid_about['real_id'];
                                              $uid_k = $_SESSION["user_id"]; 
                                              $se_like_k = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `User_like` WHERE `user_uid_k`=$uid_k AND `real_uid_k`=$like_view"));
                                              if($se_like_k){
                                                echo '<div class="text-like">
                                                      <label style="font-size: 12px; text-align: center">ລົບໃຈ</label>
                                                    </div>
                                                    <label id="col-text"><a href="#deletelike='.$like_view.'" style="color: #ffff"><i class="bi bi-heart-fill"></i></a></label>';
                                              }else{
                                                echo '<div class="text-like">
                                                      <label style="font-size: 12px; text-align: center">ກົດໃຈ</label>
                                                    </div>
                                                    <label id="col-text"><a href="#like='.$like_view.'" style="color: #ffff"><i class="bi bi-heart"></i></a></label>';
                                              }
                                            ?>
                                            
                                          </div>
                                          <div class="column col-more"><label id="col-text"><a href="#more" style="color: #ffff"><i class="bi bi-three-dots"></i></a></label></div>
                                        </div>
                                      </div>
                                      <label style="font-size: 20px; padding-top: 10px">ລາຍລະອຽດ</label>
                                      <div class="group-about-check">
                                        <div class="about-laos" style="width: 240px">
                                          <label style="font-size: 14px"><?PHP echo $uid_about['about_laos'] ?></label><br>
                                          <label style="font-size: 14px"><?PHP echo $uid_about['about_english'] ?></label><br>
                                          <label style="font-size: 14px"><?PHP echo $uid_about['real_checkbox'] ?></label><br>
                                          <label style="font-size: 14px"><?PHP echo $uid_about['real_bedroom']." ຫ້ອງນອນ/ ".$uid_about['real_bathroom']." ຫ້ອງນ້ຳ/ ".$uid_about['real_floor']." ຊັ້ນ" ?></label><br>
                                          <label style="font-size: 14px"><?PHP echo "ເນື້ອທີ່ ".$uid_about['real_width']."ຍ x ".$uid_about['real_height']."ກ ".$uid_about['real_area'] ?></label><br>
                                          <label style="font-size: 14px"><a href="?tel=<?PHP echo $uid_about['real_id'] ?>">+856 <?PHP echo $uid_about['real_tel'] ?> <i class="bi bi-telephone-outbound-fill"></i></a></label><br>
                                        </div>
                                        <div class="hr-center"></div>
                                        <label><i class="bi bi-map-fill"></i> ສະຖານທີ່ຕັ້ງ</label><br>
                                        <label style="font-size: 14px"><?PHP echo $uid_about['real_home']." / ".$uid_about['real_village']." / ".$uid_about['real_distric'] ?></label>
                                        <label style="width: 100%">
                                          <div id="map-container-google-3" class="z-depth-1-half map-container-3">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d562050.5988456853!2d102.63989599330367!3d17.96867759507448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sth!2sus!4v1654151647264!5m2!1sth!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                          </div>
                                          <?PHP echo $uid_about['real_village'] ?><br>
                                          ຕຳແໜ່ງທີ່ຕັ້ງລະບຸໂດຍປະມານ
                                        </label>
                                      </div>

                                  </div>
                                  <div class="hr-bottom"></div>
                                  <form method="POST">
                                    <div class="group-messes">
                                      <?PHP 
                                        $user_uid = $uid_about['user_uid'];
                                        $user_uid_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Users` WHERE `user_id`=$user_uid"));
                                      ?>
                                      <label for="" style="margin-top: 10px"><i class="bi bi-chat-square-heart"></i> ສົງຂໍ້ຄວາມຫາຜູ້<?PHP echo $Users['user_gender'] ?></label>
                                      <input type="text" name="message" class="form-control control" value="ສົນໃຈອະສັງຫາຂອງທ່ານ!">
                                      <a href="mailto:<?PHP echo $user_uid_show['user_email'] ?>" class="btn-contorl control btn btn-sm btn-info"><i class="bi bi-chat-square-heart"></i> ສົງຂໍ້ຄວາມຜ່ານ Email</a>
                                    </div>
                                  </form>
                              </div>
                          </div>
                      </div>
      </div>

      </div>
      
  </header>

  

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../../assets/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/js/google-maps.js"></script>

<script src="../../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
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
<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
    }

    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-opacity-off";
    }
</script>

</body>


</html>