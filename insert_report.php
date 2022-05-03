<?php 
include('config.php');

    $User = $_POST['user'];
    $Appoint = $_POST['appoint'];

    $sql = "SELECT * FROM `reports` WHERE `uid` = '$User'";
    $res = $conn->query($sql);
    $result = mysqli_fetch_assoc($res);
    
    if($result['uid'] == NULL){
        echo '<script>
                alert("Your have no reports linked with this UID!");
                window.location = "index.php";
            </script>';
    }else {
        if($result['reports_status'] == NULL){
             echo '<script>
                alert("Your reports are under scrutinty! Please have patience");
                window.location = "index.php";
            </script>';
        }else{
             echo '<script>
                window.open("'.$result['report_link'].'");
                window.location = "index.php";
            </script>';
        }
    }

?>