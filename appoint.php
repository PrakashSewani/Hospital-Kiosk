<!-- <?php 
include('config.php');

if(isset($_POST['submit'])){
    $Doctor = $_POST['doctor'];
    $UID = $_POST['uid'];
    $Name = $_POST['name'];
    $DOV = $_POST['dateofbirth'];
    $Reason = $_POST['reason'];

    $sql = "SELECT `department` FROM `doctors` WHERE `doctor_name` = '$Doctor'";
    $res = $conn->query($sql);
    $result = mysqli_fetch_assoc($res);
    $department = $result['department'];
    echo $department;
    echo 'hello';

    $sql1 = "INSERT INTO `appoinment`(`department`, `uid`, `date_of_visit`, `reason_for_visit`) VALUES ('$department', '$UID', '$DOV', '$Reason')";
    if($conn->query($sql1) === TRUE){
        echo '<script>
                alert("Appoinment Booked Successfully!");
                window.location = "index.php";
            </script>';
    }else{
        echo 'Something Went Wrong! Please try Again';
    }
}
?> -->

<html lang="en">
<head>
    <link rel="stylesheet" href="appoint.css">
    <!-- <script>
function show1(){
  document.getElementById('div2').style.display ='block';
  document.getElementById('div1').style.display='none'
}
function show2(){
    document.getElementById('div1').style.display = 'block';
  document.getElementById('div2').style.display='none'
}
    </script> -->
</head>
<div class="topnav">
    <div class="Hname">
        <a class="navbar-brand"><img src="bappi.png" width="25" height="25" alt=""></a>
        <a href="index.php">Bappi Hospital</a>
    </div>
    <a href="patientregister.php">Register</a>
    <a href="admin.php">Admin</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="staff.html">Staff</a>
    <a class="active" href="index.php">Home</a>
</div>
<div class="bill">
    <form method="POST" action="insert_appoint.php">
        <img src="fortis.png" style="height: 70px;width: 70px;padding-left: 100px;">
        <h2 style="color: green;text-align: center;">Fortis</h2>

        <h2 style="color: black;font-size: 15px;">Doctor's Name</h2>
        <select class="doctor" name="doctor">
            <option value="">-------Select Doctor------</option>
            <?php
                $query1 = mysqli_query($conn,"SELECT * FROM `docters`");
                if(mysqli_num_rows($query1)>0){
                    while($row1 = mysqli_fetch_assoc($query1)){
            ?>
            <option value="<?php echo $row1['docter_name'];?>"><?php echo $row1['docter_name']?></option>
            <?php
                    }
                }
            ?>
        </select>
        <h2 style="color: black;font-size: 15px;">Do You Have Unique ID</h2>
        <div id="div1">
           <input type="text" id="uid" name="uid" placeholder="Enter your UID">
        </div>
        <div id="div2" class="hide">
            <input type="text" id="uid" name="name" placeholder="Enter your Name">
        </div>
        <h2 style="color: black;font-size: 15px;">Date Of Check-up</h2>
        <div class="coc-form coc-block-row">
            <label class="coc-block-label" for="dateofbirth"></label>
            <div class="coc-block">
                <input class="coc-input" type="date" name="dateofbirth" id="dateofbirth">
            </div>
        </div>
        <h2 style="color: black;font-size: 15px;">Reason for Visit</h2>
        <div class="appointment">
            <label for="fname"></label>
            <textarea style="height:80px; width:97.4%; background: #04AA6D; border-radius: 8px;" type="text" id="fname" name="reason"></textarea>
        </div>
        <div class="submit">
            <input type="submit" class="button" value="Submit">
        </div>
    </form>
</div>
</html>
