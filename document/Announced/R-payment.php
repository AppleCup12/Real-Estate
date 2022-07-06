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

  <title>REAL-ESTATE</title>
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

  $query_d = "SELECT * FROM `AM-dcm-distric`";
  $distric = $conn->query($query_d);
?>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <? include_once '../header.php'; ?>

  <form method="POST" enctype="multipart/form-data">

  <div class="bac"></div>
    <div class="container">
      <div class="row">
        <div class="page-banner home-banner1">
            <nav class="nav-bar-list">
                <a href="../profile/profile">
                  <div class="d-flex align-items-center ms-4 mb-4 nav-user">
                    <?PHP 
                      include_once '../../assets/data/database.php';
                      $uid = $_SESSION["user_id"];
                      $sql_user = mysqli_query($conn, "SELECT * FROM `Users` WHERE user_id=$uid");
                      $row = mysqli_fetch_array($sql_user);
                    ?>
                      <div class="position-relative">
                          <img class="rounded-circle" src="../profile/upload/<? echo $row['user_img'] ?>" alt="" style="width: 50px; height: 50px;">
                          <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                      </div>
                      <div class="ms-3">
                          <h6 class="mb-0"><? echo $row['name'] ?></h6>
                          <span id="span"><? echo $row['user_status'] ?></span>
                      </div>
                  </div>
                </a>
                <div class="navbar-nav w-100">
                  <a href="../dasbord/dasbord" class="nav-item nav-link">&nbsp;<i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</a>
                  <a href="" class="nav-item nav-link active">&nbsp;<i class="bi bi-cash-coin "></i> ອະສັງຫາ</a>
                  <a href="../Announced/Announced" class="nav-item nav-link ">&nbsp;<i class="bi bi-bookmark-plus"></i> ປະກາດຂອງທ່ານ</a>
                  <a href="#" class="nav-item nav-link">&nbsp;<i class="bi bi-postcard-heart"></i> ລາຍການສອບຖາມຂໍ້ມູນ</a>
                  <a href="#" class="nav-item nav-link">&nbsp;<i class="bi bi-bookmark-dash"></i> ປະກາດທີ່ບັນທືກໄວ້</a>
                </div>
            </nav>
        </div>
        <div class="page-banner home-banner2">
            <div class="container-nav">
                <div class="header-R">
                    <h3><i class="bi bi-cash-coin "></i> ຈັດການເວລາການລົງປະກາດ</h3>
                    <!-- &nbsp; -->
                    <hr>
                </div>
            </div>
        </div>
      </div>
    </div>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>

</body>

</html>