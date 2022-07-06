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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  
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

        <? include_once '../../header.php'; ?>

      </div>
    </nav>
    <div class="sb"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="page-banner home-banner-list">
            <div class="row align-items-center flex-wrap-reverse h-101">
              <nav class="nav-bar-list">
                  <a href="../profile/profile">
                    <div class="d-flex align-items-center ms-4 mb-4 nav-user">
                      <?PHP 
                        include_once '../../../assets/data/database.php';
                        $uid = $_SESSION["admin_id"];
                        $sql_admin = mysqli_query($conn, "SELECT * FROM `Admin` WHERE `admin_id`=$uid");
                        $row = mysqli_fetch_array($sql_admin);
                      ?>
                        <div class="position-relative">
                            <img class="rounded-circle" src="../../profile/upload/<?echo $row['admin_img'] ?>" alt="" style="width: 50px; height: 50px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0"><? echo $row['admin_name'] ?></h6>
                            <span id="span"><? echo $row['ad_name'] ?></span>
                        </div>
                    </div>
                  </a>
                  <?PHP include_once '../left-bar.php'; ?>

              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="page-banner home-banner-one">
            <div class="container-one">
              <div class="header"><h3><i class="bi bi-map"></i> ເພີມຂໍ້ມູນແຜ່ນທີ່</h3></div>
              <hr>
              <div class="group-nav">
                <nav>
                  <a href="../dashboard/dashboard" id="a1">ໜ້າແລກ</a> |
                  <a href="" id="a2">ທີ່ຕັ້ງ</a> |
                  <a href="#:+-+:LOVE" id="a3">ຈັດການເວບໄຊ</a> 
                </nav>
              </div>

              &nbsp;
            <form action="" method="POST">
              <div class="group">
                <div class="card">
                  <div class="group-card">
                    <div class="text-user">
                      <h4 id="text-user"><i class="bi bi-map"></i> ເພີມຂໍ້ມູນແຜ່ນທີ່ ໃນປະເທດ</h4>
                      <p id="text-about">ເພີມຂໍ້ມູນ ບ້ານ ເມືອງ ແຂວງ ໃນການນຳໃຊ້ງານແຜ່ນທີ່</p>
                    </div><hr>
                    <div class="row">
                      <div class="col-md-8 md">
                        <div class="group">
                          <label for="">ແຂວງ</label>
                          <input type="text" name="District" class="form-control control" placeholder="ປ່ອນຊື່ແຂວງ">
                          <button stype="submit" name="district" class="btn btn-sm btn-info btn-district" >ບັນທືກແຂວງ 
                            <?PHP 
                              if(isset($_POST['district'])){
                                $district = mysqli_real_escape_string($conn, $_POST['District']);
                                if($district){
                                  $dcm_distric = mysqli_query($conn, "INSERT INTO `AM-dcm-distric`(`dcm_distric`, `dcm_distric_uid`) VALUES ('$district','1')");
                                  echo '<div class="alert-distric alert-success" role="alert">
                                        ບັນທືກແຂວງ ສຳເລັດ....
                                      </div>';
                                }elseif($district == ""){
                                  echo '<div class="alert-distric alert-danger" role="alert">
                                        ບັນທືກແຂວງ ບໍ່ສຳເລັດ....
                                      </div>';
                                }
                              }
                            ?>
                          </button>
                          
                        </div>
                        <!-- village -->
                        &nbsp;
                        <div class="group">
                          <?php
                            $query_d = "SELECT * FROM `AM-dcm-distric`";
                            $distric = $conn->query($query_d);
                          ?>
                          <label for="">ເມືອງ <a href="" class="btn-format">Format</a></label>
                          <select name="distric_id" id="distric_id"  class="form-control control select-distric" onchange="FetchState(this.value)" >
                            <option value="#">ກະລຸນາເລືອກແຂວງ</option>
                            <?php
                              if ($distric->num_rows > 0 ) {
                                while ($row_d = $distric->fetch_assoc()) {
                                  echo '<option value='.$row_d['dcm_distric_id'].'>'.$row_d['dcm_distric'].'</option>';
                                }
                              }
                            ?> 
                          </select>
                          <?PHP 
                            if(isset($_POST['btn_village'])){
                              $village = mysqli_real_escape_string($conn, $_POST['village']);
                              if($village){
                                $input_dt = mysqli_real_escape_string($conn, $_POST['distric_id']);
                                $dcm_village = mysqli_query($conn, "INSERT INTO `AM-dcm-village`(`dcm_village`, `dcm_village_uid` , `distric_id`) VALUES ('$village','1','$input_dt')");
                                echo '<div class="alert-distric alert-success" role="alert">
                                    ບັນທືກເມືອງ ສຳເລັດ....
                                    </div>';
                                  echo $village ." ".$input_dt;
                              }elseif($village == ""){
                                echo '<div class="alert-distric alert-danger" role="alert">
                                      ບັນທືກເມືອງ ບໍ່ສຳເລັດ....
                                      </div>';
                              }
                            }
                          ?>
                          <div class="group-distric">
                          <script>
                            $(document).ready(function(){
                              $(".select-distric").change(function(){
                                  $(this).find("option:selected").each(function(){
                                      var optionValue = $(this).attr("value");
                                      if(optionValue){
                                          $(".box").not("." + optionValue).hide();
                                          $("." + optionValue).show();
                                      } else{
                                          $(".box").hide();
                                      }
                                    });
                                }).change();
                              });
                          </script>
                          <?  
                              $select_distric_01 = mysqli_query($conn, "SELECT * FROM `AM-dcm-distric`");
                              foreach($select_distric_01 as $show_distric_01){
                            ?>
                            <div class="<? echo $show_distric_01['dcm_distric_id'] ?> box" style=" display: none;">ເລືອກແຂວງ <strong><b><? echo $show_distric_01['dcm_distric'] ?></b></strong>
                                <div class="group">
                                  <button stype="submit" name="btn_village" class="btn btn-sm btn-info btn-district" >ບັນທືກເມືອງ
                                    
                                  </button>
                                </div>
                            </div>
                            
                            <?}?>
                            <input type="text" name="village" class="form-control control" placeholder="ປ່ອນຊື່ເມືອງ:.......">
                          </div>
                        </div>
                              
                        <!-- Home... -->
                        &nbsp;
                        <div class="group">
                          <label for="">ບ້ານ <a href="" class="btn-format">Format</a></label>
                          <select name="home_id" id="home_id"  class="form-control control select-village" onchange="FetchCity(this.value)"  >
                            <option value="#">ກະລຸນາເລືອກເມືອງ</option>
                            
                          </select>
                          <?PHP 
                            if(isset($_POST['btn_home'])){
                              $home = mysqli_real_escape_string($conn, $_POST['home']);
                              if($home){
                                $home_id = mysqli_real_escape_string($conn, $_POST['home_id']);
                                $dcm_village = mysqli_query($conn, "INSERT INTO `AM-dcm-home`(`dcm_home`, `dcm_home_uid` , `village_id`) VALUES ('$home','1','$home_id')");
                                echo '<div class="alert-distric alert-success" role="alert">
                                    ບັນທືກບ້ານ ສຳເລັດ....
                                    </div>';
                              }elseif($home == ""){
                                echo '<div class="alert-distric alert-danger" role="alert">
                                      ບັນທືກບ້ານ ບໍ່ສຳເລັດ....
                                      </div>';
                              }
                            }
                          ?>
                          <div class="group-distric">
                          <script>
                            $(document).ready(function(){
                              $(".select-village").change(function(){
                                  $(this).find("option:selected").each(function(){
                                      var optionValue = $(this).attr("value");
                                      if(optionValue){
                                          $(".box").not("." + optionValue).hide();
                                          $("." + optionValue).show();
                                      } else{
                                          $(".box").hide();
                                      }
                                    });
                                }).change();
                              });
                          </script>
                          <?  
                              $select_village_01 = mysqli_query($conn, "SELECT * FROM `AM-dcm-village`");
                              foreach($select_village_01 as $show_village_01){
                            ?>
                            <div class="<? echo $show_village_01['dcm_village_id'] ?> box" style=" display: none;">ເລືອກເມືອງ <strong><b><? echo $show_village_01['dcm_village'] ?></b></strong>
                                <div class="group">
                                  <button stype="submit" name="btn_home" class="btn btn-sm btn-info btn-district" >ບັນທືກເມືອງ
                                    
                                  </button>
                                </div>
                            </div>
                            
                            <?}?>
                            <input type="text" name="home" class="form-control control" placeholder="ປ່ອນຊື່ບ້ານ:.......">
                          </div>

                        </div>
                        <div class="group">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for=""><b>ເທັກນິກ</b><br><label for="">ກະລຸນາປ່ອນຂໍ້ມູນລົງໃນຊ່ອງ ແຂວງ ເພືອທີ່ຈະສາມາດໄປບັນທືກ ເມືອງ ແລະ ບ້ານຕໍ່ໃດ້</label></label>
                        &nbsp;
                        <label for=""><b>ເທັກນິກ</b><br><label for="">ກະລຸນາເລືອກກົດ "Format" ເລືອກ 'ແຂວງ' ເພືອທີ່ຈະສາມາດໄປບັນທືກ ເມືອງ ແລະ ບ້ານຕໍ່ໃດ້</label></label>
                        &nbsp;
                        <label for=""><b>ເທັກນິກ</b><br><label for="">ກະລຸນາເລືອກກົດ "Format" ເລືອກ 'ເມືອງ' ເພືອທີ່ຈະສາມາດໄປບັນທືກ ຊື່ບ້ານໃດ້</label></label>
                        &nbsp;
                        <label for=""><b><i class="bi bi-emoji-heart-eyes"></i> ຂອບໃຈທີ່ເຮັດຕາມເທັກນິກ ທີ່ແນະນຳ</b></label>
                      </div>
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

<script type="text/javascript">
  function FetchState(id){
    $('#home_id').html('');
    $('#home_id').html('<option>Select home</option>');
    $.ajax({
      type:'post',
      url: 'sql.php',
      data : { home_id : id},
      success : function(data){
         $('#home_id').html(data);
      }

    })
  }

  function FetchCity(id){ 
    $('#home').html('');
    $.ajax({
      type:'post',
      url: 'sql.php',
      data : { home : id},
      success : function(data){
         $('#home').html(data);
      }

    })
  }

</script>
  
</body>
</html>