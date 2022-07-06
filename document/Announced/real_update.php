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
  <!-- <link rel="stylesheet" href="select.css" /> -->

  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/style/index.css">
  <link rel="stylesheet" href="../../assets/style/group-document.css">
  <link rel="stylesheet" href="../dasbord/dasbord.css">
  <link rel="stylesheet" href="../R-estate/R-estate.css">
  <!-- CSS only -->
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  
  <!-- Select Search -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--  -->
  <!-- ARGIS MAP -->
  
  <style>
    option{
      font-size: 14px;
    }
  </style>
 
</head>
<?PHP 
  include_once '../../assets/data/database.php';
  include_once '../../assets/data/price-time.php';

  $query_d = "SELECT * FROM `AM-dcm-distric`";
  $distric = $conn->query($query_d);

  if(isset($_GET['update'])){
    $update_uid = $_SESSION["user_id"];
    $update = $_GET['update'];
    $row_update = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_id`=$update and `user_uid`=$update_uid"));
  }
?>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <?PHP include_once '../header.php' ?>

  <form method="POST" enctype="multipart/form-data">

  <div class="bac"></div>
    <div class="container">
      <div class="row">
        <div class="page-banner home-banner1">
        <nav class="nav-bar-list">
              <div class="padding-list-nav">
                <a href="../profile/profile">
                  <div class="d-flex align-items-center ms-4 mb-4 nav-user">
                    <?PHP 
                      include_once '../../assets/data/database.php';
                      include_once '../../assets/data/price-time.php';
                      
                      $uid = $_SESSION["user_id"];
                      $sql_user = mysqli_query($conn, "SELECT * FROM `Users` WHERE user_id=$uid");
                      $row = mysqli_fetch_array($sql_user);
                    ?>
                      <div class="position-relative">
                          <img class="rounded-circle" src="../profile/upload/<?PHP echo $row['user_img'] ?>" alt="" style="width: 50px; height: 50px;">
                          <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                      </div>
                      <div class="ms-3">
                          <h6 class="mb-0"><?PHP echo $row['name'] ?></h6>
                          <span id="span"><?PHP echo $row['user_status'] ?></span>
                      </div>
                  </div>
                </a>
                <div class="navbar-nav w-100">
                  <a href="../dasbord/dasbord" class="nav-item nav-link">&nbsp;<i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</a>
                  <a href="../Pay-monney/Money" class="nav-item nav-link">&nbsp;<i class="bi bi-wallet2"></i> ຊຳລະເງີນ</a>
                  <a href="../R-estate/R-estate" class="nav-item nav-link">&nbsp;<i class="bi bi-cash-coin"></i> ອະສັງຫາ</a>
                  <a href="../Announced/Announced" class="nav-item nav-link active">&nbsp;<i class="bi bi-bookmark-plus"></i> ປະກາດຂອງທ່ານ</a>
                  <a href="../message/message" class="nav-item nav-link">&nbsp;<i class="bi bi-postcard-heart"></i> ລາຍການສອບຖາມຂໍ້ມູນ</a>
                  <a href="../Save-real/Save-real" class="nav-item nav-link">&nbsp;<i class="bi bi-bookmark-dash"></i> ປະກາດທີ່ບັນທືກໄວ້</a>
                </div>
              </div>
            </nav>
        </div>
        <div class="page-banner home-banner2">
            <div class="container-nav">
                <div class="header-R">
                    <h3><i class="bi bi-cash-coin "></i> ອັບເດດຂໍ້ມູນ ອະສັງຫາ</h3>
                    <!-- &nbsp; -->
                    <hr>
                </div>
                <div class="nav-r">
                    <nav>
                        &nbsp;
                        <a href="../" id="a1">ໜ້າແລກ</a> |
                        <a href="" id="a2">ອະສັງຫາ</a> |
                        <a href="#R-estate" id="a3">ສຳລັບການຂາຍໃນ</a> 
                    </nav>
                </div>
                &nbsp;
                <div class="card card-r01">
                    <div class="card card-r02"><h5 id="h5">ຂໍ້ມູນເບື່ອງຕົ້ນ</h5></div>
                    <div class="group-r">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="group1">
                                  <div class="btn-group-radio btn-group-toggle" data-toggle="buttons">
                                    <label class="btn active" style="display: none;">
                                      <input type="radio" name="r_radio" id="option1" value="<?PHP echo $row_update['r_radio']; ?>" autocomplete="off" checked> ເຊົ່າ
                                    </label>
                                    <label class="btn active">
                                      <input type="radio" name="r_radio" id="option1" value="ເຊົ່າ" autocomplete="off"> ເຊົ່າ
                                    </label>
                                    <label class="btn">
                                      <input type="radio" name="r_radio" id="option3" value="ຂາຍ" autocomplete="off"> ຂາຍ
                                    </label>
                                  </div>
                                </div>
                                &nbsp;
                                <div class="group">
                                    <label for="">ປະເພດອະສັງຫາ</label>
                                    <select name="real_type" class="form-control select" id="">
                                        <option value="<?PHP echo $row_update['real_type']; ?>"><?PHP echo $row_update['real_type']; ?></option>
                                        <?PHP 
                                          $category = mysqli_query($conn, "SELECT * FROM `AM-dcm-category`");
                                          foreach($category as $row_cate){
                                        ?>
                                        <option value="<?PHP echo $row_cate['dcm_category'] ?>"><?PHP echo $row_cate['dcm_category'] ?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                <div class="group">
                                    <label for="">ໂຄງການ</label>
                                    <input type="text" name="real_project" class="form-control" value="<?PHP echo $row_update['real_project']; ?>" placeholder="ປ່ອນໂຄງການ"> 
                                </div>
                                <div class="group">
                                    <label for="">ລາຄາ</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-cash-stack"></i></span>
                                        </div>
                                        <input type="number" name="real_bprice" class="form-control" value="<?PHP echo $row_update['real_bprice']; ?>" placeholder=" 1,000,000.00" required>
                                        <select name="Currency" class=" btn-sm" style="border: 1px solide black">
                                          <option value="<?PHP echo $row_update['real_currency'] ?>"><?PHP echo $row_update['real_currency'] ?></option>
                                          <option value="LAK">LAK</option>
                                          <option value="USD">USD</option>
                                          <option value="THB">THB</option>
                                          <option value="RMB">RMB</option>
                                          <option value="VND">VND</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="group-text">
                                    <label for="" id="p-text">ເທກນິກ:</label><label for=""> ກະລຸນາລົງລາຍລະອຽດໃນຊ່ອງ ຂາຍ ຫຼື ເຊົ່າ ເພືອເລືອກອະສັງຫາຂອງທ່ານ</label>
                                    <label for="" id="p-text">ເທກນິກ:</label><label for=""> ກະລຸນາເລືອກປະເພດທີ່ເໝາະສົມກັບຊະນິດອະສັງຫາຂອງທ່ານ</label>
                                    <label for="" id="p-text">ເທກນິກ:</label><label for=""> ກະລຸນາປ່ອນຂໍ້ມູນລົງໃນຊ່ອງ ໂຄງການ ຖ້າທ່ານເປັນໜ່າຍໜ້າ ເລກໂຄງການອະສັງຫາອ້າງອິງ ຖ້າບໍ່ແມ່ນ ໃຫ້ຂ້າມໄປ</label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="card card-r01">
                    <div class="card card-r02"><h5 id="h5">ສະຖານທີ່ຕັ້ງ</h5></div>
                    <div class="group-r">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label for="email">ແຂວງ:</label>
                              <select name="distric_id" id="country" class="form-control" onchange="FetchState(this.value)"  required>
                                <option value="<?PHP echo $row_update['real_distric']; ?>"><?PHP echo $row_update['real_distric']; ?></option>
                                <?php
                                  if ($distric->num_rows > 0 ) {
                                    while ($row_d = $distric->fetch_assoc()) {
                                      echo '<option value='.$row_d['dcm_distric_id'].'>'.$row_d['dcm_distric'].'</option>';
                                    }
                                  }
                                ?> 
                              </select>
                            </div>
                            <input type="hidden" name="real_distric" id="real_distric" value="<?PHP echo $row_update['real_distric']; ?>">
                            <input type="hidden" name="real_village" id="real_village" value="<?PHP echo $row_update['real_village']; ?>">
                            <input type="hidden" name="real_home" id="real_home" value="<?PHP echo $row_update['real_home']; ?>">
                            <!-- <script src="php/sqc-select.js"></script> -->
                            <div class="form-group">
                              <label for="pwd">ເມືອງ:</label>
                              <select name="state" id="state" class="form-control" onchange="FetchCity(this.value)"  required>
                                <option value="<?PHP echo $row_update['real_village']; ?>"><?PHP echo $row_update['real_village']; ?></option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="pwd">ບ້ານ:</label>
                              <select name="home" id="home" class="form-control">
                                <option value="<?PHP echo $row_update['real_home']; ?>"><?PHP echo $row_update['real_home']; ?></option>
                              </select>
                            </div>
                            <div class="group-map">
                              <div id="map-container-google-1" class="z-depth-1-half map-container" >
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d562050.5988456853!2d102.63989599330367!3d17.96867759507448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sth!2sus!4v1654151647264!5m2!1sth!2sus" width="520" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>  
                            </div>
                          </div>
                            <div class="col-md-4">
                                <div class="group-text">
                                    <label for="" id="p-text">ເທກນິກ:</label><label for=""> ກະລຸນາເລືອກທີ່ຕັ້ງຂອງ ອະສັງຫາ ຂອງທ່ານ ເພືອຄວາມສະດ່ວກໃນການຄົ້ນ</label>
                                    <label for="" id="p-text">ເທກນິກ:</label><label for=""> ເລີມຈາກການ ເລືອກທີ່ຕັ້ງ ແຂວງ, ເມືອງ ແລະ ບ້ານ</label>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  &nbsp;
                    <div class="card card-r01">
                      <div class="card card-r02"><h5 id="h5">ລາຍລະອຽດ</h5></div>
                      <div class="group-map group-r">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="group">
                              <label for="">ຫ້ອງ</label>
                              <input type="number" name="real_bedroom" class="form-control control" value="<?PHP echo $row_update['real_bedroom']; ?>" placeholder="ລະບຸຫ້ອງນອນ" required>
                            </div>
                            <div class="group">
                              <label for="">ຫ້ອງນ້ຳ</label>
                              <input type="number" name="real_bathroom" class="form-control control" value="<?PHP echo $row_update['real_bathroom']; ?>" placeholder="ລະບຸຫ້ອງນ້ຳ" required>
                            </div>
                            <div class="group">
                              <label for="">ຊັ້ນ</label>
                              <input type="number" name="real_floor" class="form-control control" value="<?PHP echo $row_update['real_floor']; ?>" placeholder="ລະບຸຊັ້ນເຮືອນ" required>
                            </div>
                            <div class="group">
                              <h4 for="">ຂະໜາດ ຕລ.ມ</h4>
                              
                              <div class="SQ-group">
                              <form id="sqfoot-form" novalidate="">
                                <style>
                                  .column-one{
                                    margin-left: 20px;
                                  }
                                </style>
                                <div class="row">
                                  <div class="column column-one">
                                    <label for="">ລວງຍາວ</label>
                                    <input type="number" min="0" name="real_width" id="width" class="SQ-input form-control" value="<?PHP echo $row_update['real_width']; ?>" required="required" pattern="\d+.?\d+"> 
                                  </div>
                                  <div class="column column-one">
                                    <label for="">ລວງກວ້າງ</label>
                                    <input type="number" min="0" name="real_height" id="height" class="SQ-input form-control"  value="<?PHP echo $row_update['real_height']; ?>" required="required" pattern="\d+.?\d+">
                                  </div>
                                  <div class="column column-one">
                                    <label for="">ເນື້ອທີ່</label>
                                    <select name="Area" id="" class="form-control">
                                      <option value="<?PHP echo $row_update['real_area']; ?>"><?PHP echo $row_update['real_area']; ?></option>
                                      <option value="ກມ^2">ກມ^2</option>
                                      <option value="ຕລ.ມ">ຕລ.ມ</option>
                                      <option value="m^2">m^2</option>
                                      <option value="Km^2">Km^2</option>
                                    </select>
                                  </div>
                                </div>
                                </form>
                                &nbsp;
                                <div class="group-SQ">
                                  <label id="label-width-SQ"><i class="bi bi-arrow-left"></i> Width <i class="bi bi-arrow-right"></i> </label>
                                  <div class="row">
                                    <div class="card card-SQ"></div>
                                    <div class="li">
                                      <div class="group"><i class="bi bi-arrow-up"></i></div>
                                      <div class="group">Height</div>
                                      <div class="group"><i class="bi bi-arrow-down"></i></div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                             
                              <!-- <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="bi bi-cash-stack"></i></span>
                                </div>
                                <input type="text" name="currency-field" class="form-control" id="currency-field" pattern="^\$\d{1,2}(,\d{2})*(\.\d+)?" value="" data-type="currency" placeholder="ຕລ.ມ 0,00">
                              </div> -->
                            </div>
                            

                          </div>
                          <div class="col-md-4">
                            <div class="group-text">
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ກະລຸນາປ່ອນຂໍ້ມູນລົງໃນຊ່ອງທີ່ແນະນຳ ເຊັ່ນ ຫ້ອງນອນ, ຫ້ອງນ້ຳ, ຊັ້ນເຮືອນ ເພືອໃຫ້ປະກາດຂອງທ່ານໜ້າສົນໃຈຍິງຂື້ນ</label>
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ຂະໜາດ ຕາຕະລາງກິໂລເມດ ກະລຸນາປ່ອນຂໍ້ມູນລົງໃນສອງຊ່ອງ ເພືອລະບຸຂະໜາດ ຂອງເນື້ອທີ້ ອະສັງກາຂອງທ່ານ Width: ຄືລວງຍາວ , Height: ຄືລວງສູງ</label>
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ເລືອກ ສາຖາລະນຸປະໂຜກ ເພືອລະບຸສັບສີນໃນ ອະສັງຫາ ຂອງທ່ານ ຈະຊ່ວຍໃຫ້ອະສັງຫາຂອງທ່ານ ໜ້າສົນໃຈຍິງຂື້ນ</label>
                            </div>
                          </div>
                          <div class="group-checkbox-radio">
                              <label for="">ສາຖາລະນຸປະໂຜກ</label>
                              <div class="group-checkbox">
                                <label class="checkbox">
                                  <input type="checkbox">
                                  ເຄືອງປັບອາກາດ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ລານບາບິຄິວ">
                                  ລານບາບິຄິວ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ກ້ອງວົງຈອນປິດ">
                                  ກ້ອງວົງຈອນປິດ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ຟິດເນັດ">
                                  ຟິດເນັດ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ສ່ວນນ້ອຍ">
                                  ສວນນ້ອຍ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ຫ້ອງສະມຸດ">
                                  ຫ້ອງສະມຸດ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ທີ່ຈອດລົດ">
                                  ທີ່ຈອດລົດ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ສະໜາມເດັກນ້ອຍ">
                                  ສະໜາມເດັກນ້ອຍ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ລະບົບຮັກສາຄວາມປອດໄພ">
                                  ລະບົບຮັກສາຄວາມປອດໄພ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ສະລ່ອຍນ້ຳ">
                                  ສະລ່ອຍນ້ຳ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ສະໜາມເທັນນິດ">
                                  ສະໜາມເທັນນິດ
                                </label>
                                <label class="checkbox">
                                  <input type="checkbox" name="real_checkbox[]" value="ລະບົບໄວ-ໄຟ">
                                  ລະບົບໄວ-ໄຟ
                                </label>
                                <label class="checkbox" style="display: none;">
                                  <input type="checkbox" name="real_checkbox[]" value="ຕິດຕໍ່ຫາເຮົາ" checked>
                                </label>

                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  &nbsp;
                  <div class="card card-r01">
                    <div class="card card-r02"><h5 id="h5">ຄຳອະທິບາຍ ຫົວຂໍ້ອະສັງຫາ</h5></div>
                      <div class="group-map group-r">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="group">
                              <label for="">ຫົວຂໍ້ອະສັງຫາ (<img src="https://cdn-icons-png.flaticon.com/512/330/330573.png" alt="" width="20px"> ພາສາລາວ)</label>
                              <input type="text" name="real_about_laos" class="form-control control" placeholder="ຫົວຂໍ້ອະສັງຫາ" value="<?PHP echo $row_update['real_about_laos']; ?>" required>
                              <label for="">ລາຍລະອຽດ (<img src="https://cdn-icons-png.flaticon.com/512/330/330573.png" alt="" width="20px"> ພາສາລາວ)</label>
                              <textarea name="about_laos" id="" class="textarea is-success form-control" cols="30" rows="10" value="<?PHP echo $row_update['about_laos']; ?>" placeholder="ລາຍລະອຽດ"></textarea>
                            </div>
                            &nbsp;
                            <div class="group">
                              <label for="">ຫົວຂໍ້ (<img src="https://cleandye.com/wp-content/uploads/2020/01/English-icon.png" alt="" width="20px"> English)</label>
                              <input type="text" name="real_about_english" class="form-control control" value="<?PHP echo $row_update['real_about_english']; ?>" placeholder="ຫົວຂໍ້ອະສັງຫາ">
                              <label for="">ລາຍລະອຽດ (<img src="https://cleandye.com/wp-content/uploads/2020/01/English-icon.png" alt="" width="20px"> English)</label>
                              <textarea name="about_english" id="" class="textarea is-success form-control" cols="30" rows="10" placeholder="Description"></textarea>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="group-text">
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ປ່ອນຂໍ້ມູນລາຍລະອຽດເພີມເຕີມກຽວກັບ ອະສັງຫາ ຂອງທ່ານເພືອໃຫ້ຜູ້ສົນໃຈເຂົ້າໃຈ ແລະ ໜ້າສົນໃຈຍິງຂື້ນ ຫຼື ຂ້າມຂັ້ນຕອນນີ້ໄປກໍໄດ້ເຊັ່ນກັນ</label>
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ປ່ອນຂໍ້ມູນເປັນພາສາລາວ ແລະ English ຕາມທີ່ສະດ່ວກແກ່ຜູ້ໃຊ້ພາສາຕ່າງໆ</label>
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ຂໍຂອບໃຈສຳລັບທີ່ໃຊ້ບໍລິການ ສາມາດກວດສອບຂໍ້ມູນໄດ້ທີ່ໜ້າ ປະກາດທີ່ບັນທືກໄວ້ ຂອງທ່ານ</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    &nbsp;
                  <div class="card card-r01">
                    <div class="card card-r02"><h5 id="h5">ຂໍ້ມູນເບື່ອງຕົ້ນ</h5></div>
                      <div class="group-map group-r">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="group">
                              <label for="">ເບີໂທຕິດຕໍ່ກັບ</label>
                              <input type="text" name="real_tel" class="form-control contorl" value="<?PHP echo $row_update['real_tel']; ?>" placeholder="+856 " required>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="group-text">
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ປ່ອນຂໍ້ມູນເບີໂທເປັນຂໍ້ມູນເບື່ອຕົ້ນ ເພືອໃຫ້ລູກຄ້າຕິດຕໍ່ກັບໃດ້</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  &nbsp;
                  <div class="card card-r01">
                    <div class="group-map group-r">
                      <label for="">ປະກາດ ເມືອທ່ານປະກາດຂໍ້ມູນອະສັງຫາ ຂໍ້ມູຈະຖືກເກັບໄວ້ໃນໜ້າ ລາຍການປະກາດຂອງທ່ານ ເພືອລໍຖ້າການຍືນຍັນຂອງທ່ານ</label>
                        <div class="group">
                          <button type="submit" name="save" class="btn btn-sm btn-primary"><i class="bi bi-bookmark-plus"></i> ປ່ຽນແປ່ງຂໍ້ມູນ ອະສັງກາຂອງທ່ານ</button>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="bac"></div>
            </div>
        </div>
      </div>
    </div>
    <?PHP include_once '../footer.php'; ?>

  </form>
  </header>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../../assets/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/js/google-maps.js"></script>

<script src="../../assets/vendor/wow/wow.min.js"></script>

<script src="../../assets/js/theme.js"></script>

<script src="sweetalert2.all.min.js"></script>

<script src="number.js"></script>

  
<!-- dropdown -->
<script>
  $(function(){
    $('#country').change(function(){
        var d = $('#country').val();
        $.get("php/real_distric.php",{
            real_distric : d
        },function(output){
            $("#real_distric").val(output);
        });
    });
  });
  $(function(){
    $('#state').change(function(){
        var v = $('#state').val();
        $.get("php/real_village.php",{
            real_village : v
        },function(output){
            $("#real_village").val(output);
        });
    });
  });
  $(function(){
    $('#home').change(function(){
        var h = $('#home').val();
        $.get("php/real_home.php",{
            real_home : h
        },function(output){
            $("#real_home").val(output);
        });
    });
  });
  
</script>
<script src="JS/main-dropdown.js"></script>
<script src="JS/Select-php.js"></script>
<script src="JS/main.js"></script>
<script src="JS/number.js"></script>
<script src="JS/main_select.js"></script>
<script src="JS/SQ-number.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>


</body>
<?php
  

  // Insert Real-document //
  if(isset($_POST['save'])){

    $real_checkbox = $_POST['real_checkbox'];
    $cdk = "";
    foreach($real_checkbox as $name_1){
      $cdk .= $name_1.", ";
    }

    $real_id = $row_update['real_id'];
    $uid = $_SESSION["user_id"];
    $r_radio = mysqli_real_escape_string($conn, $_POST['r_radio']);
    $real_type = mysqli_real_escape_string($conn, $_POST['real_type']);
    $real_project = mysqli_real_escape_string($conn, $_POST['real_project']);
    $real_bprice = mysqli_real_escape_string($conn, $_POST['real_bprice']);
    $Currency = mysqli_real_escape_string($conn, $_POST['Currency']);
    $real_distric = mysqli_real_escape_string($conn, $_POST['real_distric']);
    $real_village = mysqli_real_escape_string($conn, $_POST['real_village']);
    $real_home = mysqli_real_escape_string($conn, $_POST['real_home']);
    $real_bedroom = mysqli_real_escape_string($conn, $_POST['real_bedroom']);
    $real_bathroom = mysqli_real_escape_string($conn, $_POST['real_bathroom']);
    $real_floor = mysqli_real_escape_string($conn, $_POST['real_floor']);
    $real_width = mysqli_real_escape_string($conn, $_POST['real_width']);
    $real_height = mysqli_real_escape_string($conn, $_POST['real_height']);
    $Area = mysqli_real_escape_string($conn, $_POST['Area']);
    $real_about_laos = mysqli_real_escape_string($conn, $_POST['real_about_laos']);
    $about_laos = mysqli_real_escape_string($conn, $_POST['about_laos']);
    $real_about_english = mysqli_real_escape_string($conn, $_POST['real_about_english']);
    $about_english = mysqli_real_escape_string($conn, $_POST['about_english']);
    $real_tel = mysqli_real_escape_string($conn, $_POST['real_tel']);

    $insert_real = mysqli_query($conn, "UPDATE `Real-document` SET `r_radio`='$r_radio',`real_type`='$real_type',
    `real_project`='$real_project',`real_bprice`='$real_bprice',`real_currency`='$Currency',`real_distric`='$real_distric',`real_village`='$real_village',
    `real_home`='$real_home',`real_bedroom`='$real_bedroom',`real_bathroom`='$real_bathroom',`real_floor`='$real_floor',
    `real_width`='$real_width',`real_height`='$real_height',`real_area`='$Area',`real_checkbox`='$cdk',`real_about_laos`='$real_about_laos',
    `about_laos`='$about_laos',`real_about_english`='$real_about_english',`about_english`='$about_english',`real_tel`='$real_tel' 
    WHERE `user_uid`=$uid and `real_id`=$real_id");
    if($insert_real){
      echo '<script>
            swal({
            title: "ລົບປະກາດຂອງທ່ານແລ້ວ!",
            text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
            type: "success"
            },
            function(){
            window.location="../Announced/Announced"
            });
        </script>';
      }else{
        echo "<script>
            Swal.fire(
            'ປ່ຽນແປ່ງປະກາດ!',
            'ເກິດການຂັດຄ່ອງໃນການປ່ຽນແປ່ງປະກາດ ກະລຸນາລອງໄໝ່ອີກຄັ້ງພາຍຫຼັງ!',
            'warning'
              )
            </script>";
      }
    
  }


?>

</html>