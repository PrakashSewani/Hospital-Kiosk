<?php 
include('config.php');

$appointment = $_POST['appoint'];
$DOC = $_POST['dateofbirth'];

$depart = explode('-', $appointment);

$sql = "SELECT * FROM `docters` WHERE `department`='$depart[0]'";
$res = $conn->query($sql);
$result = mysqli_fetch_assoc($res);

if($result != NULL){
	echo '<script>
            alert("Your Bill for Today\'s Consultation is Rs. '.$result['rate_of_visit'].'. Please pay and collect the bill form the reception.");
            window.location = "index.php";
        </script>';
}else{
	echo 'Something Went Wrong! Please try Again';
}
?>