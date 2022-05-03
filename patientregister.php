<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="patientregister.css">
</head>
<body>
    <div class="topnav">
        <div class="Hname">
          <a class="navbar-brand"><img src="bappi.png" width="25" height="25" alt=""></a>
          <a href="index.php">Bappi Hospital</a>
        </div>
        <a class="active" href="patientregister.php">Register</a>
        <a href="admin.php">Admin</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="staff.html">Staff</a>
        <a href="index.php">Home</a>
        </div>
        <div class="bill">
            <form method="POST" action="insert_user.php" name="reg">
                <img src="bappi.png" style="height: 70px;width: 70px;padding-left: 100px;">
                <h2 style="color: green;text-align: center;">Bappi Hospital</h2>
                <h2 style="color: black;font-size: 15px;">Enter your Name</h2>
                <input class="password" type="text" id="admin" name="name"> 
                <h2 style="color: black;font-size: 15px;">Enter your password</h2>
                <input class="password" type="password" id="password" name="password"> 
                <h2 style="color: black;font-size: 15px;">Confirm your password</h2>
                <input class="password" type="password" id="password" name="cpassword">
                <div class="submit">
                    <button type="submit" class="button">Submit</button>
                </div>
            </form>
            <br>
            <br>
        </div>
</body>
</html>