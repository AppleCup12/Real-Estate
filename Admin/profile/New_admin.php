<?PHP  session_start(); 
  $uid = $_SESSION["admin_id"];
  if($uid){
  }else{
    header('Location: ../');
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

  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/style/index.css">
  <link rel="stylesheet" href="profile.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  
</head>
<body>

  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky1" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">ຈັດການເວບໄຊ & <span class="text-primary">real-estate. LAOS</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?PHP include_once '../header.php'; ?>

      </div>

    </nav>
    <div class="container">
      <div class="page-banner home-banner">
              <?PHP
                include_once '../../assets/data/database.php';
              ?>
      <form action="" method="POST" enctype="multipart/form-data">
      
      
        <div class="row">
          <div class="col-md-6">
            <div class="header">
              <h1 id="h1">ຈັດການໂປຣຟ່າຍ</h1>
              &nbsp;
              <div class="profile">
                  <img id="img_bc">
                  <img id="output" width="200" />
                  <label for="file" id="file-img" style="cursor: pointer;"><p id="text"><i class="bi bi-pencil-square"></i> ເລືອກ</p></label>
                  <img id="img_user" alt="">
                  <p><input type="file" accept="<?PHP echo $img_us = $row['admin_img']?>" name="file_img" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                  <div class="bac"></div>
                <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('output');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                </script>
              </div>
           
            </div>

          </div>
          <div class="col-md-6">
            <div class="group">
              
              
              <div class="header-group">
                <?PHP 
                  if(isset($_POST['save'])){
                    $file_name = $_FILES['file_img']['name'];
                    $tmp_name = $_FILES['file_img']['tmp_name'];
                    $upload = "upload/".$file_name;
                    if(move_uploaded_file($tmp_name, $upload)){
                        $name = mysqli_real_escape_string($conn, $_POST['name']); 
                        $lname = mysqli_real_escape_string($conn, $_POST['lname']); 
                        $admin_date = mysqli_real_escape_string($conn, $_POST['admin_date']); 
                        $admin_email = mysqli_real_escape_string($conn, $_POST['admin_email']); 
                        $admin_tel = mysqli_real_escape_string($conn, $_POST['admin_tel']); 
                        $admin_home = mysqli_real_escape_string($conn, $_POST['admin_home']); 
                        $admin_distric = mysqli_real_escape_string($conn, $_POST['admin_distric']); 
                        $admin_vilage = mysqli_real_escape_string($conn, $_POST['admin_vilage']); 
                        $admin_gender = mysqli_real_escape_string($conn, $_POST['admin_gender']); 
                        $admin_name = mysqli_real_escape_string($conn, $_POST['admin_name']); 
                        $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']); 
                        $randomid = (rand(1,1000000));

                        $admin_file = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `admin` WHERE `admin_name`='$admin_name'"));
                        if($admin_file){
                          echo '<div class="alert alert-info alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <i class="bi bi-file-earmark-excel"></i> User-name ມີການໃຊ້ງານແລ້ວ ກະລຸນາປຽນຊື່ໄໝ່ ລອງໄໝ່ອີກຄັ້ງ.......
                            </div>';
                        }else{
                          $sql_edit = mysqli_query ($conn, "INSERT INTO `admin`(`number_uid`, `admin_img`, `admin_name`, `ad_name`, `ad_lname`, `admin_date`, `admin_gender`, `admin_tel`, `admin_status`, `admin_email`, `admin_password`, `admin_home`, `admin_distric`, `admin_village`, `admin_uid`) 
                          VALUES ('$randomid','$file_name','$admin_name','$name','$lname','$admin_date','$admin_gender','$admin_tel','Admin','$admin_email','$admin_password','$admin_home','$admin_distric','$admin_vilage','0')");
                          if($sql_edit){
                            echo '<script>
                                  swal({
                                  title: "ປ່ຽນແປງຂໍ້ມູນສຳເລັດ!",
                                  text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                  type: "success"
                                  },
                                  function(){
                                  window.location="list_user"
                                  });
                              </script>';
                          }else{
                            echo '<div class="alert alert-info alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <i class="bi bi-file-earmark-excel"></i> ບັກທືກຂໍ້ມູນເກິດການຜິດ ກະລຸນາລອງໄໝ່ອີກຄັ້ງ.......
                            </div>';
                          }
                        }

                    }else{
                        $name = mysqli_real_escape_string($conn, $_POST['name']); 
                        $lname = mysqli_real_escape_string($conn, $_POST['lname']); 
                        $admin_date = mysqli_real_escape_string($conn, $_POST['admin_date']); 
                        $admin_email = mysqli_real_escape_string($conn, $_POST['admin_email']); 
                        $admin_tel = mysqli_real_escape_string($conn, $_POST['admin_tel']); 
                        $admin_home = mysqli_real_escape_string($conn, $_POST['admin_home']); 
                        $admin_distric = mysqli_real_escape_string($conn, $_POST['admin_distric']); 
                        $admin_vilage = mysqli_real_escape_string($conn, $_POST['admin_vilage']); 
                        $admin_gender = mysqli_real_escape_string($conn, $_POST['admin_gender']); 
                        $admin_name = mysqli_real_escape_string($conn, $_POST['admin_name']); 
                        $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']); 
                        $randomid = (rand(1,1000000));

                        $admin_file = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `admin` WHERE `admin_name`='$admin_name'"));
                        if($admin_file){
                          echo '<div class="alert alert-info alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <i class="bi bi-file-earmark-excel"></i> User-name ມີການໃຊ້ງານແລ້ວ ກະລຸນາປຽນຊື່ໄໝ່ ລອງໄໝ່ອີກຄັ້ງ.......
                          </div>';
                        }else{
                          $sql_edit = mysqli_query ($conn, "INSERT INTO `admin`(`number_uid`, `admin_img`, `admin_name`, `ad_name`, `ad_lname`, `admin_date`, `admin_gender`, `admin_tel`, `admin_status`, `admin_email`, `admin_password`, `admin_home`, `admin_distric`, `admin_village`, `admin_uid`) 
                          VALUES ('$randomid','images.png','$admin_name','$name','$lname','$admin_date','$admin_gender','$admin_tel','Admin','$admin_email','$admin_password','$admin_home','$admin_distric','$admin_vilage','0')");
                          if($sql_edit){
                          echo '<script>
                                  swal({
                                  title: "ປ່ຽນແປງຂໍ້ມູນສຳເລັດ!",
                                  text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                  type: "success"
                                  },
                                  function(){
                                  window.location="list_user"
                                  });
                              </script>';
                          }else{
                          echo '<div class="alert alert-info alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <i class="bi bi-file-earmark-excel"></i> ບັກທືກຂໍ້ມູນເກິດການຜິດ ກະລຸນາລອງໄໝ່ອີກຄັ້ງ.......
                          </div>';
                          }
                        }
                     }
  
                    
                  }
                ?>
                <h1>ຂໍ້ມູນເພີມເຕີມ <label for=""><button type="submit" name="save" class="btn btn-sm btn-info"><i class="bi bi-cloud-download"></i> ບັນທືກ</button> </label></h1>
              </div>
              
              &nbsp;
              <table>
                <tr>
                  <th><p>User_name:</p></th>
                  <th><input type="text" name="admin_name" class="form-control control" placeholder="User_name:" required></th>

                  <th id="th">....</th>
                  <th><p>ວ/ດ/ປ ເກິດ:</p></th>
                  <th><input type="date" name="admin_date" class="form-control control"></th>
                  
                </tr>
                <tr>
                  <th><p>Passowrd:</p></th>
                  <th><input type="text" name="admin_password" class="form-control control" placeholder="Password:" required></th>
                  <th id="th">....</th>

                  <th><p>ເບີໂທຕິດຕໍ່:</p></th>
                  <th><input type="text" name="admin_tel" class="form-control control" placeholder="+856 "></th>
                  
                </tr>
                <tr>
                  <th><p>ຊື່:</p></th>
                  <th><input type="text" name="name" class="form-control control" placeholder="ຊື່ຜູ້ໃຊ້:"></th>
                  <th id="th">....</th>

                  
                  <th id="th">....</th>
                  <th colspan="2" style="text-align: center;"><b><h5>ທີ່ຢູ່ປະຈຸບັນ</h5></b></th>
                  
                </tr>
                <tr>
                  <th><p>ນາມສະກຸນ:</p></th>
                  <th><input type="text" name="lname" class="form-control control" placeholder="ນາມສະກຸນ:"></th>
                  <th id="th">....</th>
 
                  <th><p>ແຂວງ:</p></th>
                  <th><input type="text" name="admin_vilage" class="form-control control" placeholder="ແຂວງ:....... "></th>
                  
                </tr>
                
                <tr>
                  <th><p>Email:</p></th>
                  <th><input type="email" name="admin_email" class="form-control control" placeholder="Email:"></th>
                  <th id="th">....</th>

                  <th><p>ເມືອງ:</p></th>
                  <th><input type="text" name="admin_distric" class="form-control control" placeholder="ເມືອງ:....... "></th>
                </tr>
                <tr>
                  <th><p>ເພດ:</p></th>
                  <th><select name="admin_gender" class="form-control control">
                    <option value="#">ເພດ</option>
                    <option value="ຍິງ">ຍິງ</option>
                    <option value="ຊາຍ">ຊາຍ</option>
                  </select></th>
                  
                  <th id="th">....</th>
                  <th><p>ບ້ານ:</p></th>
                  <th><input type="text" name="admin_home" class="form-control control" placeholder="ບ້ານ:....... "></th>
                </tr>
                
                
              </table>
              
              
              
            </div>
          </div>
        </div>
      </form>

      </div>

    </div>
  </header>

  

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