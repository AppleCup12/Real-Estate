<div class="popup">
                    <div class="closs"></div>
                        <div class="div-popup">
                          <div class="padding-popup">
                            <div class="header"><h5>ປ່ຽນແປ່ງ ຂໍ້ມູນໜ້າຫຼັກ</h5></div><hr>
                                <?PHP 
                                  $one_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Ad_typepost` WHERE `AM_uid_type`='one-type'"));
                                  if($one_show){

                                  }else{

                                  }
                                ?>
                                <div class="column">
                                  <input accept="image/*" name="one-img" type="file" id="imgInp" class="btn-sm" /><br>
                                  <img id="blah" src="../../../User-real/img/<?PHP echo $one_show['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 200px"/><br>
                                </div>
                                <div class="cloumn group-insert">
                                  <label for="">ເລືອກປະເພດ</label>
                                 
                                  <select name="one-type" class="form-control control-sl" style="height: 30px">
                                    <option value="<?PHP echo $one_show['AM_type'] ?>"><?PHP echo $one_show['AM_type'] ?></option>
                                    <?PHP
                                      $sql_type = mysqli_query($conn, "SELECT * FROM `AM-dcm-category`");
                                      foreach($sql_type as $row_type){
                                    ?>
                                    <option value="<?PHP echo $row_type['dcm_category'] ?>"><?PHP echo $row_type['dcm_category'] ?></option>
                                    <?PHP } ?>
                                  </select>
                                  &nbsp;
                                  <div class="about-time">
                                    ຂໍ້ມູນປະຈຸບັນ <br>
                                    <p><?PHP echo ">> ".$one_show['AM_type']." <<" ?></p>
                                  </div>
                                  <button name="save-one" class="btn-sm btn-info"><i class="bi bi-cloud-download-fill"></i> ບັນທືກການປຽນແປ່ງ</button>
                                  <button name="save_one-all" class="btn-sm btn-warning"><i class="bi bi-check-all"></i> ບັກທືກທັ້ງໝົດ</button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <?PHP 
                          if(isset($_POST['save_one-all'])){
                            $one_img = $_FILES['one-img']['name'];
                            $one_tmp = $_FILES['one-img']['tmp_name'];
                            $one_upload = "../../../User-real/img/".$one_img;
                            if(move_uploaded_file($one_tmp, $one_upload)){
                              $one_delete = mysqli_query($conn, "DELETE FROM `Ad_typepost` WHERE `AM_uid_type`='one-type'");
                              if($one_delete){
                                $one_type = mysqli_real_escape_string($conn, $_POST['one-type']);
                                $one_insert = mysqli_query($conn, "INSERT INTO `Ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$one_img','$one_type','one-type')");
                                if($one_insert){
                                  echo '<script>
                                        swal({
                                          title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ໜື່ງ ສຳເລັດ!",
                                          text: "ກົດນີ້ເພືອ Reset.",
                                          type: "success"
                                        },
                                        function(){
                                          window.location="../edit-index/edit-about-index";
                                        });
                                      </script>';
                                }
                              }
                            }
                          }
                          if(isset($_POST['save-one'])){
                            $one_type = mysqli_real_escape_string($conn, $_POST['one-type']);
                            $update_one = mysqli_query($conn, "UPDATE `Ad_typepost` SET `AM_type`='$one_type' WHERE `AM_uid_type`='one-type'");
                            if($update_one){
                                echo '<script>
                                      swal({
                                        title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ໜື່ງ ສຳເລັດ!",
                                        text: "ກົດນີ້ເພືອ Reset.",
                                        type: "success"
                                      },
                                      function(){
                                        window.location="../edit-index/edit-about-index";
                                      });
                                    </script>';
                              }
                          }
                        ?>
                      

