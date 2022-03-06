<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gaming</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                         <h1>IT Carlow's Clubs and Societies</h1>
                        <br>
                        <h2>Gaming sign up</h2>
                    </div>
                    <p>Please enter your details below to register for Gaming</p>
                    <form action="insertgaming.php" method="post">
                        <div class="form-group">
                            <label>Student ID</label>
                            <input type="studentid" name="studentid" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="phone" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="dob" name="dob" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Medical Conditions</label>
                            <input type="medical" name="medical" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Doctor Info: Name</label>
                            <input type="dname" name="dname" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Doctor Info: Phone Number</label>
                            <input type="dphone" name="dphone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Next of Kin Info: Name</label>
                            <input type="kname" name="kname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Next of kin Info: Phone Number</label>
                            <input type="kphone" name=kphone" class="form-control">
                        </div>
                                                         <br>
                            <label>Please upload a valid photo ID</label>                                                     
                          <input type='file' name='photo' />      
                                                                                  <br>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                         <br>
            <a href="mainpage.php">Go Back</a>.</p>
                    </form>
                </div>
            </div>        
        </div>