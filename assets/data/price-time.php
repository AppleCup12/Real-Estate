<?PHP 
    date_default_timezone_set('Asia/Bangkok');
    $datenew = time();
    $date = date("Y-m-d H:i");
    $date_online = date("Y-m-dH:i");
    $date_out = date("Y-m-d");
    $imt = date("H:i:s");
    $time_out = date("H:i");

    $real_curdate = mysqli_query ($conn, "SELECT * FROM `real-curdate`");
    foreach($real_curdate as $row_curdate){
        $real_id = $row_curdate['real_uid'];
        if($real_id){
            $real_curdate_online = mysqli_fetch_array(mysqli_query ($conn, "SELECT * FROM `real-curdate` WHERE `real_uid`=$real_id"));
            $uid_assets = $real_curdate_online['user_uid']; 
            $all_curdate_in = $real_curdate_online['curdate_in']." ".$real_curdate_online['time_in'];
            $all_curdate_out = $real_curdate_online['curdate_out']." ".$real_curdate_online['time_out'];
            if($date >= $all_curdate_in){
                $real_document = mysqli_query ($conn, "UPDATE `real-document` SET `real_uid`='2' WHERE `real_id`=$real_id");
            }else{
                $real_document = mysqli_query ($conn, "UPDATE `real-document` SET `real_uid`='3' WHERE `real_id`=$real_id");
            }
            if($date >= $all_curdate_out){
                $real_document = mysqli_query ($conn, "UPDATE `real-document` SET `real_uid`='1' WHERE `real_id`=$real_id");
                if($real_document){
                    $sql_pay = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real-curdate` WHERE `real_uid`=$real_id"));
                    $date1=date_create($sql_pay['curdate_in']);
                    $date2=date_create($sql_pay['curdate_out']);
                    $diff=date_diff($date1,$date2);
                    $d = $diff->format("%a")*$show_sm_money['ad_sm'];
                    $paymn_day = $d;
                    if($paymn_day == "0000"){

                    }else{
                        $update_payment = mysqli_query($conn, "UPDATE `real_paymoney` SET `pay_uid`='payment' WHERE `user_uid`=$uid AND `pay_uid`='real_pay'");
                        if($update_payment){
                            $insert_paymn = mysqli_query($conn, "INSERT INTO `Real_paymoney`(`pay_money`, `pay_mn_hour`, `real_uid`, `user_uid`, `pay_curdate`, `pay_uid`) VALUES ('$paymn_day','','$real_id','$uid','$date','real_pay')");
                            if($insert_paymn){
                                $sql_uid_alr = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `real_balance` WHERE `user_uid`=$uid_assets"));
                                  if($sql_uid_alr){
                                    $paymn_amount_one = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(pay_money)as pay_money, sum(pay_mn_hour)as pay_mn_hour FROM `Real_paymoney` WHERE `user_uid`=$uid_assets AND `pay_uid`='real_pay'"));
                                    $pay_amount_one = ($paymn_amount_one['pay_money']);
                                    if($pay_amount_one){
                                      $update_alr_one = mysqli_query($conn, "UPDATE `real_balance` SET `Bl_amount`=`Bl_amount`+'$pay_amount_one' WHERE `user_uid`=$uid_assets");
                                      if($update_alr_one){
                                        $real_delete = mysqli_query ($conn , "DELETE FROM `real-curdate` WHERE `real_uid`=$real_id");
                                      }
                                    }
                                  }else{
                                    $paymn_amount = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(pay_money)as pay_money, sum(pay_mn_hour)as pay_mn_hour FROM `Real_paymoney` WHERE `user_uid`=$uid_assets AND `pay_uid`='real_pay'"));
                                    $pay_amount = ($paymn_amount['pay_money']);
                                    if($pay_amount){
                                      $bl_paymn = mysqli_query($conn, "INSERT INTO `Real_balance`(`Bl_amount`, `user_uid`, `Bl_realtime`) VALUES ('$pay_amount','$uid','$date')");
                                      if($bl_paymn){
                                        $real_delete = mysqli_query ($conn , "DELETE FROM `real-curdate` WHERE `real_uid`=$real_id");
                                      }
                                    }
                
                                  }
                                  
                            }
                          }
                    }
                }
            }
        }
    }
?>