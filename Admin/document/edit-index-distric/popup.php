<div class="popup popup-one">
    <div class="closs closs-one"></div>
    <div class="container-distric">
        <div class="header"><h4>ຈັດການປຽນແປ່ງໂຄສະໜາປະເພດໜ້າສົນໃຈ ໃນແຂວງ</h4></div><hr>
        <div class="row padding-dispopup">
            <?PHP 
                $sql_show_one = mysqli_fetch_array (mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='one_dis'"));
            ?>
            <div class="column">
                <input accept="image/*" name="one_img" type="file" id="DIS_ONE" class="btn-sm" /><br>
                <img id="mgdis_one" src="../../../User-real/img/<?PHP echo $sql_show_one['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 370px; border-radius: 4px"/><br>
            </div>
            <div class="column left-group">
                <select name="one_type" id="" class="form-control">
                    <option value="<?PHP echo $sql_show_one['AM_type'] ?>"><?PHP echo $sql_show_one['AM_type'] ?></option>
                   <?PHP 
                        $sql_dis = mysqli_query($conn, "SELECT * FROM `am-dcm-distric`");
                        foreach($sql_dis as $row_dis){
                   ?>
                    <option value="<?PHP echo $row_dis['dcm_distric'] ?>"><?PHP echo $row_dis['dcm_distric'] ?></option>
                   <?PHP } ?>
                </select>
                &nbsp;
                <p>>> <?PHP echo "ຂໍ້ມູນປະຈູບັນ  ".$sql_show_one['AM_type'] ?> <<</p><hr>
                <button name="one_save" class="btn-sm btn-info"><i class="bi bi-check2-circle"></i>  ບັກທືກປະເພດ</button>
                <button name="all_one" class="btn-sm btn-warning" style="color: #ffff"><i class="bi bi-check-all"></i> ປຽນແປ່ງຂໍ່ມູນທັ້ງໝົດ</button>
            </div>   
        </div>
        <?PHP 
            if(isset($_POST['all_one'])){
                $one_img = $_FILES['one_img']['name'];
                $one_tmp = $_FILES['one_img']['tmp_name'];
                $one_upload = "../../../User-real/img/".$one_img;
                if(move_uploaded_file($one_tmp, $one_upload)){
                    $one_type = mysqli_real_escape_string ($conn, $_POST['one_type']);
                    $delete = mysqli_query ($conn, "DELETE FROM `ad_typepost` WHERE `AM_uid_type`='one_dis'");
                    $sql_one_dis = mysqli_query ($conn, "INSERT INTO `ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$one_img','$one_type','one_dis')");
                    if($sql_one_dis){
                        echo '<script>
                            swal({
                            title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ໜື່ງ ສຳເລັດ!",
                            text: "ກົດນີ້ເພືອ Reset.",
                            type: "success"
                            },
                            function(){
                            window.location="";
                            });
                        </script>';
                    }
                }
                
            }
            if(isset($_POST['one_save'])){
                $one_type = mysqli_real_escape_string ($conn, $_POST['one_type']);
                if($one_type){
                    $one_update = mysqli_query ($conn, "UPDATE `ad_typepost` SET `AM_type`='$one_type' WHERE `AM_uid_type`='one_dis'");
                    if($one_update){
                            echo '<script>
                            swal({
                            title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ໜື່ງ ສຳເລັດ!",
                            text: "ກົດນີ້ເພືອ Reset.",
                            type: "success"
                            },
                            function(){
                            window.location="";
                            });
                        </script>';
                    }
                }

            }
        ?>
</div>
</div>

<!--  -->
<div class="popup popup-two">
    <div class="closs closs-two"></div>
    <div class="container-distric">
        <div class="header"><h4>ຈັດການປຽນແປ່ງໂຄສະໜາປະເພດໜ້າສົນໃຈ ໃນແຂວງ</h4></div><hr>
        <div class="row padding-dispopup">
            <?PHP 
                $sql_show_two = mysqli_fetch_array (mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='two_dis'"));
            ?>
            <div class="column">
                <input accept="image/*" name="two_img" type="file" id="DIS_TWO" class="btn-sm" /><br>
                <img id="mgdis_two" src="../../../User-real/img/<?PHP echo $sql_show_two['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 370px; border-radius: 4px"/><br>
            </div>
            <div class="column left-group">
                <select name="two_type" id="" class="form-control">
                    <option value="<?PHP echo $sql_show_two['AM_type'] ?>"><?PHP echo $sql_show_two['AM_type'] ?></option>
                   <?PHP 
                        $sql_dis = mysqli_query($conn, "SELECT * FROM `am-dcm-distric`");
                        foreach($sql_dis as $row_dis){
                   ?>
                    <option value="<?PHP echo $row_dis['dcm_distric'] ?>"><?PHP echo $row_dis['dcm_distric'] ?></option>
                   <?PHP } ?>
                </select>
                &nbsp;
                <p>>> <?PHP echo "ຂໍ້ມູນປະຈູບັນ  ".$sql_show_two['AM_type'] ?> <<</p><hr>
                <button name="two_save" class="btn-sm btn-info"><i class="bi bi-check2-circle"></i>  ບັກທືກປະເພດ</button>
                <button name="all_two" class="btn-sm btn-warning" style="color: #ffff"><i class="bi bi-check-all"></i> ປຽນແປ່ງຂໍ່ມູນທັ້ງໝົດ</button>
            </div>   
        </div>
        <?PHP 
            if(isset($_POST['all_two'])){
                $two_img = $_FILES['two_img']['name'];
                $two_tmp = $_FILES['two_img']['tmp_name'];
                $two_upload = "../../../User-real/img/".$two_img;
                if(move_uploaded_file($two_tmp, $two_upload)){
                    $two_type = mysqli_real_escape_string ($conn, $_POST['two_type']);
                    $delete = mysqli_query ($conn, "DELETE FROM `ad_typepost` WHERE `AM_uid_type`='two_dis'");
                    $sql_two_dis = mysqli_query ($conn, "INSERT INTO `ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$two_img','$two_type','two_dis')");
                    if($sql_two_dis){
                        echo '<script>
                            swal({
                            title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສອງ ສຳເລັດ!",
                            text: "ກົດນີ້ເພືອ Reset.",
                            type: "success"
                            },
                            function(){
                            window.location="";
                            });
                        </script>';
                    }
                }
                
            }
            if(isset($_POST['two_save'])){
                $two_type = mysqli_real_escape_string ($conn, $_POST['two_type']);
                if($two_type){
                    $two_update = mysqli_query ($conn, "UPDATE `ad_typepost` SET `AM_type`='$two_type' WHERE `AM_uid_type`='two_dis'");
                    if($two_update){
                            echo '<script>
                            swal({
                            title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສອງ ສຳເລັດ!",
                            text: "ກົດນີ້ເພືອ Reset.",
                            type: "success"
                            },
                            function(){
                            window.location="";
                            });
                        </script>';
                    }
                }

            }
        ?>
</div>
</div>

<!--  -->


<!--  -->
<div class="popup popup-three">
    <div class="closs closs-three"></div>
    <div class="container-distric">
        <div class="header"><h4>ຈັດການປຽນແປ່ງໂຄສະໜາປະເພດໜ້າສົນໃຈ ໃນແຂວງ</h4></div><hr>
        <div class="row padding-dispopup">
            <?PHP 
                $sql_show_three = mysqli_fetch_array (mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='three_dis'"));
            ?>
            <div class="column">
                <input accept="image/*" name="three_img" type="file" id="DIS_THREE" class="btn-sm" /><br>
                <img id="mgdis_three" src="../../../User-real/img/<?PHP echo $sql_show_three['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 370px; border-radius: 4px"/><br>
            </div>
            <div class="column left-group">
                <select name="three_type" id="" class="form-control">
                    <option value="<?PHP echo $sql_show_three['AM_type'] ?>"><?PHP echo $sql_show_three['AM_type'] ?></option>
                   <?PHP 
                        $sql_dis = mysqli_query($conn, "SELECT * FROM `am-dcm-distric`");
                        foreach($sql_dis as $row_dis){
                   ?>
                    <option value="<?PHP echo $row_dis['dcm_distric'] ?>"><?PHP echo $row_dis['dcm_distric'] ?></option>
                   <?PHP } ?>
                </select>
                &nbsp;
                <p>>> <?PHP echo "ຂໍ້ມູນປະຈູບັນ  ".$sql_show_three['AM_type'] ?> <<</p><hr>
                <button name="three_save" class="btn-sm btn-info"><i class="bi bi-check2-circle"></i>  ບັກທືກປະເພດ</button>
                <button name="all_three" class="btn-sm btn-warning" style="color: #ffff"><i class="bi bi-check-all"></i> ປຽນແປ່ງຂໍ່ມູນທັ້ງໝົດ</button>
            </div>   
        </div>
        <?PHP 
            if(isset($_POST['all_three'])){
                $three_img = $_FILES['three_img']['name'];
                $three_tmp = $_FILES['three_img']['tmp_name'];
                $three_upload = "../../../User-real/img/".$three_img;
                if(move_uploaded_file($three_tmp, $three_upload)){
                    $three_type = mysqli_real_escape_string ($conn, $_POST['three_type']);
                    $delete = mysqli_query ($conn, "DELETE FROM `ad_typepost` WHERE `AM_uid_type`='three_dis'");
                    $sql_three_dis = mysqli_query ($conn, "INSERT INTO `ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$three_img','$three_type','three_dis')");
                    if($sql_three_dis){
                        echo '<script>
                            swal({
                            title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສາມ ສຳເລັດ!",
                            text: "ກົດນີ້ເພືອ Reset.",
                            type: "success"
                            },
                            function(){
                            window.location="";
                            });
                        </script>';
                    }
                }
                
            }
            if(isset($_POST['three_save'])){
                $three_type = mysqli_real_escape_string ($conn, $_POST['three_type']);
                if($three_type){
                    $three_update = mysqli_query ($conn, "UPDATE `ad_typepost` SET `AM_type`='$three_type' WHERE `AM_uid_type`='three_dis'");
                    if($three_update){
                            echo '<script>
                            swal({
                            title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສາມ ສຳເລັດ!",
                            text: "ກົດນີ້ເພືອ Reset.",
                            type: "success"
                            },
                            function(){
                            window.location="";
                            });
                        </script>';
                    }
                }

            }
        ?>
</div>
</div>

<!--  -->

<div class="popup popup-flow">
    <div class="closs closs-flow"></div>
    <div class="container-distric">
        <div class="header"><h4>ຈັດການປຽນແປ່ງໂຄສະໜາປະເພດໜ້າສົນໃຈ ໃນແຂວງ</h4></div><hr>
        <div class="row padding-dispopup">
            <?PHP 
                $sql_show_flow = mysqli_fetch_array (mysqli_query($conn, "SELECT * FROM `ad_typepost` WHERE `AM_uid_type`='flow_dis'"));
            ?>
            <div class="column">
                <input accept="image/*" name="flow_img" type="file" id="DIS_FLOW" class="btn-sm" /><br>
                <img id="mgdis_flow" src="../../../User-real/img/<?PHP echo $sql_show_flow['AM_img'] ?>" alt="ເລືອກຮູບປຽນແປງ" style="width:320px; height: 370px; border-radius: 4px"/><br>
            </div>
            <div class="column left-group">
                <select name="flow_type" id="" class="form-control">
                    <option value="<?PHP echo $sql_show_flow['AM_type'] ?>"><?PHP echo $sql_show_flow['AM_type'] ?></option>
                   <?PHP 
                        $sql_dis = mysqli_query($conn, "SELECT * FROM `am-dcm-distric`");
                        foreach($sql_dis as $row_dis){
                   ?>
                    <option value="<?PHP echo $row_dis['dcm_distric'] ?>"><?PHP echo $row_dis['dcm_distric'] ?></option>
                   <?PHP } ?>
                </select>
                &nbsp;
                <p>>> <?PHP echo "ຂໍ້ມູນປະຈູບັນ  ".$sql_show_flow['AM_type'] ?> <<</p><hr>
                <button name="flow_save" class="btn-sm btn-info"><i class="bi bi-check2-circle"></i>  ບັກທືກປະເພດ</button>
                <button name="all_flow" class="btn-sm btn-warning" style="color: #ffff"><i class="bi bi-check-all"></i> ປຽນແປ່ງຂໍ່ມູນທັ້ງໝົດ</button>
            </div>   
        </div>
        <?PHP 
            if(isset($_POST['all_flow'])){
                $flow_img = $_FILES['flow_img']['name'];
                $flow_tmp = $_FILES['flow_img']['tmp_name'];
                $flow_upload = "../../../User-real/img/".$flow_img;
                if(move_uploaded_file($flow_tmp, $flow_upload)){
                    $flow_type = mysqli_real_escape_string ($conn, $_POST['flow_type']);
                    $delete = mysqli_query ($conn, "DELETE FROM `ad_typepost` WHERE `AM_uid_type`='flow_dis'");
                    $sql_flow_dis = mysqli_query ($conn, "INSERT INTO `ad_typepost`(`AM_img`, `AM_type`, `AM_uid_type`) VALUES ('$flow_img','$flow_type','flow_dis')");
                    if($sql_flow_dis){
                        echo '<script>
                            swal({
                            title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສີ່ ສຳເລັດ!",
                            text: "ກົດນີ້ເພືອ Reset.",
                            type: "success"
                            },
                            function(){
                            window.location="";
                            });
                        </script>';
                    }
                }
                
            }
            if(isset($_POST['flow_save'])){
                $flow_type = mysqli_real_escape_string ($conn, $_POST['flow_type']);
                if($flow_type){
                    $flow_update = mysqli_query ($conn, "UPDATE `ad_typepost` SET `AM_type`='$flow_type' WHERE `AM_uid_type`='flow_dis'");
                    if($flow_update){
                            echo '<script>
                            swal({
                            title: "ບັກທືກຂໍ້ມູນປະເພດທີ່ສີ່ ສຳເລັດ!",
                            text: "ກົດນີ້ເພືອ Reset.",
                            type: "success"
                            },
                            function(){
                            window.location="";
                            });
                        </script>';
                    }
                }

            }
        ?>
</div>
</div>

<!--  -->

