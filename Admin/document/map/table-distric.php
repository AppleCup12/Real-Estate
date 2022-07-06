<div class="col-md-4">
                        
                        <div class="card" style="text-align: center">ຈັດການແຂ່ວງ</div>
                          <div class="">
                            <input type="text" name="inser_dis" class="input-insert" placeholder="ເພີມແຂວງ:....."><button type="submit" name="sub_dis" class='control-edit'>ເພີມຂໍ້ມູນ</button>
                          </div>
                          <?PHP 
                            if(isset($_POST['sub_dis'])){
                              $inser_dis = mysqli_real_escape_string($conn, $_POST['inser_dis']);
                              if($inser_dis){
                                $insert_dis = mysqli_query($conn, "INSERT INTO `AM-dcm-distric`(`dcm_distric`, `dcm_distric_uid`) VALUES ('$inser_dis','1')");
                                echo '<script>
                                      swal({
                                      title: "ບັນທືກຂໍ້ມູນແຂ່ວງສຳເລັດ!",
                                      text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                      type: "success"
                                      },
                                        function(){
                                        window.location=""
                                      });
                                    </script>';
                              }elseif($inser_dis == ""){
                                echo '<div class="alert-distric alert-danger" role="alert">
                                      ກະລຸນາປ່ອນຊື່ແຂວງ....
                                    </div>';
                              }
                              
                            }
                          ?>
                          <div class="card scroll">
                            <table class="table table-hover" id="myTable">
                                <tr class="header">
                                    <th><button type="submit" name="delete_distric" class="delete_distric">ລົບ</buuton> </th>
                                    <th id="th">ແຂ່ວງ</th>
                                    <th>ຈັດການ</th>
                                    <th>ສະແດງ</th>
                                </tr>
                                <?PHP 
                                    if(isset($_GET['distric_update'])){
                                      $distric_update = $_GET['distric_update'];
                                      $select_dis = mysqli_query($conn, "SELECT * FROM `AM-dcm-distric` WHERE `dcm_distric_id`=$distric_update");
                                      $row_up_dis = mysqli_fetch_array ($select_dis);
                                      if($row_up_dis){
                                        echo '<tr id="input-update">
                                              <th colspan="3"><input type="text" name="edit_dis_name" value="'.$row_up_dis['dcm_distric'].'" class="form-control control"></th>
                                              <th><button type="submit" name="edit_dis" class="control-edit">ແກ້ໄຂ</button></th>
                                            </tr>';
                                        
                                      }else{

                                      }
                                    }

                                    if(isset($_POST['edit_dis'])){
                                      $id_dis = $row_up_dis['dcm_distric_id'];
                                      $edit_dis_name = $_POST['edit_dis_name'];
                                      $update_dis = mysqli_query($conn, "UPDATE `AM-dcm-distric` SET `dcm_distric`='$edit_dis_name' WHERE `dcm_distric_id`=$id_dis");
                                      if($update_dis){
                                        echo '<script>
                                              swal({
                                              title: "ປ່ຽນແປ່ງຂໍ້ມູນ ແຂ່ວງສຳເລັດ!",
                                              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                              type: "success"
                                              },
                                                function(){
                                                window.location=""
                                              });
                                            </script>';
                                      }
                                    }
                                  ?>
                                
                                <?PHP 
                                    $se_distric = mysqli_query ($conn, "SELECT * FROM `AM-dcm-distric` ORDER BY dcm_distric_id DESC");
                                    foreach($se_distric as $row_dis){
                                ?>

                                <tr>
                                    <th scope="row">
                                      <input type="checkbox" name="dis_checkbox[]" value="<?PHP echo $row_dis['dcm_distric_id'] ?>">
                                      <input type="checkbox" name="dis_checkbox[]" value="0" style="display: none;" checked>
                                    </th>
                                    <th><?PHP echo $row_dis['dcm_distric'] ?></th>
                                    <th><a href="?distric_update=<?PHP echo $row_dis['dcm_distric_id'] ?>"><i class="bi bi-pencil-square"></i> ແກ້ໄຂ</a></th>
                                    <th><a href="?show_village=<?PHP echo $row_dis['dcm_distric_id'] ?>"><i class="bi bi-chevron-double-right"></i></a></th>
                                </tr>
                                <?PHP } ?>
                            </table>
                            
                          </div>
                      </div>