<!-- Two  -->
<div class="popup-two">
                    <div class="closs-two"></div>
                        <div class="div-popup">
                          <div class="padding-popup">
                            <div class="header"><h5>ປ່ຽນແປ່ງ ຂໍ້ມູນໜ້າຫຼັກ</h5></div><hr>
                              
                                <?PHP 
                                  $two_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Ad_typepost` WHERE `AM_uid_type`='two-type'"));
                                ?>
                                <div class="column">
                                  <input accept="image/*" name="two_img" type="file" id="imgInp_two" class="btn-sm" /><br>
                                  <img id="blah_two" src="../../../User-real/img/<?PHP echo $two_show['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 200px"/><br>
                                </div>
                                <div class="cloumn group-insert">
                                  <label for="">ເລືອກປະເພດ</label>
                                 
                                  <select name="two-type" class="form-control control-sl" style="height: 80px">
                                    <option value="<?PHPecho $two_show['AM_type'] ?>"><?PHP echo $two_show['AM_type'] ?></option>
                                    <?PHP
                                      $sql_type = mysqli_query($conn, "SELECT * FROM `AM-dcm-category`");
                                      foreach($sql_type as $row_type){
                                    ?>
                                    <option value="<?PHP echo $row_type['dcm_category'] ?>"><?PHP echo $row_type['dcm_category'] ?></option>
                                    <?PHP } ?>
                                  </select>
                                  &nbsp;
                                  <div class="about-time">
                                    ຂໍ້ມູນປະຈຸບັນ <br>
                                    <p><?PHP echo ">> ".$two_show['AM_type']." <<" ?></p>
                                  </div>
                                  <button name="save-two" class="btn-sm btn-info"><i class="bi bi-cloud-download-fill"></i> ບັນທືກການປຽນແປ່ງ</button>
                                  <button name="save_two-all" class="btn-sm btn-warning"><i class="bi bi-check-all"></i> ບັກທືກທັ້ງໝົດ</button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <?PHP 
                          if(isset($_POST['save_two-all'])){
                            $two_img = $_FILES['two_img']['name'];
                            $two_tmp = $_FILES['two_img']['tmp_name'];
                            $two_upload = "../../../User-real/img/".$two_img;
                            if(move_uploaded_file($two_tmp, $two_upload)){
                              $two_delete = mysqli_query($conn, "DELETE FROM `Ad_typepost` WHERE `AM_uid_type`='two-type'");
                              if($two_delete){
                                $two_type = mysqli_real_escape_string($conn, $_POST['two-type']);
                                $two_insert = mysqli_query($conn, "INSERT INTO `Ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$two_img','$two_type','two-type')");
                                if($two_insert){
                                  echo '<script>
                                        swal({
                                          title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສອງ ສຳເລັດ!",
                                          text: "ກົດນີ້ເພືອ Reset.",
                                          type: "success"
                                        },
                                        function(){
                                          window.location="../edit-index/edit-about-index";
                                        });
                                      </script>';
                                }
                              }
                            }
                          }
                          if(isset($_POST['save-two'])){
                            $two_type = mysqli_real_escape_string($conn, $_POST['two-type']);
                            $update_two = mysqli_query($conn, "UPDATE `Ad_typepost` SET `AM_type`='$two_type' WHERE `AM_uid_type`='two-type'");
                            if($update_two){
                                echo '<script>
                                      swal({
                                        title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສາມ ສຳເລັດ!",
                                        text: "ກົດນີ້ເພືອ Reset.",
                                        type: "success"
                                      },
                                      function(){
                                        window.location="../edit-index/edit-about-index";
                                      });
                                    </script>';
                              }
                          }
                        ?>

