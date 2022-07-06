<?PHP 
    include_once '../../assets/data/database.php';

    $input = $_POST['input'];
    if($input){
        include_once 'show-search.php';
    }else{
        include_once 'Users-incloud.php';
    }
?>