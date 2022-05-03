<html>
<head>
    <link rel="stylesheet" href="pathology.css">
    <!-- <script>
    function show1(){
  document.getElementById('div1').style.display ='none';
  document.getElementById('div2').style.display='block'
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

    <img src="bappi.png" style="height: 70px;width: 70px;padding-left: 100px;">
    <h2 style="color: green;text-align: center;">Bappi Hospital</h2>

    <h2 style="color: black;font-size: 15px;">Tests</h2>
    <form method="POST" action="insert_pathology.php">
        <select class="test" name="test">
            <option value="Full Blood Examination">Full Blood Examination</option>
            <option value="Iron studies">Iron studies</option>
            <option value="Urinalysis">Urinalysis</option>
            <option value="Liver Function Tests">Liver Function Tests</option>
            <option value="INR (International Normalized Ratio)">INR (International Normalized Ratio)</option>
        </select>
        <h2 style="color: black;font-size: 15px;">Do You Have Unique ID</h2>
        <div id="div1">
           <input type="text" id="uid" name="uid" placeholder="Enter your UID">
        </div>
        <h2 style="color: black;font-size: 15px;">Date Of the Test</h2>
        <div class="coc-form coc-block-row">
            <label class="coc-block-label" for="dateofbirth"></label>
            <div class="coc-block">
                <input class="coc-input" type="date" name="dateofbirth" id="dateofbirth">
            </div>
        </div>
        <div class="submit">
            <button type="submit" class="button">Submit</button>
        </div>
    </form>
</div>
</html>