<!-- three-office  -->
<div class="popup-three">
                    <div class="closs-three"></div>
                        <div class="div-popup">
                          <div class="padding-popup">
                            <div class="header"><h5>ປ່ຽນແປ່ງ ຂໍ້ມູນໜ້າຫຼັກ</h5></div><hr>
                              
                                <?PHP 
                                  $three_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Ad_typepost` WHERE `AM_uid_type`='three-type'"));
                                ?>
                                <div class="column">
                                  <input accept="image/*" name="three_img" type="file" id="imgInp_three" class="btn-sm" /><br>
                                  <img id="blah_three" src="../../../User-real/img/<?PHP echo $three_show['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 200px"/><br>
                                </div>
                                <div class="cloumn group-insert">
                                  <label for="">ເລືອກປະເພດ</label>
                                 
                                  <select name="three-type" class="form-control control-sl" style="height: 30px">
                                    <option value="<?PHP echo $three_show['AM_type'] ?>"><?PHP echo $three_show['AM_type'] ?></option>
                                    <?PHP
                                      $sql_type = mysqli_query($conn, "SELECT * FROM `AM-dcm-category`");
                                      foreach($sql_type as $row_type){
                                    ?>
                                    <option value="<?PHP echo $row_type['dcm_category'] ?>"><?PHP echo $row_type['dcm_category'] ?></option>
                                    <?PHP } ?>
                                  </select>
                                  &nbsp;
                                  <div class="about-time">
                                    ຂໍ້ມູນປະຈຸບັນ <br>
                                    <p><?PHP echo ">> ".$three_show['AM_type']." <<" ?></p>
                                  </div>
                                  <button name="save-three" class="btn-sm btn-info"><i class="bi bi-cloud-download-fill"></i> ບັນທືກການປຽນແປ່ງ</button>
                                  <button name="save_three-all" class="btn-sm btn-warning"><i class="bi bi-check-all"></i> ບັກທືກທັ້ງໝົດ</button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <?PHP 
                          if(isset($_POST['save_three-all'])){
                            $three_img = $_FILES['three_img']['name'];
                            $three_tmp = $_FILES['three_img']['tmp_name'];
                            $three_upload = "../../../User-real/img/".$three_img;
                            if(move_uploaded_file($three_tmp, $three_upload)){
                              $three_delete = mysqli_query($conn, "DELETE FROM `Ad_typepost` WHERE `AM_uid_type`='three-type'");
                              if($three_delete){
                                $three_type = mysqli_real_escape_string($conn, $_POST['three-type']);
                                $three_insert = mysqli_query($conn, "INSERT INTO `Ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$three_img','$three_type','three-type')");
                                if($three_insert){
                                  echo '<script>
                                        swal({
                                          title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສາມ ສຳເລັດ!",
                                          text: "ກົດນີ້ເພືອ Reset.",
                                          type: "success"
                                        },
                                        function(){
                                          window.location="../edit-index/edit-about-index";
                                        });
                                      </script>';
                                }
                              }
                            }
                          }
                          if(isset($_POST['save-three'])){
                            $three_type = mysqli_real_escape_string($conn, $_POST['three-type']);
                            $update_three = mysqli_query($conn, "UPDATE `Ad_typepost` SET `AM_type`='$three_type' WHERE `AM_uid_type`='three-type'");
                            if($update_three){
                                echo '<script>
                                      swal({
                                        title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສາມ ສຳເລັດ!",
                                        text: "ກົດນີ້ເພືອ Reset.",
                                        type: "success"
                                      },
                                      function(){
                                        window.location="../edit-index/edit-about-index";
                                      });
                                    </script>';
                              }
                          }
                        ?>
                      
<!-- flow-office  -->
<div class="popup-flow">
                    <div class="closs-flow"></div>
                        <div class="div-popup">
                          <div class="padding-popup">
                            <div class="header"><h5>ປ່ຽນແປ່ງ ຂໍ້ມູນໜ້າຫຼັກ</h5></div><hr>
                              
                                <?PHP 
                                  $flow_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Ad_typepost` WHERE `AM_uid_type`='flow-type'"));
                                ?>
                                <div class="column">
                                  <input accept="image/*" name="flow_img" type="file" id="imgInp_flow" class="btn-sm" /><br>
                                  <img id="blah_flow" src="../../../User-real/img/<?PHP echo $flow_show['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 200px"/><br>
                                </div>
                                <div class="cloumn group-insert">
                                  <label for="">ເລືອກປະເພດ</label>
                                 
                                  <select name="flow-type" class="form-control control-sl" style="height: 30px">
                                    <option value="<?PHP echo $flow_show['AM_type'] ?>"><?PHP echo $flow_show['AM_type'] ?></option>
                                    <?PHP
                                      $sql_type = mysqli_query($conn, "SELECT * FROM `AM-dcm-category`");
                                      foreach($sql_type as $row_type){
                                    ?>
                                    <option value="<?PHP echo $row_type['dcm_category'] ?>"><?PHP echo $row_type['dcm_category'] ?></option>
                                    <?PHP } ?>
                                  </select>
                                  &nbsp;
                                  <div class="about-time">
                                    ຂໍ້ມູນປະຈຸບັນ <br>
                                    <p><?PHP echo ">> ".$flow_show['AM_type']." <<" ?></p>
                                  </div>
                                  <button name="save-flow" class="btn-sm btn-info"><i class="bi bi-cloud-download-fill"></i> ບັນທືກການປຽນແປ່ງ</button>
                                  <button name="save_flow-all" class="btn-sm btn-warning"><i class="bi bi-check-all"></i> ບັກທືກທັ້ງໝົດ</button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <?PHP 
                          if(isset($_POST['save_flow-all'])){
                            $flow_img = $_FILES['flow_img']['name'];
                            $flow_tmp = $_FILES['flow_img']['tmp_name'];
                            $flow_upload = "../../../User-real/img/".$flow_img;
                            if(move_uploaded_file($flow_tmp, $flow_upload)){
                              $flow_delete = mysqli_query($conn, "DELETE FROM `Ad_typepost` WHERE `AM_uid_type`='flow-type'");
                              if($flow_delete){
                                $flow_type = mysqli_real_escape_string($conn, $_POST['flow-type']);
                                $flow_insert = mysqli_query($conn, "INSERT INTO `Ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$flow_img','$flow_type','flow-type')");
                                if($flow_insert){
                                  echo '<script>
                                        swal({
                                          title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສີ່ ສຳເລັດ!",
                                          text: "ກົດນີ້ເພືອ Reset.",
                                          type: "success"
                                        },
                                        function(){
                                          window.location="../edit-index/edit-about-index";
                                        });
                                      </script>';
                                }
                              }
                            }
                          }
                          if(isset($_POST['save-flow'])){
                            $flow_type = mysqli_real_escape_string($conn, $_POST['flow-type']);
                            $update_flow = mysqli_query($conn, "UPDATE `Ad_typepost` SET `AM_type`='$flow_type' WHERE `AM_uid_type`='flow-type'");
                            if($update_flow){
                                echo '<script>
                                      swal({
                                        title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສີ່ ສຳເລັດ!",
                                        text: "ກົດນີ້ເພືອ Reset.",
                                        type: "success"
                                      },
                                      function(){
                                        window.location="../edit-index/edit-about-index";
                                      });
                                    </script>';
                              }
                          }
                        ?>
                      
