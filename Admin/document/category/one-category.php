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

        <?PHP include_once '../../header.php'; ?>

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
              <div class="group-nav">
                <nav>
                  <a href="../../dashboard/dashboard" id="a1">ໜ້າແລກ</a> |
                  <a href="../one-index" id="a2">ຈັດການເວບໄຊ</a> |
                  <a href="#:+-+:LOVE" id="a3">ຈັດການເວບໄຊ</a> 
                </nav>
              </div>

              &nbsp;
            <form method="POST">
              <div class="group">
                <div class="card">
                  <div class="group-card">
                    <div class="text-user">
                      <h4 id="text-user"><i class="bi bi-blockquote-right"></i> ເພີມຂໍ້ມູນປະເພດອະສັງຫາ</h4>
                      <p id="text-about">ເພີມຂໍ້ມູນ ປະເພດອະສັງຫາ</p>
                    </div><hr>
                    <div class="row">
                      <div class="col-md-8">
                        <label for="">ປະເພດອະສັງຫາ</label>
                        <input type="text" name="dcm_category" class="form-control control" placeholder="ເພີມຂໍ້ມູນປະເພດອະສັງຫາ">
                        <button name="real_category" class="btn btn-sm btn-info rc"><i class="bi bi-blockquote-right"></i> ບັນທືກ ປະເພດອະສັງຫາ</button>
                        
                        <?PHP 
                          if(isset($_POST['real_category'])){
                            $dcm_category = $_POST['dcm_category'];
                            if($dcm_category){
                              $insert_category = mysqli_query($conn, "INSERT INTO `AM-dcm-category`(`dcm_category`, `dcm_category_uid`) VALUES ('$dcm_category','1')");
                              echo '<div class="alert alert-success alert-real_category rc" role="alert">
                                  <i class="bi bi-blockquote-right"></i> ບັນທືກ ປະເພດອະສັງຫາສຳເລັດ.........
                                </div>';
                            }elseif($dcm_category == ""){
                              echo '<div class="alert alert-danger alert-real_category rc" role="alert">
                                  <i class="bi bi-blockquote-right"></i> ເກິດການຂັດຄອງໃນການບັນທືກ ປະເພດອະສັງຫາ...
                                </div>';
                            }
                          }
                        ?>
                      </div>
                      <div class="col-md-4">
                        <label for=""><b>ເທັກນິກ</b><br><label for="">ກະລຸນາປ່ອນຂໍ້ມູນລົງໃນຊ່ອງ ເພີມຂໍ້ມູນປະເພດອະສັງຫາ</label></label>
                        &nbsp;
                      </div>
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

</body>
</html>