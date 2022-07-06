<?PHP
     $conn = new mysqli("localhost","root","","Real-estate");

     // Check connection
     if ($conn -> connect_errno) {
       echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
       exit();
     }
     

    $real_distric = $_GET['real_distric'];
    
    $sql_real_distric = mysqli_query($conn, "SELECT * FROM `AM-dcm-distric` WHERE `dcm_distric_id`=$real_distric");
    $row_distric = mysqli_fetch_array ($sql_real_distric);
    if($row_distric){
        echo $row_distric['dcm_distric'];
    }else{
        echo "asdsad";
    }
?>