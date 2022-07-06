<footer class="page-footer bg-image" style="background-image: url(assets/img/world_pattern.svg);">
    <div class="container">
      <?PHP 
        $footer_admin = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `footer_admin` WHERE `fm_uid`='about'"));
        $footer_admin_us = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `footer_admin` WHERE `fm_uid`='about_us'"));
      ?>
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>Real Esate Laos</h3>
          <p><?PHP if($footer_admin){echo $footer_admin['about'];}else{echo "ຍັງບໍ່ມີຂໍ້ມູນ";} ?></p>

          <div class="social-media-button">
            <a href="<?PHP if($footer_admin){echo $footer_admin['link_fackbook'];}else{} ?>" target="_blank"><span class="mai-logo-facebook-f" target="_blank"></span></a>
            <a href="<?PHP if($footer_admin){echo $footer_admin['link_yiutube'];}else{} ?>" target="_blank"><span class="mai-logo-youtube"></span></a>
            <a href="<?PHP if($footer_admin){echo $footer_admin['link_twitter'];}else{} ?>" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="<?PHP if($footer_admin){echo $footer_admin['link_google'];}else{} ?>" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="<?PHP if($footer_admin){echo $footer_admin['link_instagram'];}else{} ?>" target="_blank"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="../TYPE-REAL/type_real?about-one=0">ປະເພດອະສັງຫາ</a></li>
            <li><a href="../gather">ສົນໃຈ</a></li>
            <li><a href="#">ກ່ຽວກັບ</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <?PHP 
            $fm_uid = $footer_admin_us['about_us'];
            $Admin_show_about_footer = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `admin` WHERE `admin_id`=$fm_uid"));
          ?>
          <h5>Contact Us</h5>
          <p><?PHP if($Admin_show_about_footer){echo $Admin_show_about_footer['ad_name']." ".$Admin_show_about_footer['ad_lname']; echo "<br>"; echo "ເປັນຕົວແທ່ນຂອງເວັບໄຊທ໌ Real Esate Laos ທ່ານສາມາດສອບຖາມຂໍ້ມູນກັບພວກເຮົາໃຫ້ເລີຍ";}else{echo "ຍັງບໍ່ມີຂໍ້ມູນ";} ?></p>
          <a href="https://wa.me/+856<?PHP if($Admin_show_about_footer){echo $Admin_show_about_footer['admin_tel'];} ?>" class="footer-link" target="_blank">+856 <?PHP if($Admin_show_about_footer){echo $Admin_show_about_footer['admin_tel'];} ?></a>
          <a href="mailto:<?PHP if($Admin_show_about_footer){echo $Admin_show_about_footer['admin_email'];} ?>" class="footer-link" target="_blank"><?PHP if($Admin_show_about_footer){echo $Admin_show_about_footer['admin_email'];} ?></a>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <p>ເມືອມີການອັບເດດ ພວກເຮົາຈະສົງໄປຍັງເມວ.</p>
          <form method="POST">
            <input type="text" name="New_email" class="form-control" placeholder="ກະລຸນາປ່ອນ ອີເມວ...">
            <button type="submit" name="sub_email" class="btn btn-success btn-block mt-2">Subscribe</button>
          </form>
          <?PHP 
            if(isset($_POST['sub_email'])){
              $new_email = $_POST['New_email'];
              if($new_email){
                $sql_email = mysqli_query ($conn, "INSERT INTO `newsletter`(`new_email`, `new_uid`) VALUES ('$new_email','Newsletter')");
                if($sql_email){
                  echo ("<script LANGUAGE='JavaScript'>
                      window.alert('ເມືອມີການອັບເດດຕາງໆທ່ານຈະຮັບຮູ້ຂ່າວທັນທີ່ ຂໍຂອບໃຈ');
                      window.location.href='';
                      </script>");
                }
              }
            }
          ?>
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2022. ພັດທະນາໂດຍ <a href="https://www.facebook.com/profile.php?id=100012618940519" target="_blank">AppleCup12</a></p>
    </div>
  </footer>