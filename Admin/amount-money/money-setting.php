<form method="post">
<div class="popup">
    <div class="closs"></div>
        <div class="money-setting-about">
        <div class="group-header"><h4><i class="bi bi-sliders"></i> ກຳນົດເລດເງີນປະຈຸບັນ</h4><hr></div>
        <div class="hover-list">
            <button class="btn-sm btn-warning">ກ່ຽວກັບ</button>
            <div class="hover-popup">
                <b>ໝາຍເຫດ:</b> <label for="">ທ່ານສາມາດປັບລາຄາ ຄ່າບໍລິການ ການລົງໂຄສະນາໄດ້</label><br>
                <b>ເທັກນິກ ລາຄາປະຈຸບັນ:</b> <label for="">ກະລຸນາປ່ອນລົງໃນຊ່ອງ ປ້ອນຈຳນວນເງີນຄ່າບໍລິການ ຫຼື່ ກົດຈະສະແດງຈຳນວນເງີນທີ່ຜ່ານມາ ທ່ານສາມາດເລືອກເພືອປ່ຽນແປງໄດ້ເລີຍ ແລ້ວກົດບັນທືກ ການປ່ຽນແປງ ຫຼັງຈາກນັ້ນ ຄາບໍລິການປະຈຸບັນ ກໍຈະປ່ຽນຕາມຂໍ້ມູນປະຈຸບັນ</label><br>

                <b>ເທັກນິກ ເລດເງີນ THB:</b> <label for="">ກະລຸນາປ່ອນລົງໃນຊ່ອງ ປ້ອນຈຳນວນເລດເງີນ THB ຫຼື່ ກົດຈະສະແດງຈຳນວນເງີນທີ່ຜ່ານມາ ທ່ານສາມາດເລືອກເພືອປ່ຽນແປງໄດ້ເລີຍ ແລ້ວກົດບັນທືກ ການປ່ຽນແປງ ຫຼັງຈາກນັ້ນ ເລດເງີນປະຈຸບັນ ກໍຈະປ່ຽນຕາມຂໍ້ມູນປະຈຸບັນ</label><br>
            </div>
        </div>
        <div class="row padding-row">
            <?PHP 
                $show_sm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time'"));
                $show_sm_USD = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time_THB'"));
            ?>
            <div class="column column-setting border-right">
                <div class="card-money-setting-blue">
                    <div class="about-real-time-money">
                        <div class="row">
                            <i class="bi bi-cash-stack"></i>&nbsp;
                            <div class="real-time-money-01" style="font-size: 18px; margin-top: 5px">ລາຄາປະຈຸບັນ: </div>
                            <div class="real-time-money"><?PHP echo number_format($show_sm['ad_sm']) ?> KIP</div>
                        </div>
                    </div>
                </div>
                &nbsp;
                

                <div class="card-money-setting-insert">
                    
                    <div class="label-insert-money">
                        <i class="bi bi-cash-stack"></i>&nbsp;
                    </div>
                    <input id="ticketNum" type="number" name="ticketNum" list="defaultNumbers"  min="0" class="form-control" style="border:none; font-size: 16px; text-align: center" placeholder="ປ້ອນຈຳນວນເງີນຄ່າບໍລິການ">
                    <span class="validity"></span>
                    <datalist id="defaultNumbers">
                        <option value="ຈຳນວນເງີນລ່າສູດ">
                        <?PHP 
                            $select_money = mysqli_query ($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money' ORDER BY ad_sm_id DESC LIMIT 6 ");
                            foreach($select_money as $row_sm){
                        ?>
                        <option value="<?PHP echo $row_sm['ad_sm'] ?>">
                        <?PHP } ?>
                    </datalist>
                </div>
                &nbsp;

                <div class="group-btn">
                    <button type="submit" name="save_sm_money" class="btn-sm btn-info"><i class="bi bi-cloud-download"></i> ປ່ຽນແປ່ງ</button>
                </div>
            </div>
            <div class="column column-setting">
                <div class="card-money-setting-green">
                    <div class="about-real-time-money">
                        <div class="row">
                            <i class="bi bi-cash-coin"></i>&nbsp;
                            <div class="real-time-money-01" style="font-size: 18px; margin-top: 5px">ເລດເງີນປະຈຸບັນ: </div>
                            <div class="real-time-money"><?PHP echo number_format($show_sm_USD['ad_sm']).",000" ?> KIP</div>
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="card-money-setting-green">
                    <div class="about-real-time-money">
                        <div class="row">
                            <i class="bi bi-cash-coin"></i>&nbsp;
                            <i style="display:none"><?PHP 
                                $a = number_format($show_sm_USD['ad_sm']);
                                $b = number_format($show_sm_USD['ad_sm']);
                                $all = ($a / $b );
                            ?></i>
                            <div class="real-time-money-01" style="font-size: 18px; margin-top: 5px">ເລດເງີນປະຈຸບັນ: </div>
                            <div class="real-time-money">1,000 THB</div>
                        </div>
                    </div>
                </div>
                &nbsp;

                <div class="card-money-setting-insert">
                    
                    <div class="label-insert-money">
                        <i class="bi bi-cash-coin" style="color: #000000"></i>&nbsp;
                    </div>
                    <input id="ticketNum" type="number" name="ticketNumTHB" list="defaultNumbersTHB"  min="0" max="1000" class="form-control" style="border:none; font-size: 16px; text-align: center" placeholder="ກະລຸນາປ່ອນເລດເງີນ THB">
                    <span class="validity"></span>
                    <datalist id="defaultNumbersTHB">
                        <option value="ເລດເງີນລ່າສູດ">
                        <?PHP 
                            $select_moneyUSD = mysqli_query ($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money_THB' ORDER BY ad_sm_id DESC LIMIT 6 ");
                            foreach($select_moneyUSD as $row_smUSD){
                        ?>
                        <option value="<?PHP echo $row_smUSD['ad_sm'] ?>">
                        <?PHP } ?>
                    </datalist>
                </div>
                &nbsp;

                <div class="group-btn">
                    <button type="submit" name="thb_money" class="btn-sm btn-primary"><i class="bi bi-cloud-download"></i> ປ່ຽນແປ່ງ</button>
                </div>
                
                
            </div>
        </div>
    </div>
</div>


<div class="popup_01">
    <div class="closs_01"></div>
        <div class="money-setting-about">
        <div class="group-header"><h4><i class="bi bi-sliders"></i> ກຳນົດຈຳນວນວົງເງີນໂຄສະນາສູງສຸດ</h4><hr></div>
       
        <div class="row padding-row">
            <?PHP 
                $show_sm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time'"));
                $show_sm_CSN = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='money_real_time_CSN'"));
            ?>
            <div class="column column-setting border-right">
                <div class="card-money-setting-blue">
                    <div class="about-real-time-money">
                        <div class="row">
                            <i class="bi bi-cash-stack"></i>&nbsp;
                            <div class="real-time-money-01" style="font-size: 18px; margin-top: 5px">ວົງເງີນປະຈຸບັນ: </div>
                            <div class="real-time-money"><?PHP if($show_sm_CSN){ echo number_format($show_sm_CSN['ad_sm']);} ?> KIP</div>
                        </div>
                    </div>
                </div>
                &nbsp;

                <div class="card-money-setting-insert">
                    
                    <div class="label-insert-money">
                        <i class="bi bi-cash-stack"></i>&nbsp;
                    </div>
                    <input id="ticketNum" type="number" name="ticketNum02" list="defaultNumbers02"  min="0" class="form-control" style="border:none; font-size: 16px; text-align: center" placeholder="ປ້ອນຈຳນວນວົງເງີນໂຄສະນາ">
                    <span class="validity"></span>
                    <datalist id="defaultNumbers02">
                        <option value="ຈຳນວນວົງເງີນລ່າສູດ">
                        <?PHP 
                            $select_money = mysqli_query ($conn, "SELECT * FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money_CSN' ORDER BY ad_sm_id DESC LIMIT 6 ");
                            foreach($select_money as $row_qty){
                        ?>
                        <option value="<?PHP echo $row_qty['ad_sm'] ?>">
                        <?PHP } ?>
                    </datalist>
                </div>
                &nbsp;

                <div class="group-btn">
                    <button type="submit" name="save_sm_money_CSN" class="btn-sm btn-info"><i class="bi bi-cloud-download"></i> ປ່ຽນແປ່ງ</button>
                </div>
            </div>
            <div class="column column-setting">
                <b>ໝາຍເຫດ:</b> <label for="">ຈຳກັດເງີນໂຄສະນາ ວົງເງີນນີ້ຈະເປັນໂຕກຳນົດການໂຄສະນາ ກະລຸນາກອດສອບໃຫ້ຄົບຖ້ວນ</label><br>
                <b>ເທັກນິກ ຈຳກັດວົງເງີນໂຄສະນາ:</b> <label for="">ກະລຸນາປ່ອນລົງໃນຊ່ອງ ປ້ອນຈຳນວນວົງເງີນການໂຄສິນາ ຫຼື່ ກົດຈະສະແດງຈຳນວນເງີນທີ່ຜ່ານມາ ທ່ານສາມາດເລືອກເພືອປ່ຽນແປງໄດ້ເລີຍ ແລ້ວກົດບັນທືກ ການປ່ຽນແປງ ຫຼັງຈາກນັ້ນ ວົງເງີນການໂຄສະນາ ກໍຈະປ່ຽນຕາມຂໍ້ມູນປະຈຸບັນ</label><br>
            </div>
        </div>
    </div>
</div>

</form>
<?PHP 
    if(isset($_POST['save_sm_money'])){
        $sm_money = mysqli_real_escape_string($conn, $_POST['ticketNum']);
        if($sm_money){
            $sql_update_sm_money = mysqli_query ($conn, "UPDATE `ad_money_setting` SET `ad_sm_uid`='List_money' WHERE `ad_sm_uid`='money_real_time'");
            if($sql_update_sm_money){
                $List_money = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`ad_sm_id`)as format_money FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money'"));
                if( 6 >= $List_money['format_money']){
                }else{
                    $money_format = mysqli_query($conn, "DELETE FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money' ORDER BY ad_sm_id ASC LIMIT 1");
                }
                $sql_insert_sm = mysqli_query ($conn, "INSERT INTO `ad_money_setting`(`ad_sm`, `ad_sm_uid`) VALUES ('$sm_money','money_real_time')");
                if($sql_insert_sm){
                    echo '<script>
                        swal({
                        title: "ປ່ຽນແປງເລດງີນ ສຳເລັດ!",
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
    }

    if(isset($_POST['thb_money'])){
        $sm_money = mysqli_real_escape_string($conn, $_POST['ticketNumTHB']);
        if($sm_money){
            $sql_update_sm_money = mysqli_query ($conn, "UPDATE `ad_money_setting` SET `ad_sm_uid`='List_money_THB' WHERE `ad_sm_uid`='money_real_time_THB'");
            if($sql_update_sm_money){
                $List_money = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`ad_sm_id`)as format_money FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money_THB'"));
                if( 6 >= $List_money['format_money']){
                }else{
                    $money_format = mysqli_query($conn, "DELETE FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money_THB' ORDER BY ad_sm_id ASC LIMIT 1");
                }
                $sql_insert_sm = mysqli_query ($conn, "INSERT INTO `ad_money_setting`(`ad_sm`, `ad_sm_uid`) VALUES ('$sm_money','money_real_time_THB')");
                if($sql_insert_sm){
                    echo '<script>
                        swal({
                        title: "ປ່ຽນແປງເລດງີນ ສຳເລັດ!",
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
    }

    if(isset($_POST['save_sm_money_CSN'])){
        $sm_money = mysqli_real_escape_string($conn, $_POST['ticketNum02']);
        if($sm_money){
            $sql_update_sm_money = mysqli_query ($conn, "UPDATE `ad_money_setting` SET `ad_sm_uid`='List_money_CSN' WHERE `ad_sm_uid`='money_real_time_CSN'");
            if($sql_update_sm_money){
                $List_money = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`ad_sm_id`)as format_money FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money_CSN'"));
                if( 6 >= $List_money['format_money']){
                }else{
                    $money_format = mysqli_query($conn, "DELETE FROM `ad_money_setting` WHERE `ad_sm_uid`='List_money_CSN' ORDER BY ad_sm_id ASC LIMIT 1");
                }
                $sql_insert_sm = mysqli_query ($conn, "INSERT INTO `ad_money_setting`(`ad_sm`, `ad_sm_uid`) VALUES ('$sm_money','money_real_time_CSN')");
                if($sql_insert_sm){
                    echo '<script>
                        swal({
                        title: "ປ່ຽນແປງເລດງີນ ສຳເລັດ!",
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
    }

    
?>
