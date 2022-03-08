



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Cockpit</title>

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

    <style>

        .kibet {
            width: 100%;
            height: 100vh;
            background: url(assets/images/marketing.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }

    </style>
    

</head class='kibet'>
<body>

    <center>
    
    
    <form method="POST" action="marketing_handler.php">
        <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><br><br><br><br><br>
                <h1 class="text-info text-center">Apply here</h1><br>
                <input class="form-control" placeholder="Enter your full Name" name="name" type="text" ><br><br>
                
                <input class="form-control" placeholder="Enter your Email" name="email" type="email" ><br><br>

                <input class="form-control" name="phone" placeholder="Applicant Phone Number" type="tel"><br><br>

                <select class="form-control" name="gender" id="" required>
                    <option>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Female">Other</option>
                </select><br><br>

                <select class="form-control" name="country" id="" required>
                    <option>Select Country</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Rwanda">Rwanda</option>
                </select><br><br>
                
                <select class="form-control" name="academic" id="" required>
                    <option>Select Highest Education quolification</option>
                    <option value="Certificate">Certificate</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Degree">1st Degree</option>
                    <option value="HigherDiploma">Higher Diploma</option>
                    <option value="Masters">Masters Degree</option>
                    <option value="Doctorate">Doctorate degree</option>
                </select><br><br>

                <input class="form-control" name="field" placeholder="Enter your field of study" type="text" required><br>

                <select class="form-control" name="grade" id="" required>
                    <option>Select Grade Acquired</option>
                    <option value="FirstClass">1st Class Honors</option>
                    <option value="SecondUpper">2nd Class Upper division</option>
                    <option value="secondLower">2nd Class lower division</option>
                    <option value="Distinction">Distinction</option>
                    <option value="Credit">Credit</option>
                    <option value="Pass">Pass</option>
                    <option value="Others">Others</option>
                </select><br><br>

                <h3 class="text-center color">Upload your CV</h3>
                <p><b>Note: </b>Only PDF formats are allowed</p>
                <input type="file" id="" class="form-control form-input form-style-base" name="pdf" accept ="application/pdf ">
                <h4 id="fake-btn" class="form-input fake-styled-btn text-center truncate"><span class="margin"></span></h4>


               
                <input class='btn btn-primary' type="submit" name="apply" value="Apply">&nbsp &nbsp &nbsp &nbsp
                
            </div>
            <div class="col-md-4"><br><br><br><a class='btn btn-primary' href="user_logout.php">Logout</a></div>
        </div>
    </form>
    </center>
</body>
</html>