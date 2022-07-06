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
  
 
</head>
<?PHP 
  include_once '../../assets/data/database.php';
  include_once '../../assets/data/price-time.php';
  if(isset($_GET['update_img'])){
    $update_uid = $_SESSION["user_id"];
    $update = $_GET['update_img'];
    $row_update = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_id`=$update and `user_uid`=$update_uid"));
  }
?>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <?PHP include_once '../header.php' ?>


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
                    <form method="POST" enctype="multipart/form-data">

                      <div class="group-map group-r">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="group">
                              <label for="">ອັບໂຫຼດຮູບໜ້າຫຼັກ ອະສັງຫາ</label>
                              <div class="label-upload-img"><label for="file" id="file-img" style="cursor: pointer;"><p id="text"><i class="bi bi-house-heart"></i> ເລືອກຮູບພາບ</p></label></div>
                              <div class="profile">
                                <!-- <img src="upload/<?PHP $img_us = $row['user_img']; if($img_us == $img_us){echo $row['user_img'];}else if($img_us == "1"){echo "images.png";} ?>" id="img_user" alt=""> -->
                                <p><input type="file" accept="image/*" name="file_name" id="file" value="0" onchange="loadFile(event)" style="display: none;" required></p>
                                <img id="output" src="../R-estate/upload_real/upload/<?PHP echo $row_update['real_img']; ?>" width="200" />
                                <label for=""><b>Size: 255 x 145</b><br> ຮູບນີ້ຈະເປັນ ຮູບໜ້າປົກການປະກາດ ອະສັງກາຂອງທ່ານ<br>ແນະນຳຂະໜາດຮູບ: ກ255 * ສ145</label>
                                <label for=""><?PHP echo $row_update['real_img']; ?></label>

                                <script>
                                    var loadFile = function(event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    };
                                </script>
                                <button type="submit" name="img" class="btn btn-sm btn-info"><i class="bi bi-house-heart"></i> ປຽນແປ່ງຮູບພາບ</button>
                                <p></p>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-4">
                            <div class="group-text">
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ກະລຸນາກົດທີ່ອັບໂຫຼດຮູບໜ້າຫຼັກ ອະສັງຫາ ເພືອເລືອກຮູບມາເປັນໜ້າຫຼັງໃນການລົງປະກາດຂອງທ່ານ ແນະນຳຂະໜາດຮູບ: ກ255 * ສ145</label>
                              <label for="" id="p-text">ເທກນິກ:</label><label for=""> ສຳຂັນ ກະລຸນາເລືອກ ອັບໂຫຼດຮູບຕົວຢ່າງບໍລະເວລາ ອະສັງຫາຂອງທ່ານ ເພືອໃຫ້ຜູ້ເຂົ້າຊົມໃຫ້ເຫັນຕົວບໍລິເວນບ້ານບ້ານ ແນະນຳ ເລືອກບໍ່ເກິນ 5ຮູບ </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>

                  &nbsp;
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card card-r01">
                        <div class="group-map group-r">
                            <div class="group">
                                <label for="">ອັບໂຫຼດຮູບຕົວຢ່າງບໍລະເວລາ ອະສັງຫາຂອງທ່ານ</label>
                                <input type="file" name="file[]" id="file" class="form-control control" multiple>
                                <div class="profile">
                                    <?PHP
                                        $select_img = mysqli_query ($conn, "SELECT * FROM `real_upload` WHERE `real_id_up`=$update and `user_uid_up`=$uid");
                                        foreach($select_img as $row_img){
                                    ?>
                                    <img id="output" src="../R-estate/upload_real/<?PHP echo $row_img['upload_mg']; ?>" width="150" />
                                    <?PHP } ?>
                                </div>
                            </div>
                            &nbsp;
                            <div class=""><label for="">ປະກາດ ເມືອທ່ານປະກາດຂໍ້ມູນອະສັງຫາ ຂໍ້ມູຈະຖືກເກັບໄວ້ໃນໜ້າ ລາຍການປະກາດຂອງທ່ານ ເພືອລໍຖ້າການຍືນຍັນຂອງທ່ານ</label></div>
                            <div class="group">
                            <button type="submit" name="img_about" class="btn btn-sm btn-primary"><i class="bi bi-bookmark-plus"></i> ປຽນແປ່ງຮູບພາບ ປະກາດຂອງທ່ານ</button>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
              <div class="bac"></div>
            </div>
        </div>
      </div>
    </div>
    <?PHP include_once '../footer.php'; ?>

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
  if(isset($_POST['img'])){
    $img = $row_update['real_img'];
        $real_id = $row_update['real_id'];
        $uid = $_SESSION["user_id"];

        $file_name = $_FILES['file_name']['name'];
        $tmp_name = $_FILES['file_name']['tmp_name'];
        $upload_img = "../R-estate/upload_real/upload/".$file_name;
        move_uploaded_file($tmp_name, $upload_img);
    
        $insert_real = mysqli_query($conn, "UPDATE `Real-document` SET `real_img`='$file_name' WHERE `real_id`=$real_id AND `user_uid`=$uid");
        if($insert_real){
            echo '<script>
                    swal({
                    title: "ປ່ຽນແປ່ງຮູບພາບໜ້າຫຼັກສຳເລັດ!",
                    text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                    type: "success"
                    },
                    function(){
                    window.location="../Announced/update_img?update_img='.$real_id.'"
                    });
                </script>';
        }else{
            echo "<script>
                Swal.fire(
                'ປ່ຽນແປ່ງຮູບໜ້າຫຼັກ!',
                'ເກິດການຂັດຄ່ອງໃນການປ່ຽນແປ່ງຮູບໜ້າຫຼັກ ກະລຸນາລອງໄໝ່ອີກຄັ້ງພາຍຫຼັງ!',
                'warning'
                )
                </script>";
        }
    
  }

        if(isset($_POST['img_about'])){
            $file = $_FILES['file']['name'];
            if($file = 1<1000){
                $real_id = $row_update['real_id'];
                $uid = $_SESSION["user_id"];
                $up_delete = mysqli_query($conn,"DELETE FROM `real_upload` WHERE `user_uid_up`=$uid AND `real_id_up`=$real_id ");

                if($up_delete){
                    $countfiles = count($_FILES['file']['name']);
                    for($i=0;$i<$countfiles;$i++){
                        $filename = $_FILES['file']['name'][$i];
                        $sql_upload = "INSERT INTO `real_upload`(`upload_mg`, `user_uid_up`, `real_id_up`) VALUES ('$filename','$uid','$real_id')";
                        $conn->query($sql_upload);
                        move_uploaded_file($_FILES['file']['tmp_name'][$i],'../R-estate/upload_real/'.$filename);
                        if($sql_upload){
                        echo '<script>
                                swal({
                                title: "ປ່ຽນແປ່ງຮູບພາບໜ້າຫຼັກສຳເລັດ!",
                                text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                type: "success"
                                },
                                function(){
                                window.location="../Announced/update_img?update_img='.$row_update['real_id'].'"
                                });
                            </script>';
                        }else{
                        echo "<script>
                                Swal.fire(
                                'ບັນທືກປະກາດ!',
                                'ເກິດການຂັດຄ່ອງໃນການບັນທືກປະກາດ ກະລຸນາລອງໄໝ່ອີກຄັ້ງພາຍຫຼັງ!',
                                'warning'
                                )
                                </script>";
                        }
                    }
                }else{
                    echo "ລົບໄດ້ແລ້ວ";
                }
            }
        }

?>

</html>