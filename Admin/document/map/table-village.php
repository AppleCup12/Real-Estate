<div class="col-md-4">
                          <div class="card" style="text-align: center">ຈັດການເມືອງ</div>
                          <div class="">
                            <input type="text" name="inser_vil" class="input-insert"><button type="submit" name="sub_vil" class='control-edit'>ເພີມຂໍ້ມູນ</button>
                          </div>
                          <?PHP 
                            if(isset($_GET['show_village'])){
                              if(isset($_POST['sub_vil'])){
                                $inser_vil = mysqli_real_escape_string($conn, $_POST['inser_vil']);
                                if($inser_vil){
                                  $show_dis = $_GET['show_village'];
                                  $insert_vil = mysqli_query($conn, "INSERT INTO `AM-dcm-village`(`dcm_village`, `dcm_village_uid`, `distric_id`) VALUES ('$inser_vil','1','$show_dis')");
                                  if($insert_vil){
                                    echo '<script>
                                        swal({
                                        title: "ບັນທືກຂໍ້ມູນແຂ່ວງສຳເລັດ!",
                                        text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                        type: "success"
                                        },
                                          function(){
                                          window.location="?show_village='.$show_dis.'"
                                        });
                                      </script>';
                                  }else{
                                    echo '<div class="alert-distric alert-danger" role="alert">
                                          ກະລຸນາເລືອກແຂວງກອນບັນທືກ....';
                                  }
                                }elseif($inser_vil == ""){
                                  echo '<div class="alert-distric alert-danger" role="alert">
                                        ກະລຸນາປ່ອນຊື່ແຂວງ....
                                      </div>';
                                }
                                
                              }
                            }
                            if(isset($_GET['show_home'])){
                              if(isset($_POST['sub_vil'])){
                                $inser_vil = mysqli_real_escape_string($conn, $_POST['inser_vil']);
                                if($inser_vil){
                                  $show_dis = $_GET['show_home'];
                                  $show_se_vil = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `AM-dcm-village` WHERE `dcm_village_id`=$show_dis  ORDER BY dcm_village_id DESC"));
                                  $id_inser_dis = $show_se_vil['distric_id'];
                                  $insert_vil = mysqli_query($conn, "INSERT INTO `AM-dcm-village`(`dcm_village`, `dcm_village_uid`, `distric_id`) VALUES ('$inser_vil','1','$id_inser_dis')");
                                  if($insert_vil){
                                    echo '<script>
                                        swal({
                                        title: "ບັນທືກຂໍ້ມູນແຂ່ວງສຳເລັດ!",
                                        text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                        type: "success"
                                        },
                                          function(){
                                          window.location="?show_home='.$show_dis.'"
                                        });
                                      </script>';
                                  }else{
                                    echo '<div class="alert-distric alert-danger" role="alert">
                                          ກະລຸນາເລືອກແຂວງກອນບັນທືກ....';
                                  }
                                }elseif($inser_vil == ""){
                                  echo '<div class="alert-distric alert-danger" role="alert">
                                        ກະລຸນາປ່ອນຊື່ແຂວງ....
                                      </div>';
                                }
                                
                              }
                            }
                            if(isset($_GET['update_village'])){
                                if(isset($_POST['sub_vil'])){
                                  $inser_vil = mysqli_real_escape_string($conn, $_POST['inser_vil']);
                                  if($inser_vil){
                                    $show_dis = $_GET['update_village'];
                                    $show_se_vil = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `AM-dcm-village` WHERE `dcm_village_id`=$show_dis"));
                                    $id_inser_dis = $show_se_vil['distric_id'];
                                    $insert_vil = mysqli_query($conn, "INSERT INTO `AM-dcm-village`(`dcm_village`, `dcm_village_uid`, `distric_id`) VALUES ('$inser_vil','1','$id_inser_dis')");
                                    if($insert_vil){
                                      echo '<script>
                                          swal({
                                          title: "ບັນທືກຂໍ້ມູນແຂ່ວງສຳເລັດ!",
                                          text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                          type: "success"
                                          },
                                            function(){
                                            window.location="?show_home='.$show_dis.'"
                                          });
                                        </script>';
                                    }else{
                                      echo '<div class="alert-distric alert-danger" role="alert">
                                            ກະລຸນາເລືອກແຂວງກອນບັນທືກ....';
                                    }
                                  }elseif($inser_vil == ""){
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
                                    <th><button type="submit" name="delete_village" class="delete_distric">ລົບ</buuton></th>
                                    <th id="th">ເມືອງ</th>
                                    <th>ຈັດການ</th>
                                    <th>ສະແດງ</th>
                                </tr>
                                <?PHP 
                                    if(isset($_GET['update_village'])){
                                      $update_village = $_GET['update_village'];
                                      $select_vil = mysqli_query($conn, "SELECT * FROM `AM-dcm-village` WHERE `dcm_village_id`=$update_village");
                                      $row_up_vil = mysqli_fetch_array ($select_vil);
                                      if($row_up_vil){
                                        echo '<tr id="input-update">
                                            <th colspan="3"><input type="text" name="edit_vil_name" value="'.$row_up_vil['dcm_village'].'" class="form-control control"></th>
                                            <th><button type="submit" name="edit_vil" class="control-edit">ແກ້ໄຂ</button></th>
                                          </tr>';
                                          $uid_dis = $row_up_vil['distric_id'];
                                          $query_vil = mysqli_query ($conn, "SELECT * FROM `AM-dcm-village` WHERE `distric_id`=$uid_dis ORDER BY dcm_village_id DESC");
                                            while ($row_v = mysqli_fetch_assoc($query_vil)) {
                                              echo '<tr>';
                                              echo '<th>
                                                <input type="checkbox" name="vil_checkbox[]" value="'.$row_v['dcm_village_id'].'">
                                                <input type="checkbox" name="vil_checkbox[]" value="0" style="display: none;" checked></th>';
                                              echo '<th>'.$row_v['dcm_village'].'</th>';
                                              echo '<th><a href="?update_village='.$row_v['dcm_village_id'].'"><i class="bi bi-pencil-square"></i> ແກ້ໄຂ</th>';
                                              echo '<th><a href="?show_home='.$row_v['dcm_village_id'].'"><i class="bi bi-chevron-double-right"></i></th>';
                                              echo '</tr>';
                                            }
                                      }else{

                                      }
                                    }
                                    if(isset($_POST['edit_vil'])){
                                      $id_vil = $update_village;
                                      $edit_vil_name = $_POST['edit_vil_name'];
                                      $update_vill = mysqli_query($conn, "UPDATE `AM-dcm-village` SET `dcm_village`='$edit_vil_name' WHERE `dcm_village_id`=$id_vil");
                                      if($update_vill){
                                        echo '<script>
                                              swal({
                                              title: "ປ່ຽນແປ່ງຂໍ້ມູນ ເມືອງສຳເລັດ!",
                                              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                                              type: "success"
                                              },
                                                function(){
                                                window.location="?update_village='.$update_village.'"
                                              });
                                            </script>';
                                      }
                                    }
                                  ?>
                                <?PHP 
                                    if(isset($_GET['show_village'])){
                                      $show_village = $_GET['show_village'];
                                      if($show_village){
                                        $query_v = "SELECT * FROM `AM-dcm-village` where `distric_id`=$show_village ORDER BY dcm_village_id DESC";
                                        $result_v = $conn->query($query_v);
                                        if ($result_v->num_rows > 0 ) {
                                          $query_d = mysqli_query($conn, "SELECT * FROM `AM-dcm-distric` WHERE `dcm_distric_id`=$show_village");
                                          $row_d = mysqli_fetch_array($query_d);
                                          echo "ຕົວເມືອງໃນແຂ່ວງ ".$row_d['dcm_distric'];
                                          while ($row_v = $result_v->fetch_assoc()) {
                                            echo '<tr>';
                                            echo '<th>
                                                <input type="checkbox" name="vil_checkbox[]" value="'.$row_v['dcm_village_id'].'">
                                                <input type="checkbox" name="vil_checkbox[]" value="0" style="display: none;" checked></th>';
                                            echo '<th>'.$row_v['dcm_village'].'</th>';
                                            echo '<th><a href="?update_village='.$row_v['dcm_village_id'].'"><i class="bi bi-pencil-square"></i> ແກ້ໄຂ</th>';
                                            echo '<th><a href="?show_home='.$row_v['dcm_village_id'].'"><i class="bi bi-chevron-double-right"></i></th>';
                                            echo '</tr>';
                                          }
                                        }else{

                                        }
                                      }
                                    }
                                    if(isset($_GET['show_home'])){
                                        $show_home_id = $_GET['show_home'];
                                        $query_v = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `AM-dcm-village` WHERE `dcm_village_id`=$show_home_id"));
                                        $ID_dis_vil = $query_v['distric_id'];
                                        $query_id_v = mysqli_query($conn, "SELECT * FROM `AM-dcm-village` WHERE `distric_id`=$ID_dis_vil  ORDER BY dcm_village_id DESC");
                                        if ($query_id_v->num_rows > 0 ) {
                                          echo "ຕົວເມືອງທັ້ງໝົດ!!";
                                          while ($row_v = $query_id_v->fetch_assoc()) {
                                            echo '<tr>';
                                            echo '<th>
                                                <input type="checkbox" name="vil_checkbox[]" value="'.$row_v['dcm_village_id'].'">
                                                <input type="checkbox" name="vil_checkbox[]" value="0" style="display: none;" checked></th>';
                                            echo '<th>'.$row_v['dcm_village'].'</th>';
                                            echo '<th><a href="?update_village='.$row_v['dcm_village_id'].'"><i class="bi bi-pencil-square"></i> ແກ້ໄຂ</th>';
                                            echo '<th><a href="?show_home='.$row_v['dcm_village_id'].'"><i class="bi bi-chevron-double-right"></i></th>';
                                            echo '</tr>';
                                          }
                                        }else{

                                        }
                                    }
                                    if(isset($_GET['update_home'])){
                                      $uid_id_home = $_GET['update_home'];
                                      $select_id_home = mysqli_query($conn, "SELECT * FROM `AM-dcm-home` WHERE `dcm_home_id`=$uid_id_home");
                                      $row_id_home = mysqli_fetch_array ($select_id_home);
                                      if($row_id_home){
                                          $uid_se_home = $row_id_home['village_id'];
                                          $query_Id_vil = mysqli_query ($conn, "SELECT * FROM `AM-dcm-village` WHERE `dcm_village_id`=$uid_se_home");
                                          $row_v_id = mysqli_fetch_array($query_Id_vil);
                                          $uid_d_v = $row_v_id['distric_id'];
                                          $query_d_id_v = mysqli_query ($conn, "SELECT * FROM `AM-dcm-village` WHERE `distric_id`=$uid_d_v ORDER BY dcm_village_id DESC");
                                            while ($row_v_id = mysqli_fetch_assoc($query_d_id_v)) {
                                              echo '<tr>';
                                              echo '<th>
                                                <input type="checkbox" name="vil_checkbox[]" value="'.$row_v_id['dcm_village_id'].'">
                                                <input type="checkbox" name="vil_checkbox[]" value="0" style="display: none;" checked></th>';
                                              echo '<th>'.$row_v_id['dcm_village'].'</th>';
                                              echo '<th><a href="?update_village='.$row_v_id['dcm_village_id'].'"><i class="bi bi-pencil-square"></i> ແກ້ໄຂ</th>';
                                              echo '<th><a href="?show_home='.$row_v_id['dcm_village_id'].'"><i class="bi bi-chevron-double-right"></i></th>';
                                              echo '</tr>';
                                            }
                                      }else{

                                      }
                                    }
                                  ?>
                            </table>
                          </div>
                      </div>