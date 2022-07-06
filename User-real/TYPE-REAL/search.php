<link rel="stylesheet" href="type_real.css">
 
 <?php
    include_once '../../assets/data/database.php';
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if($a and $b and $c){
        include_once 'DTR-one.php';
      }elseif($a and $b){
        include_once 'DT-one.php';
      }elseif($a and $c){
        include_once 'DR-one.php';
      }elseif($a){
        include_once 'D-one.php';
      }elseif($b and $c){
        include_once 'TR-one.php';
      }elseif($b){
        include_once 'T-one.php';
      }elseif($c){
        include_once 'R-one.php';
      }elseif($c == ""){
        $show_view = 0;
        include_once 'about-one.php';
      }elseif($d == "" and $b == "" and $c == ""){
        $show_view = 0;
        include_once 'about-one.php';
      }else{
        $show_view = 0;
        include_once 'about-one.php';

      }
    // $query_real = mysqli_query($conn, "SELECT * FROM `Real-document` WHERE `r_radio` IN('$c',0) AND `real_type` IN ('$b',0) AND `real_distric` IN ('$a',0) AND `real_uid`=2 ORDER BY real_id DESC");
    // if($query_real -> num_rows > 0 ){
    //     while($row_real = $query_real->fetch_assoc()){
    //         echo '<div class="libary-group">
    //             <div class="row">
                      
                     
    //                     <a href="?view='.$row_real['real_id'].'">
    //                       <div class="card-libary">
                           
    //                         <div class="group-img">
    //                           <img src="../../document/R-estate/upload_real/upload/'.$row_real['real_img'].'" id="img">
    //                           <div class="bprice">
    //                             <label class="text-bprice">'.number_format($row_real['real_bprice']).' KIP</label>
    //                             <label class="check-bprice">
    //                               <div class="row">
    //                                 <div class="column col-01"><i class="bi bi-arrows-angle-expand"></i></div>
    //                                 <div class="column col-01"><i class="bi bi-heart"></i></div>
    //                                 <div class="column col-01"><i class="bi bi-text-indent-right"></i></div>
    //                               </div>
    //                             </label>
    //                           </div>
    //                         </div>
                            
    //                         <div class="list-about-real">
    //                      <div class="list-padding">';
    //                               $uid = $row_real['user_uid'];
    //                               $user_img = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `Users` WHERE `user_id`=$uid"));
    //                 echo '  <img src="../../document/profile/upload/'.$user_img['user_img'].'" id="user-logo" style="border-radius: 100%; width:40px; height:40px;">
    //                             <label for=""><div class="about-real-text">'.$row_real['real_about_laos'].'</div></label>
    //                             <a href="#uid='.$row_real['real_id'].'" class="view_real"><i class="bi bi-view-list"></i></a>
    //                             <div class="about-estate">
    //                               <div class="location"><label for=""><i class="bi bi-pin-map-fill"></i>'.$row_real['real_distric'].'</label></div>
    //                               <div class="row" id="row-bed">
    //                                 <div class="column column-bed">
    //                                   <label for="">'.$row_real['real_bedroom'].' <i class="bx bxs-bed" style="color:#313131"  ></i> <br>ຫ້ອງນອນ</label>
    //                                 </div>
    //                                 <div class="column column-bed">
    //                                   <label for="">'.$row_real['real_bathroom'].' <i class="bx bxs-bath"></i> <br>ຫ້ອງນ້ຳ</label>
    //                                 </div>
    //                                 <div class="column column-bed bed-none">
    //                                   <label for="">'.$row_real["real_floor"].' <i class="bx bx-layer"></i> <br>ຊັ້ນ</label>
    //                                 </div>
    //                               </div>
    //                             </div>
    //                           </div>
    //                         </div>
    //                       </div>
    //                     </a>
    //                 </div>
    //               </div>';
    //     }
    // }
?>

