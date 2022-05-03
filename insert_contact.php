<?php 
include('config.php');

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Contact = $_POST['contact'];
    $msg = $_POST['message'];
    
    $sql = "INSERT INTO `contact_info`(`name`, `email`, `contact_no`, `message`) VALUES ('$Name', '$Email', '$Contact', '$msg')";
    if($conn->query($sql) === TRUE){
        echo '<script>
                alert("We have got your information. We will contact you soon!!");
                window.location = "index.php";
            </script>';
    }else{
        echo 'Something Went Wrong! Please try Again';
    }

?>