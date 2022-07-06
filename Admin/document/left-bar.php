<div class="navbar-nav w-100">
                    <a href="../../dashboard/dashboard" class="nav-item nav-link">&nbsp;<i class="bi bi-speedometer2"></i> ແຜງໜ້າປັດ</a>
                    <a href="../../amount-money/money" class="nav-item nav-link">&nbsp;<i class="bi bi-cash-stack"></i> ຍອດລວມສຳລະ</a>
                    
                    <a href="../../profile/list_user" class="nav-item nav-link">&nbsp;<i class="bi bi-person-badge"></i> ພະນັກງານ</a>
                    <a href="../../User-login/user-login" class="nav-item nav-link">&nbsp;<i class="bi bi-person-lines-fill"></i> ຜູ້ເຂົ້າໃຊ້ງານ</a>
                    <a href="" class="nav-item nav-link active">&nbsp;<i class="bi bi-list-ol"></i> ຈັດເກັບຂໍ້ມູນ</a>
                    <!-- <a href="../../update/update" class="nav-item nav-link">&nbsp;<i class="bi bi-postcard-heart"></i> ລໍການອັບເດດ&nbsp;
                      <label class="sms-show" style="font-size: 14px;background-color: red;color: #ffff; border-radius: 100%; width: 26px; height: 26px; text-align: center; position: absolute; padding: 3px">
                        <?PHP 
                            $newsletter = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`new_id`)as count FROM `newsletter`"));
                            $cc = "99";
                            if($cc >= $newsletter['count']){
                              echo $newsletter['count'];
                            }else{
                              echo "99+";
                            }
                        ?>
                      </label>
                    </a> -->
                    <a href="../../confirm-real/confirm-real" class="nav-item nav-link">&nbsp;<i class="bi bi-card-checklist"></i> ຄວາມຄິດເຫັນ&nbsp;
                      <label class="sms-show" style="font-size: 14px;background-color: red;color: #ffff; border-radius: 100%; width: 26px; height: 26px; text-align: center; position: absolute; padding: 3px">
                        <?PHP 
                            $show_cound = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(`cm_id`)as count FROM `comment`"));
                            $cc = "99";
                            if($cc >= $show_cound['count']){
                              echo $show_cound['count'];
                            }else{
                              echo "99+";
                            }
                        ?>
                      </label>
                    </a>
                  </div>