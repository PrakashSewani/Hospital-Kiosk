<html>
    <head>
        <link rel="stylesheet" href="contact.css">
    </head>
  <div class="topnav">
    <div class="Hname">
      <a class="navbar-brand"><img src="bappi.png" width="25" height="25" alt=""></a>
      <a href="index.php">Bappi Hospital</a>
    </div>
    <a href="patientregister.php">Register</a>
    <a href="admin.php">Admin</a>
    <a href="about.php">About</a>
    <a class="active" href="contact.php">Contact</a>
    <a href="staff.html">Staff</a>
    <a href="index.php">Home</a>
  </div>
  <div class="container">
    <div class="screen">
      
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact" style="font-size: 15px;">
            CONTACT INFO : 0251 2342895
            EMAIL:- fortis@gmail.com
            ADDRESS:- Mulund - Goregaon Link Rd, Nahur West, Industrial Area, Bhandup West, Mumbai, Maharashtra 400078.
          </div>
        </div>
        <div class="screen-body-item">
          <form method="POST" action="insert_contact.php">
            <div class="app-form">
              <div class="app-form-group">
                <input class="app-form-control" placeholder="NAME" value="Your Name" name="name">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="EMAIL" name="email">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="CONTACT NO" name="contact">
              </div>
              <div class="app-form-group message">
                <input class="app-form-control" placeholder="MESSAGE" name="message">
              </div>
              <div class="app-form-group buttons">
                <button class="app-form-button">CANCEL</button>
                <button type="submit" class="app-form-button">SEND</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
</html>