<!-- fly-office  -->
<div class="popup-fly">
                    <div class="closs-fly"></div>
                        <div class="div-popup">
                          <div class="padding-popup">
                            <div class="header"><h5>ປ່ຽນແປ່ງ ຂໍ້ມູນໜ້າຫຼັກ</h5></div><hr>
                              
                                <?PHP 
                                  $fly_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Ad_typepost` WHERE `AM_uid_type`='fly-type'"));
                                ?>
                                <div class="column">
                                  <input accept="image/*" name="fly_img" type="file" id="imgInp_fly" class="btn-sm" /><br>
                                  <img id="blah_fly" src="../../../User-real/img/<?PHP echo $fly_show['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 200px"/><br>
                                </div>
                                <div class="cloumn group-insert">
                                  <label for="">ເລືອກປະເພດ</label>
                                 
                                  <select name="fly-type" class="form-control control-sl" style="height: 30px">
                                    <option value="<?PHP echo $fly_show['AM_type'] ?>"><?PHP echo $flow_show['AM_type'] ?></option>
                                    <?PHP
                                      $sql_type = mysqli_query($conn, "SELECT * FROM `AM-dcm-category`");
                                      foreach($sql_type as $row_type){
                                    ?>
                                    <option value="<?PHP echo $row_type['dcm_category'] ?>"><?PHP echo $row_type['dcm_category'] ?></option>
                                    <?PHP } ?>
                                  </select>
                                  &nbsp;
                                  <div class="about-time">
                                    ຂໍ້ມູນປະຈຸບັນ <br>
                                    <p><?PHP echo ">> ".$fly_show['AM_type']." <<" ?></p>
                                  </div>
                                  <button name="save-fly" class="btn-sm btn-info"><i class="bi bi-cloud-download-fill"></i> ບັນທືກການປຽນແປ່ງ</button>
                                  <button name="save_fly-all" class="btn-sm btn-warning"><i class="bi bi-check-all"></i> ບັກທືກທັ້ງໝົດ</button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <?PHP 
                          if(isset($_POST['save_fly-all'])){
                            $fly_img = $_FILES['fly_img']['name'];
                            $fly_tmp = $_FILES['fly_img']['tmp_name'];
                            $fly_upload = "../../../User-real/img/".$fly_img;
                            if(move_uploaded_file($fly_tmp, $fly_upload)){
                              $fly_delete = mysqli_query($conn, "DELETE FROM `Ad_typepost` WHERE `AM_uid_type`='fly-type'");
                              if($fly_delete){
                                $fly_type = mysqli_real_escape_string($conn, $_POST['fly-type']);
                                $fly_insert = mysqli_query($conn, "INSERT INTO `Ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$fly_img','$fly_type','fly-type')");
                                if($fly_insert){
                                  echo '<script>
                                        swal({
                                          title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ຫ້າ ສຳເລັດ!",
                                          text: "ກົດນີ້ເພືອ Reset.",
                                          type: "success"
                                        },
                                        function(){
                                          window.location="../edit-index/edit-about-index";
                                        });
                                      </script>';
                                }
                              }
                            }
                          }
                          if(isset($_POST['save-fly'])){
                            $fly_type = mysqli_real_escape_string($conn, $_POST['fly-type']);
                            $update_fly = mysqli_query($conn, "UPDATE `Ad_typepost` SET `AM_type`='$fly_type' WHERE `AM_uid_type`='fly-type'");
                            if($update_fly){
                                echo '<script>
                                      swal({
                                        title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ຫ້າ ສຳເລັດ!",
                                        text: "ກົດນີ້ເພືອ Reset.",
                                        type: "success"
                                      },
                                      function(){
                                        window.location="../edit-index/edit-about-index";
                                      });
                                    </script>';
                              }
                          }
                        ?>
                      
