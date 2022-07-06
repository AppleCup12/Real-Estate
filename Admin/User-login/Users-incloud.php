<?PHP 
    $user_name = mysqli_query($conn, "SELECT * FROM `users` ORDER BY User_id DESC");
    $formart = 1;
    foreach($user_name as $row_user){
    ?>
    <div class="amount-header">
    <div class="row">
        <div class="column" style="width: 40px"><?PHP echo $formart++ ?></div>
        <div class="column profile"><img src="../../document/profile/upload/<?PHP echo $row_user['user_img'] ?>" alt="ບໍ່ມີຮູບພາບ" style="border-radius: 100%; width: 80px; height: 80px"></div>
        <div class="column user_name">
            <label>Name: <?PHP echo $row_user['user_name'] ?></label><br>
            <label>ຊື່ແທ້: <?PHP echo $row_user['name']." ".$row_user['lname'] ?> </label>
        </div>
        <div class="column curdate">
            <label for="">ວ-ດ-ປ ເກິດ: <?PHP echo $row_user['user_date'] ?></label><br>
            <label for="">ເພດ: <?PHP echo $row_user['user_gender'] ?></label>
        </div>
        <div class="column">
            <label for=""><?PHP echo "ບ້ານ: ".$row_user['user_home'] ?></label><br>
            <label for=""><?PHP echo " ເມືອງ: ".$row_user['user_distric'] ?></label><br>
            <label for=""><?PHP echo " ແຂວງ: ".$row_user['user_vilage'] ?></label>
        </div>
    </div>
    </div>
    <hr>
<?PHP } ?>