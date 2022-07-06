<div class="col-md-4">
                        <div class="card" style="text-align: center">ຈັດການບ້ານ</div>
                        <div class="">
                            <input type="text" name="inser_home" class="input-insert"><button type="submit" name="sub_home" class='control-edit'>ເພີມຂໍ້ມູນ</button>
                          </div>
                          <?PHP 
                            if(isset($_GET['show_home'])){
                              if(isset($_POST['sub_home'])){
                                $inser_home = mysqli_real_escape_string($conn, $_POST['inser_home']);
                                if($inser_home){
                                  $get_vil = $_GET['show_home'];
                                  $insert_dis = mysqli_query($conn, "INSERT INTO `AM-dcm-home`(`dcm_home`, `dcm_home_uid`, `village_id`) VALUES ('$inser_home','1','$get_vil')");
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
                                }elseif($inser_home == ""){
                                  echo '<div class="alert-distric alert-danger" role="alert">
                                        ກະລຸນາປ່ອນຊື່ແຂວງ....
                                      </div>';
                                }
                                
                              }
                            }
                            if(isset($_GET['update_home'])){
                              if(isset($_POST['sub_home'])){
                                $inser_home = mysqli_real_escape_string($conn, $_POST['inser_home']);
                                if($inser_home){
                                  $get_vil = $_GET['update_home'];
                                  $get_se_vil = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `AM-dcm-home` WHERE `dcm_home_id`=$get_vil"));
                                  $id_get_vil = $get_se_vil['village_id'];
                                  $insert_dis = mysqli_query($conn, "INSERT INTO `AM-dcm-home`(`dcm_home`, `dcm_home_uid`, `village_id`) VALUES ('$inser_home','1','$id_get_vil')");
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
                                }elseif($inser_home == ""){
                                  echo '<div class="alert-distric alert-danger" role="alert">
                                        ກະລຸນາປ່ອນຊື່ແຂວງ....
                                      </div>';
                                }
                                
                              }
                            }
                          ?>
                          <div class="card scroll">
                            <table class="table table-hover">
                                <tr>
                                    <th><button type="submit" name="delete_home" class="delete_distric">ລົບ</buuton></th>
                                    <th id="th" colspan="2">ບ້ານ</th>
                                    <th>ຈັດການ</th>
                                </tr>
                                <?PHP 
                                    if(isset($_GET['show_home'])){
                                      $show_home = $_GET['show_home'];
                                      $query_h = "SELECT * FROM `AM-dcm-home` WHERE `village_id`=$show_home ORDER BY dcm_home_id DESC";
                                      $result_h = $conn->query($query_h);
                                      if ($result_h->num_rows > 0 ) {
                                        $query_v = mysqli_query($conn, "SELECT * FROM `AM-dcm-village` WHERE `dcm_village_id`=$show_home");
                                        $row_v = mysqli_fetch_array($query_v);
                                        echo "ໃນຕົວເມືອງ ".$row_v['dcm_village'];
                                        while ($row_h = $result_h->fetch_assoc()) {
                                          echo '<tr>';
                                          echo '<th>
                                            <input type="checkbox" name="home_checkbox[]" value="'.$row_h['dcm_home_id'].'">
                                            <input type="checkbox" name="home_checkbox[]" value="0" style="display: none;" checked></th>';
                                          echo '<th colspan="2">'.$row_h['dcm_home'].'</th>';
                                          echo '<th><a href="?update_home='.$row_h['dcm_home_id'].'"><i class="bi bi-pencil-square"></i> ແກ້ໄຂ</th>';
                                          echo '</tr>';
                                        }
                                      }else{

                                      }
                                    }
                                    if(isset($_GET['update_home'])){
                                      $update_home = $_GET['update_home'];
                                      $select_home = mysqli_query($conn, "SELECT * FROM `AM-dcm-home` WHERE `dcm_home_id`=$update_home");
                                      $row_up_home = mysqli_fetch_array ($select_home);
                                      if($row_up_home){
                                        echo '<tr id="input-update">
                                            <th colspan="3"><input type="text" name="edit_home_name" value="'.$row_up_home['dcm_home'].'" class="form-control control"></th>
                                            <th><button type="submit" name="edit_home" class="control-edit">ແກ້ໄຂ</button></th>
                                          </tr>';
                                          $uid_home = $row_up_home['village_id'];
                                          $query_home = mysqli_query ($conn, "SELECT * FROM `AM-dcm-home` WHERE `village_id`=$uid_home ORDER BY dcm_home_id DESC");
                                          $query_v_h = mysqli_query($conn, "SELECT * FROM `AM-dcm-village` WHERE `dcm_village_id`=$uid_home");
                                          $row_v_h = mysqli_fetch_array($query_v_h);
                                          echo "ໃນຕົວເມືອງ ".$row_v_h['dcm_village'];
                                            while ($row_h = mysqli_fetch_assoc($query_home)) {
                                              echo '<tr>';
                                              echo '<th>
                                                <input type="checkbox" name="home_checkbox[]" value="'.$row_h['dcm_home_id'].'">
                                                <input type="checkbox" name="home_checkbox[]" value="0" style="display: none;" checked></th>';
                                              echo '<th colspan="2">'.$row_h['dcm_home'].'</th>';
                                              echo '<th><a href="?update_home='.$row_h['dcm_home_id'].'"><i class="bi bi-pencil-square"></i> ແກ້ໄຂ</th>';
                                              echo '</tr>';
                                            }
                                      }else{

                                      }
                                    }
                                    if(isset($_POST['edit_home'])){
                                      $id_home = $_GET['update_home'];
                                      $edit_home_name = $_POST['edit_home_name'];
                                      $update_vill = mysqli_query($conn, "UPDATE `AM-dcm-home` SET `dcm_home`='$edit_home_name' WHERE `dcm_home_id`=$id_home");
                                      if($update_vill){
                                        echo '<script>
                                              swal({
                                              title: "ປ່ຽນແປ່ງຂໍ້ມູນ ບ້ານສຳເລັດ!",
                                              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                              type: "success"
                                              },
                                                function(){
                                                window.location="?update_home='.$id_home.'"
                                              });
                                            </script>';
                                      }
                                    }
                                  ?>
                            </table>
                          </div>
                      </div>