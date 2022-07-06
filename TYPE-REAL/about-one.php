<div class="libary-group">
            <div class="row">
              
              <?PHP 
                $query_real = mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `real_uid`=2 AND `real_type` IN($show_view) ORDER BY real_id DESC");
                foreach($query_real as $row_real){
              ?>
                <a href="../login">
                  <div class="card-libary">
                    <?PHP
                      $r_radio = $row_real['r_radio'];
                      if($r_radio == "ເຊົ່າ"){
                        echo '<div class="status-img Rent">
                            <p id="label-text">ພ້ອມເຊົ່າ</p>
                          </div>';
                      }elseif($r_radio == "ຂາຍ"){
                        echo '<div class="status-img sell">
                            <p id="label-text">ພ້ອມຂາຍ</p>
                          </div>';
                      }
                    ?>
                   
                    <div class="group-img">
                      <img src="../document/R-estate/upload_real/upload/<?PHP echo $row_real['real_img'] ?>" id="img">
                      <div class="bprice">
                        <label class="text-bprice"><?PHP echo number_format($row_real['real_bprice'])."".$row_real['real_currency'] ?></label>
                        <label class="check-bprice">
                          <div class="row">
                            <div class="column col-01"><i class="bi bi-arrows-angle-expand"></i></div>
                            <div class="column col-01"><i class="bi bi-heart"></i></div>
                            <div class="column col-01"><i class="bi bi-text-indent-right"></i></div>
                          </div>
                        </label>
                      </div>
                    </div>
                    
                    <div class="list-about-real">
                      <div class="list-padding">
                        <?PHP
                          $uid = $row_real['user_uid'];
                          $user_img = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Users` WHERE `user_id`=$uid"));
                        ?>
                        <img src="../document/profile/upload/<?PHP echo $user_img['user_img'] ?>" id="user-logo" style="border-radius: 100%; width:40px; height:40px;">
                        <label for=""><div class="about-real-text"><?PHP echo $row_real['real_about_laos'] ?></div></label>
                        <a href="#uid=<?PHP echo $row_real['real_id'] ?>" class="view_real"><i class="bi bi-view-list"></i></a>
                        <div class="about-estate">
                          <div class="location"><label for=""><i class="bi bi-pin-map-fill"></i> <?PHP echo $row_real['real_distric'] ?></label></div>
                          <div class="row" id="row-bed">
                            <div class="column column-bed">
                              <label for=""><?PHP echo $row_real['real_bedroom'] ?> <i class='bx bxs-bed' style='color:#313131'  ></i> <br>ຫ້ອງນອນ</label>
                            </div>
                            <div class="column column-bed">
                              <label for=""><?PHP echo $row_real['real_bathroom'] ?> <i class='bx bxs-bath'></i> <br>ຫ້ອງນ້ຳ</label>
                            </div>
                            <div class="column column-bed bed-none">
                              <label for=""><?PHP echo $row_real['real_floor'] ?> <i class='bx bx-layer'></i> <br>ຊັ້ນ</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              <?PHP } ?>
            </div>
          </div>