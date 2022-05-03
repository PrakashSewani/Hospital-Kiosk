<html>
  <head>
      <link rel="stylesheet" href="billstyle.css">
  </head>
  <div class="topnav">
    <div class="Hname">
      <a class="navbar-brand"><img src="bappi.png" width="25" height="25" alt=""></a>
      <a href="index.php">Bappi Hospital</a>
    </div>
    <a href="patientregister.php">Register</a>
    <a class="active" href="admin.php">Admin</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="staff.html">Staff</a>
    <a href="index.php">Home</a>
    </div>
    <div class="bill">
      <form method="POST" action="login.php">
        <img src="bappi.png" style="height: 70px;width: 70px;padding-left: 100px;">
        <h2 style="color: green;text-align: center;">Bappi Hospital</h2>
        <h2 style="color: black;font-size: 15px;">Enter UID</h2>
        <input class="password" type="text" id="admin" name="username"> 
        <h2 style="color: black;font-size: 15px;">Password</h2>
        <input class="password" type="text" id="password" name="password"> 
        <div class="submit">
            <button type="submit" class="button">Submit</button>
        </div>
        <br>
        <br>
        <div class="submit">
          <br>
          <a href="patientregister.php">Register as patient</a>
        </div>
      </form>
    </div>

    </html>