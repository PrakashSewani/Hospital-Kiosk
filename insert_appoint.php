<?php 
include('config.php');

    $Doctor = $_POST['doctor'];
    $UID = $_POST['uid'];
    $Name = $_POST['name'];
    $DOV = $_POST['dateofbirth'];
    $Reason = $_POST['reason'];

    $sql = "SELECT * FROM `docters` WHERE `docter_name` = '$Doctor'";
    $res = $conn->query($sql);
    $result = mysqli_fetch_assoc($res);
    $department = $result['department'];
    // echo $department;
    
    $sql1 = "INSERT INTO `appoinment`(`department`, `uid`, `date_of_visit`, `reason_for_visit`) VALUES ('$department', '$UID', '$DOV', '$Reason')";
    if($conn->query($sql1) === TRUE){
        echo '<script>
                alert("Appoinment Booked Successfully! Your Appointment Number is '.$department.'-'.$UID.'");
                window.location = "index.php";
            </script>';
    }else{
        echo 'Something Went Wrong! Please try Again';
    }

?>