<nav class="nav-bar-list">
              <div class="padding-list-nav">
                <a href="../../profile/profile">
                  <div class="d-flex align-items-center ms-4 mb-4 nav-user">
                    <?PHP 
                      include_once '../../../assets/data/database.php';
                      // include_once '../../../assets/data/price-time.php';

                      $uid = $_SESSION["user_id"];
                      $sql_user = mysqli_query($conn, "SELECT * FROM `Users` WHERE user_id=$uid");
                      $row = mysqli_fetch_array($sql_user);
                    ?>
                      <div class="position-relative">
                          <img class="rounded-circle" src="../../profile/upload/<?PHP echo $row['user_img'] ?>" alt="" style="width: 50px; height: 50px;">
                          <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                      </div>
                      <div class="ms-3">
                          <h6 class="mb-0"><?PHP echo $row['name'] ?></h6>
                          <span id="span"><?PHP echo $row['user_status'] ?></span>
                      </div>
                  </div>
                </a>
                <div class="navbar-nav w-100">
                  <a href="../../dasbord/dasbord" class="nav-item nav-link">&nbsp;<i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</a>
                  <a href="../../Pay-monney/Money" class="nav-item nav-link">&nbsp;<i class="bi bi-wallet2"></i> ຊຳລະເງີນ</a>
                  <a href="../../R-estate/R-estate" class="nav-item nav-link">&nbsp;<i class="bi bi-cash-coin"></i> ອະສັງຫາ</a>
                  <a href="../../Announced/Announced" class="nav-item nav-link ">&nbsp;<i class="bi bi-bookmark-plus"></i> ປະກາດຂອງທ່ານ</a>
                  <a href="" class="nav-item nav-link active">&nbsp;<i class="bi bi-postcard-heart"></i> ລາຍການສອບຖາມຂໍ້ມູນ</a>
                  <a href="../../Save-real/Save-real" class="nav-item nav-link">&nbsp;<i class="bi bi-bookmark-dash"></i> ປະກາດທີ່ບັນທືກໄວ້</a>
                </div>
              </div>
            </nav>