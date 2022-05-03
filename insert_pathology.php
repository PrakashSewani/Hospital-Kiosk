<?php 
include('config.php');

    $Test = $_POST['test'];
    $UID = $_POST['uid'];
    $DOA = $_POST['dateofbirth'];
    
    $sql = "INSERT INTO `pathology`(`test_id`, `uid`, `date_of_test`) VALUES ('$Test', '$UID', '$DOA')";
    if($conn->query($sql) === TRUE){
        echo '<script>
                alert("Lab Appointment Booked Successfully. Your date is '.$DOA.'");
                window.location = "index.php";
            </script>';
    }else{
        echo 'Something Went Wrong! Please try Again';
    }

?>