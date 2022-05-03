<?php 
include('config.php');

    $Name = $_POST['username'];
    $Pass = $_POST['password'];
    
    $sql = "SELECT * FROM `login` WHERE `username` = '$Name' AND `password` = '$Pass'";
    $res = $conn->query($sql);
    $result = mysqli_fetch_assoc($res);

    if($result['username'] != NULL){
        echo '<script>
                alert("Welcome");
                window.location = "index.php";
            </script>';
    }else{
        echo 'Something Went Wrong! Please try Again';
    }

?>