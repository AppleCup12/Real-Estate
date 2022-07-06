<?PHP  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>REAL-ESTATE LAOS</title>
  <link rel="shortcut icon" href="assets/img/icon.PNG" width="500%" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">  

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="../assets/style/index.css">
  <link rel="stylesheet" href="../assets/style/Responsive.css">
  <link rel="stylesheet" href="type_real.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<?PHP
  include_once '../assets/data/database.php'; 
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
              <a class="nav-link" href="../">ໜ້າຫຼັກ</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../TYPE-REAL/type_real?about-one=0">ປະເພດລາຍການ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Gather">ສົນໃຈ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ກຽວກັບ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.me/+8562095188702" target="_blank" id="wa"><i class="bi bi-whatsapp"></i> +856 2095188702</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger ml-lg-2" href="../register"><i class="bi bi-box-arrow-in-right"></i> ເຂົ້າສູລະບົບ</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    <form method="POST">
    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="../index">ໜ້າຫຼັກ</a></li>
                <li class="breadcrumb-item active">ປະເພດອະສັງຫາ</li>
              </ul>
            </nav>
            <h2 class="text-center">ປະເພດອະສັງຫາ ໜ້າສົນໃຈ</h2>
            <div class="text-center">
                <div class="box-search">
                    <div class="box-search-nav">
                        <select name="distric" class="form-control control distric" id="">
                            <option value="">ແຂວງ:</option>
                            <?PHP
                                $distric_se = mysqli_query($conn, "SELECT * FROM `AM-dcm-distric`");
                                foreach($distric_se as $row_dis){
                            ?>
                            <option value="<?PHP echo $row_dis['dcm_distric'] ?>"><?PHP echo $row_dis['dcm_distric'] ?></option>
                            <?PHP } ?>
                        </select>
                        <select name="real_type" class="form-control control real_type" id="">
                            <option value="">ປະເພດ</option>
                            <?PHP 
                                $category = mysqli_query($conn, "SELECT * FROM `AM-dcm-category`");
                                foreach($category as $row_cate){
                            ?>
                            <option value="<?PHP echo $row_cate['dcm_category'] ?>"><?PHP echo $row_cate['dcm_category'] ?></option>
                            <?PHP } ?>
                        </select>
                        <!-- <input type="text" name="" class="form-control control" placeholder="ຄົ້ນຫາອະສັງຫາ:..."> -->
                        <select name="r_radio" id="" class="form-control control r_radio">
                          <option value="">ສະຖານະ</option>
                          <option value="">ລວມ</option>
                          <option value="ຂາຍ">ຂາຍ</option>
                          <option value="ເຊົ່າ">ເຊົ່າ</option>
                        </select>
                        
                        <a id="search" class="btn btn-info btn-search" style="color: #ffff">ຄົ້ນຫາ</a>
                        <button type="reset" class="btn-danger btn-search">Reset</button>
                    </div>
                    
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="libary">
        <div class="libary-padding">
        
          <div class="header-libery"><h5>ອະສັງຫາ > 
            <label id="popup"></label>
          </h5></div>
          <div class="popup"></div><br>
          <?PHP
            if(isset($_GET['about-one'])){
              $show_view = $_GET['about-one'];
              include_once 'about-one.php';
            }
            if(isset($_GET['about-two'])){
              $show_view_two = $_GET['about-two'];
              include_once 'about-two.php';
            }
            
          ?>
          
        </div>
      </div>
    </form>
    </div>
  </header>
  &nbsp;
  <?PHP include_once 'footer.php'; ?>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script>
  $(function(){
    $("#search").click(function(){
      var a = $(".distric").val();
      var b = $(".real_type").val();
      var c = $(".r_radio").val();
      $.post("search.php",{
          a : a,
          b : b,
          c : c
      },function(output){
        $(".popup").html(output);
      });
    });
    $("#search").click(function(){
      var a = $(".distric").val();
      var b = $(".real_type").val();
      var c = $(".r_radio").val();
      $.post("search-popup.php",{
          a : a,
          b : b,
          c : c
      },function(output){
        $("#popup").html(output);
      });
    });
  });
</script>
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