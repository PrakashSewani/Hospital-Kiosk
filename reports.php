<html>
    <head>
        <link rel="stylesheet" href="reports.css">
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

    <h2 style="color: black;font-size: 15px;">UID Number</h2>
    <form method="POST" action="insert_report.php">
      <input class="user" type="text" id="user" name="user"> 
      <h2 style="color: black;font-size: 15px;">Appointment Number</h2>
      <div class="appointment">
        <input type="text" id="appoint" name="appoint">
      </div>
      <div class="submit">
        <button type="submit" class="button">Submit</button>
      </div>
    </form>
  </div>
</html>