<?PHP  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>REAL-ESTATE</title>
  <link rel="shortcut icon" href="assets/img/icon.PNG" width="500%" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
  <link rel="stylesheet" href="assets/style/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@500&display=swap');
      *{
        font-family: 'Noto Sans Lao', sans-serif;
      }
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">ໜ້າລົງທະບຽນຊື່ເຂົ້າໃຊ້ລະບົບ</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index">ໜ້າຫຼັກ</a>
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
              <a class="btn btn-warning ml-lg-2" href="register.php"><i class="bi bi-box-arrow-in-right"></i> ເຂົ້າສູລະບົບ</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <div class="content">
                <form action="" method="POST">
                    <div class="cdheader-01"><label id="font-register">ເຂົ້າສູລະບົບ</label></a> </div>
                        <div class="group">
                          <label for=""> ຊື່ເຂົ້າໃຊ້ ພາສາອັງກິດ</label>
                          <input type="text" name="user_name" class="form-control" placeholder="ປ່ອນຊື່ເຂົ້າໃຊ້ງານ:........" required>
                        </div>
                        <div class="group">
                          <label for=""> ລະຫັດຜ່ານ</label>
                          <input type="password" name="user_password" class="form-control" placeholder="ປ່ອນລະຫັດຜ່ານ:........" required>
                        </div>
                        &nbsp;
                    <div class="group-btn">
                        <button type="submit" name="user" class="form-control btn btn-sm btn-info"><i class="bi bi-box-arrow-in-right"></i> ເຂົ້າສູລະບົບ</button>
                    </div>
                    
                </form>
            </div>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="assets/img/IMG_4121.PNG" id="img-logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php 
	   
        if(isset($_POST['user'])){
				//connection
    		include_once 'assets/data/database.php';
        // include_once 'assets/data/price-time.php';


				//รับค่า user & password
                  $Username = $_POST['user_name'];
                  $Password = $_POST['user_password'];
				//query 
                  $sql="SELECT * FROM Users Where user_name='$Username' and user_password='$Password'";
 
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)== 1){
					//   echo"ok";
 
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["user_id"] = $row["user_id"];
                      $_SESSION["ut_name"] = $row["name"];
                      $_SESSION["Userlevel"] = $row["user_status"];
 
                      if($_SESSION["Userlevel"]=="Users"){ 
                        echo "<script>
                            let timerInterval
                            Swal.fire({
                                title: 'ຊື່ຜູ້ໃຊ້ ແລະ ລະຫັດຜ່ານຖືກຕ້ອງ',
                                html: 'ກຳລັງດຳເນິນການເຂົ້າສູ່ລະບົບ',
                                timer: 2000,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                    const b = Swal.getHtmlContainer().querySelector('b')
                                    timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                    }, 100)
                                },
                                willClose: () => {
                                    clearInterval(timerInterval)
                                }
                                }).then((result) => {
                                /* Read more about handling dismissals below */
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    console.log('I was closed by the timer')
                            
                                }
                                window.location='User-real/index'
                            });
                        </script>";
                        
                        
                      }
 
                      if ($_SESSION["Userlevel"]==""){ 
 
                        Header("Location: document/home.php");
 
                      }
 
                  }else{
                    echo "<script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 5000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            },
                            
                            })
                            
                            Toast.fire({
                            icon: 'error',
                            title: 'ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານອາດບໍ່ຖືກຕ້ອງ ກະລຸນາລອງໄໝ່ອີກຄັ້ງ'
                            })
                            
                        </script>";
 
                  }
 
        }else{
            //  Header("Location: form.php"); //user & password incorrect back to login again
 
        }
?>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>
  
</body>
</html>