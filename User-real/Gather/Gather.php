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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="gather.css">
</head>

<?PHP
    include_once '../../assets/data/database.php';
    include_once '../../assets/data/price-time.php';

    $uid = $_SESSION["user_id"];
    if(isset($_GET['delete_02'])){
        $delete = $_GET['delete_02'];
        $delete_save = mysqli_query($conn, "DELETE FROM `user_save` WHERE `real_uid`=$delete AND `user_uid`=$uid");
        if($delete_save){
          header('Location: ../Gather/Gather?Gather=OK');
      
        }
        
    }
    if(isset($_POST['delete'])){
        $real_checkbox = $_POST['checkbox'];
        $cdk1 = "";
        foreach($real_checkbox as $name_1){
        $cdk1 .= $name_1.",";
        }
        if($real_checkbox){
          $delete_save = mysqli_query($conn, "DELETE FROM `User_save` WHERE `real_uid` IN($cdk1 0) AND `user_uid`=$uid ");
          if($delete_save){
              header('Location: ../Gather/Gather?Gather=OK');
          
          }
        }

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
              <a class="nav-link active" href="../Gather/Gather">ສົນໃຈ</a>
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
    
    <form method="POST" enctype="multipart/form-data">
    <div class="container">
      <div class="page-banner home-banner-save">
        <div class="header-about">
            <a href="../index">ໜ້າຫຼັກ</a> / ອະສັງຫາທີ່ທ່ານສົນໃຈ
            <h5></h5>
            <h2>ອະສັງຫາທີ່ທ່ານສົນໃຈ</h2>
        </div>
        <h5><button type="submit" name="delete" class="btn-sm bg-danger hover-danger" style="color: #ffff; border: none"><i class="bi bi-trash3-fill"></i> ລົບ</button></h5>
      </div>
      <?PHP
        $show_save = mysqli_query($conn, "SELECT * FROM `User_save` WHERE `user_uid`=$uid ORDER BY save_id DESC");
        $cdk_real = "";
        foreach($show_save as $show_uid){
        $cdk_real .= $show_uid['real_uid'].",";
        }
        $real_show_01 = mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_uid`=2 AND `real_id` IN($cdk_real 0)");
        foreach($real_show_01 as $real_show){
      ?>
        <div class="gather-card">
            <div class="row">
                <?PHP
                 
                ?>
                <div class="column">
                    <input type="checkbox" name="checkbox[]" value="<?PHP echo $real_show['real_uid'] ?>">
                    <input type="checkbox" name="checkbox[]" value="0" style="display: none;" checked>    
                     &nbsp;
                </div>
                <div class="column">
                    <a href="../TYPE-REAL/type_real?view=<?PHP echo $real_show['real_id'] ?>" class="hove-link"><img src="../../document/R-estate/upload_real/upload/<?PHP echo $real_show['real_img'] ?>" style="width: 200px; height: 120px;"></a>
                </div>
                <div class="column colum-text">
                    <h6><?PHP echo "ປະເພດ ".$real_show['real_type'] ?></h6>
                    <h6><?PHP echo "ທີ່ຕັ້ງ ".$real_show['real_distric'] ?></h6>
                    <h6><?PHP echo $real_show['real_bedroom']."ຫ້ອງນອນ ".$real_show['real_bathroom']."ຫ້ອງນ້ຳ ".$real_show['real_floor']."ຊັນ" ?></h6>
                    <h6><?PHP echo "ຕິດຕໍ່ +856".$real_show['real_tel'] ?></h6>
                </div>
                <div class="column column-text-02">
                    <h5><?PHP echo "ລາຍລະອຽດອະສັງຫາ" ?></h5>
                    <h6 class="column-text002"><?PHP echo $real_show['real_about_laos'] ?></h6>
                </div>
                <div class="column column-text-03">
                    <h6>ລາຄາ</h6>
                    <h6 style="color: red"><?PHP echo number_format($real_show['real_bprice'])."".$real_show['real_currency'] ?></h6>
                </div>
                <div class="column">
                    <h5><a href="../TYPE-REAL/type_real?view=<?PHP echo $real_show['real_id'] ?>" class="btn-sm bg-info hove-link" style="color: #ffff"><i class="bi bi-eye-fill"></i>View</a></h5>
                    <h5><a href="?delete_02=<?PHP echo $real_show['real_id'] ?>" class="btn-sm bg-danger hover-danger" style="color: #ffff;"><i class="bi bi-trash3-fill"></i> ລົບ</a></h5>
                </div>
            </div>
        </div>
        &nbsp;
        <?PHP } ?>
        &nbsp;
    </div>
    </form>
  </header>
  <?PHP include_once '../footer.php'; ?>


  

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../../assets/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/js/google-maps.js"></script>

<script src="../../assets/vendor/wow/wow.min.js"></script>

<script src="../../assets/js/theme.js"></script>
  
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
</body>
</html>