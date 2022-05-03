<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <title>Book an Appointment</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="topnav">
        <div class="Hname">
        <a class="navbar-brand"><img src="bappi.png" width="25" height="25" alt=""></a>
            <a href="index.php">Bappi Hospital</a>
        </div>
        <a href="patientregister.php">Register</a>
        <a href="about.php">Admin</a>
        <a href="contact.php">Contact</a>
        <a href="staff.html">Staff</a>
        <a class="active" href="index.php">Home</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="border:1px solid black; border-radius: 10px; margin:auto;position: relative;margin-top:30px;padding: 20px;">
                <form>
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" placeholder="Jhon">
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" placeholder="Doe">
                    </div>
                    <div class="form-group">
                        <label>Visitation Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Doctor's name</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Reason for vist:</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>