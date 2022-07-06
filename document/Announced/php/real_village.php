<?PHP
     $conn = new mysqli("localhost","root","","Real-estate");

     // Check connection
     if ($conn -> connect_errno) {
       echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
       exit();
     }
     

    $real_village = $_GET['real_village'];
    
    $sql_real_village = mysqli_query($conn, "SELECT * FROM `AM-dcm-village` WHERE `dcm_village_id`=$real_village");
    $row_village = mysqli_fetch_array ($sql_real_village);
    if($row_village){
        echo $row_village['dcm_village'];
    }else{
        echo "asdsad";
    }
?>