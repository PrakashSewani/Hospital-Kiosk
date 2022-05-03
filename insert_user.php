<?php 
include('config.php');

    $Name = $_POST['name'];
    $Pass = $_POST['password'];
    $Cpass = $_POST['cpassword'];

    $random = '';
    $Ccharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($i = 0; $i < 1; $i++) {
        $index = rand(0, strlen($Ccharacters) - 1);
        $random.= $Ccharacters[$index];
    }
    $numbers = rand(1000,9999);
    $random .= $numbers;
    
    $sql = "INSERT INTO `patient_table`(`uid`, `patient_name`) VALUES ('$random', '$Name')";
    $sql1 = "INSERT INTO `login`(`username`, `password`) VALUES ('$random', '$Pass')";
    if($conn->query($sql) === TRUE && $conn->query($sql1)){
        echo '<script>
                alert("User Registered Successfully! Your UID is '.$random.'");
                window.location = "index.php";
            </script>';
    }else{
        echo 'Something Went Wrong! Please try Again';
    }

?>