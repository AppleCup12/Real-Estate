<?PHP
     $conn = new mysqli("localhost","root","","Real-estate");

     // Check connection
     if ($conn -> connect_errno) {
       echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
       exit();
     }
     

    $real_home = $_GET['real_home'];
    
    $sql_real_home = mysqli_query($conn, "SELECT * FROM `AM-dcm-home` WHERE `dcm_home_id`=$real_home");
    $row_home = mysqli_fetch_array ($sql_real_home);
    if($row_home){
        echo $row_home['dcm_home'];
    }else{
        echo "asdsad";
    }
?>