<!-- zero-office  -->
<div class="popup-zero">
                    <div class="closs-zero"></div>
                        <div class="div-popup">
                          <div class="padding-popup">
                            <div class="header"><h5>ປ່ຽນແປ່ງ ຂໍ້ມູນໜ້າຫຼັກ</h5></div><hr>
                              
                                <?PHP 
                                  $zero_show = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Ad_typepost` WHERE `AM_uid_type`='zero-type'"));
                                ?>
                                <div class="column">
                                  <input accept="image/*" name="zero_img" type="file" id="imgInp_zero" class="btn-sm" /><br>
                                  <img id="blah_zero" src="../../../User-real/img/<?PHP echo $zero_show['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:300px; height: 250px"/><br>
                                </div>
                                <div class="cloumn group-insert">
                                  <label for="">ເລືອກປະເພດ</label>
                                 
                                  <select name="zero-type" class="form-control control-sl" style="height: 30px">
                                    <option value="<?PHP echo $zero_show['AM_type'] ?>"><?PHP echo $flow_show['AM_type'] ?></option>
                                    <?PHP
                                      $sql_type = mysqli_query($conn, "SELECT * FROM `AM-dcm-category`");
                                      foreach($sql_type as $row_type){
                                    ?>
                                    <option value="<?PHP echo $row_type['dcm_category'] ?>"><?PHP echo $row_type['dcm_category'] ?></option>
                                    <?PHP } ?>
                                  </select>
                                  &nbsp;
                                  <div class="about-time">
                                    ຂໍ້ມູນປະຈຸບັນ <br>
                                    <p><?PHP echo ">> ".$zero_show['AM_type']." <<" ?></p>
                                  </div>
                                  <button name="save-zero" class="btn-sm btn-info"><i class="bi bi-cloud-download-fill"></i> ບັນທືກການປຽນແປ່ງ</button>
                                  <button name="save_zero-all" class="btn-sm btn-warning"><i class="bi bi-check-all"></i> ບັກທືກທັ້ງໝົດ</button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <?PHP    
                          if(isset($_POST['save_zero-all'])){
                            $zero_img = $_FILES['zero_img']['name'];
                            $zero_tmp = $_FILES['zero_img']['tmp_name'];
                            $zero_upload = "../../../User-real/img/".$zero_img;
                            if(move_uploaded_file($zero_tmp, $zero_upload)){
                              $zero_delete = mysqli_query($conn, "DELETE FROM `Ad_typepost` WHERE `AM_uid_type`='zero-type'");
                              if($zero_delete){
                                $zero_type = mysqli_real_escape_string($conn, $_POST['zero-type']);
                                $zero_insert = mysqli_query($conn, "INSERT INTO `Ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$zero_img','$zero_type','zero-type')");
                                if($zero_insert){
                                  echo '<script>
                                        swal({
                                          title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສູນ ສຳເລັດ!",
                                          text: "ກົດນີ້ເພືອ Reset.",
                                          type: "success"
                                        },
                                        function(){
                                          window.location="../edit-index/edit-about-index";
                                        });
                                      </script>';
                                }
                              }
                            }
                          }
                          if(isset($_POST['save-zero'])){
                            $zero_type = mysqli_real_escape_string($conn, $_POST['zero-type']);
                            $update_zero = mysqli_query($conn, "UPDATE `Ad_typepost` SET `AM_type`='$zero_type' WHERE `AM_uid_type`='zero-type'");
                            if($update_zero){
                                echo '<script>
                                      swal({
                                        title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສູນ ສຳເລັດ!",
                                        text: "ກົດນີ້ເພືອ Reset.",
                                        type: "success"
                                      },
                                      function(){
                                        window.location="../edit-index/edit-about-index";
                                      });
                                    </script>';
                              }
                          }
                        ?>
                      