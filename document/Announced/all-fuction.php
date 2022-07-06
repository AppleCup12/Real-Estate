<?PHP 

    if(isset($_POST['delete'])){
        $real_delete = $_POST['checkbox'];
        $cdk_delete = "";
        foreach($real_delete as $name_2){
        $cdk_delete .= $name_2.",";
        }
        if($cdk_delete){
          $uid1 = $_SESSION["user_id"];

          $online_delete = mysqli_query($conn, "UPDATE `Real-document` SET `real_uid`='0000' WHERE `real_id` IN($cdk_delete 0)");
          $delete_curdate = mysqli_query($conn, "DELETE FROM `Real-curdate` WHERE `real_uid` IN($cdk 0) AND `user_uid`=$uid1");
          if($online_delete){
              echo '<script>
                      swal({
                      title: "ລົບປະກາດຂອງທ່ານແລ້ວ!",
                      text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                      type: "success"
                      },
                      function(){
                      window.location="../Announced/Announced"
                      });
                  </script>';
          }else{
              echo '<script>
                      swal({
                      title: "ບໍ່ສາມາດລົບລົງປະະກາດໄດ້!",
                      text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                      type: "error"
                      },
                      function(){
                      window.location="../Announced/Announced"
                      });
                  </script>';
          }
        }else{
          echo '<script>
              swal({
              title: "ກະລຸນາເລືອກອະສັງຫາທີ່ຕ້ອງການກອນ!",
              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
              type: "info"
              },
              function(){
              window.location="../Announced/Announced"
              });
          </script>';
        }
    }
    if(isset($_GET['delete_01'])){
      $delete_01 = $_GET['delete_01'];
      $uid1 = $_SESSION["user_id"];
      $online_delete_01 = mysqli_query($conn, "DELETE FROM `real-document` WHERE `real_id`=$delete_01");
      if($online_delete_01){
        $delete_curdate = mysqli_query($conn, "DELETE FROM `Real-curdate` WHERE `real_uid`=$delete_01 AND `user_uid`=$uid1");
        if($delete_curdate){
            echo '<script>
                    swal({
                    title: "ລົບປະກາດຂອງທ່ານແລ້ວ!",
                    text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                    type: "success"
                    },
                    function(){
                    window.location="../Announced/Announced"
                    });
                </script>';
        }else{
            echo '<script>
                    swal({
                    title: "ບໍ່ສາມາດລົບລົງປະະກາດໄດ້!",
                    text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                    type: "error"
                    },
                    function(){
                    window.location="../Announced/Announced"
                    });
                </script>';
        }
      }
  }


    // real-off //
    if(isset($_GET['real_off'])){
      $real_off = $_GET['real_off'];
      $date_out_off = date("Y-m-d");
      $real_off_01 = mysqli_query($conn, "UPDATE `Real-document` SET `real_curdate`=curdate(), `real_uid`='1' WHERE `real_id`=$real_off");
      $update_curdate = mysqli_query($conn, "UPDATE `Real-curdate` SET `curdate_out`='$date_out_off', `time_out`='$time_out' WHERE `real_uid`=$real_off");
      if($update_curdate){
        $sql = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Real-curdate` WHERE `real_uid`=$real_off AND `user_uid`=$uid"));
        $uid_up = $sql['user_uid'];
        $date1=date_create($sql['curdate_in']);
        $date2=date_create($sql['curendate']);
        $diff=date_diff($date1,$date2);
        $d = $diff->format("%a")*$show_sm_money['ad_sm'];
        $paymn_day = $d;

       
      
        // $paymn = ($d + $h);
        if($paymn_day == "0000"){
          echo '<script>
              swal({
              title: "ປິດສະຖານະປະກາດສຳເລັດ!",
              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
              type: "success"
              },
              function(){
              window.location="../Announced/Announced"
              });
          </script>';
        }else{
          $update_payment = mysqli_query($conn, "UPDATE `real_paymoney` SET `pay_uid`='payment' WHERE `user_uid`=$uid_up AND `pay_uid`='real_pay'");
          if($update_payment){
            $date1 = $sql['time_out'];
            $date2 = $sql['time_in'];
            $in_playhour = ($date1 - $date2)."000";
            if($date1 >= $date2){
              $insert_paymn = mysqli_query($conn, "INSERT INTO `Real_paymoney`(`pay_money`, `pay_mn_hour`, `real_uid`, `user_uid`, `pay_curdate`, `pay_uid`) VALUES ('$paymn_day','','$real_off','$uid','$date','real_pay')");
              if($insert_paymn){
                  $sql_uid_alr = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `real_balance` WHERE `user_uid`=$uid_up"));
                    if($sql_uid_alr){
                      $paymn_amount_one = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(pay_money)as pay_money, sum(pay_mn_hour)as pay_mn_hour FROM `Real_paymoney` WHERE `user_uid`=$uid_up AND `pay_uid`='real_pay'"));
                      $pay_amount_one = number_format($paymn_amount_one['pay_money']);
                      $pay_mn_hour_one = number_format($paymn_amount_one['pay_mn_hour']);
                      $amount_paymn_one = ($pay_amount_one + $pay_mn_hour_one)."000";
                      if($amount_paymn_one){
                        $update_alr_one = mysqli_query($conn, "UPDATE `real_balance` SET `Bl_amount`=`Bl_amount`+'$amount_paymn_one' WHERE `user_uid`=$uid_up");
                        if($update_alr_one){
                          $real_delete = mysqli_query ($conn , "DELETE FROM `real-curdate` WHERE `real_uid`=$real_id");
  
                          echo '<script>
                              swal({
                              title: "ປິດສະຖານະປະກາດສຳເລັດ!",
                              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                              type: "success"
                              },
                              function(){
                              window.location="../Announced/Announced"
                              });
                          </script>';
                        }
                      }
                    }else{
                      $paymn_amount = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(pay_money)as pay_money, sum(pay_mn_hour)as pay_mn_hour FROM `Real_paymoney` WHERE `user_uid`=$uid_up AND `pay_uid`='real_pay'"));
                      $pay_amount = number_format($paymn_amount['pay_money']);
                      $pay_mn_hour = number_format($paymn_amount['pay_mn_hour']);
                      $amount_paymn = ($pay_amount + $pay_mn_hour)."000";
                      if($amount_paymn){
                        $bl_paymn = mysqli_query($conn, "INSERT INTO `Real_balance`(`Bl_amount`, `user_uid`, `Bl_realtime`) VALUES ('$amount_paymn','$uid','$date')");
                        if($bl_paymn){
                          $real_delete = mysqli_query ($conn , "DELETE FROM `real-curdate` WHERE `real_uid`=$real_id");
  
                          echo '<script>
                              swal({
                              title: "ປິດສະຖານະປະກາດສຳເລັດ!",
                              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                              type: "success"
                              },
                              function(){
                              window.location="../Announced/Announced"
                              });
                          </script>';
                        }
                      }
  
                    }
                    
  
                   
              }else{
                echo '<script>
                      swal({
                      title: "ປິດສະຖານະປະກາດສຳເລັດ!",
                      text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                      type: "success"
                      },
                      function(){
                      window.location="../Announced/Announced"
                      });
                  </script>';
              }
            }else{
              $insert_paymn = mysqli_query($conn, "INSERT INTO `Real_paymoney`(`pay_money`, `pay_mn_hour`, `real_uid`, `user_uid`, `pay_curdate`, `pay_uid`) VALUES ('$paymn_day','$in_playhour','$real_off','$uid','$date','real_pay')");
              if($insert_paymn){
                  $sql_uid_alr = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `real_balance` WHERE `user_uid`=$uid_up"));
                    if($sql_uid_alr){
                      $paymn_amount_one = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(pay_money)as pay_money, sum(pay_mn_hour)as pay_mn_hour FROM `Real_paymoney` WHERE `user_uid`=$uid_up AND `pay_uid`='real_pay'"));
                      $pay_amount_one = number_format($paymn_amount_one['pay_money']);
                      $pay_mn_hour_one = number_format($paymn_amount_one['pay_mn_hour']);
                      $amount_paymn_one = ($pay_amount_one + $pay_mn_hour_one)."000";
                      if($amount_paymn_one){
                        $update_alr_one = mysqli_query($conn, "UPDATE `real_balance` SET `Bl_amount`=`Bl_amount`+'$amount_paymn_one' WHERE `user_uid`=$uid_up");
                        if($update_alr_one){
                          $real_delete = mysqli_query ($conn , "DELETE FROM `real-curdate` WHERE `real_uid`=$real_id");

                          echo '<script>
                              swal({
                              title: "ປິດສະຖານະປະກາດສຳເລັດ!",
                              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                              type: "success"
                              },
                              function(){
                              window.location="../Announced/Announced"
                              });
                          </script>';
                        }
                      }
                    }else{
                      $paymn_amount = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(pay_money)as pay_money, sum(pay_mn_hour)as pay_mn_hour FROM `Real_paymoney` WHERE `user_uid`=$uid_up AND `pay_uid`='real_pay'"));
                      $pay_amount = number_format($paymn_amount['pay_money']);
                      $pay_mn_hour = number_format($paymn_amount['pay_mn_hour']);
                      $amount_paymn = ($pay_amount + $pay_mn_hour)."000";
                      if($amount_paymn){
                        $bl_paymn = mysqli_query($conn, "INSERT INTO `Real_balance`(`Bl_amount`, `user_uid`, `Bl_realtime`) VALUES ('$amount_paymn','$uid','$date')");
                        if($bl_paymn){
                          $real_delete = mysqli_query ($conn , "DELETE FROM `real-curdate` WHERE `real_uid`=$real_id");

                          echo '<script>
                              swal({
                              title: "ປິດສະຖານະປະກາດສຳເລັດ!",
                              text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                              type: "success"
                              },
                              function(){
                              window.location="../Announced/Announced"
                              });
                          </script>';
                        }
                      }

                    }
                    

                  
              }else{
                echo '<script>
                      swal({
                      title: "ປິດສະຖານະປະກາດສຳເລັດ!",
                      text: "ກົດທີ່ນີ້ເພືອ refresh the page.",
                      type: "success"
                      },
                      function(){
                      window.location="../Announced/Announced"
                      });
                  </script>';
              }
            }
            
          }
        }
        
         
      }
    }
   
?>

