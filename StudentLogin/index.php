
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>-->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admission             </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/StudentLogin/data.php">View Data</a>
      </li>
      
    </ul>
  </div>
</nav>
    <div class="container">
        <header>Registration</header>

        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field ">
                            <label class="req">Engineering Roll No:</label>
                            <input type="number" name="eroll" placeholder="Engineering Roll No: " required>
                        </div>
                        <div class="input-field">
                            <label class="req">Engineering Rank:</label>
                            <input type="number" name="erank" placeholder="Admission Number No:" required>
                        </div>
                        <div class="input-field ">
                            <label class="req">Branch</label>
                            <input type="text" name="branch" placeholder="Branch" required>
                        </div>
                        <div class="input-field ">
                            <label class="req">Name of student (in block letters)</label>
                            <input type="text" name="stdName" autocapitalize="on" placeholder="ENTER YOUR NAME" required>
                        </div>


                        <div class="input-field ">
                            <label class="req">Expansion of Initial</label>
                            <input type="text" name="expName" placeholder="Expansion of Initial" required>
                        </div>

                        <div class="input-field ">
                            <label class="req">Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field ">
                            <label class="req">Religion & Caste</label>
                            <select name="cast" required>
                                <option disabled selected>Select Religion or Caste</option>
                                <option>General</option>
                                <option>OBC</option>
                                <option>SC</option>
                                <option>ST</option>
                                <option>EWS</option>
                            </select>
                        </div>

                        <div class="input-field ">
                            <label class="req">Address</label>
                            <input type="text" name="addr" placeholder="Address for Communication" required>
                        </div>

                        <div class="input-field ">
                            <label class="req">Mobile Number</label>
                            <input type="number" name="mob" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field ">
                            <label class="req">Email</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field ">
                            <label class="req">Aadhar No</label>
                            <input type="number" name="aadhaar" placeholder="Aadhar No" required>
                        </div>

                        <div class="input-field ">
                            <label class="req">PIN</label>
                            <input type="number" name="pin" placeholder="PIN" >
                        </div>

                        <div class="input-field ">
                            <label class="req">Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>





                    </div>
                    <div class="details address">
                        <span class="title">Allotment Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label class="req">Allotted Category</label>
                                <select name="cat" required>
                                    <option disabled selected>Select Allotted Category</option>
                                    <option>SM</option>
                                    <option>MG</option>
                                    <option>BH</option>
                                    <option>EZ</option>
                                    <option>LC</option>
                                    <option>BX</option>
                                    <option>SC</option>
                                    <option>ST</option>
                                    <option>KU</option>
                                    <option>XC</option>
                                    <option>XS</option>
                                    <option>XP</option>
                                    <option>CO</option>
                                    <option>EM</option>
                                    <option>CC</option>
                                    <option>SG</option>
                                    <option>EO</option>
                                    <option>HN</option>
                                    <option>EWS</option>
                                    <option>VK</option>
                                    <option>LA/DV</option>
                                </select>
                            </div>
                        </div>

                        <div class="details family">

                            <div class="fields">

                                <div class="input-field">
                                    <label>Allotment Memo</label>
                                    <input type="file" id ="memo" name="memo" >
                                </div>

                                <div class="input-field">
                                    <label>Fee Remittance Certificate</label>
                                    <input name="c2" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Entrance exam Admit Card</label>
                                    <input name="c3" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Entrance Exam Marks Data Sheet</label>
                                    <input name="c4" type="file">
                                </div>
                                <div class="input-field">
                                    <label>SSLC / Certificate to prove DOB</label>
                                    <input name="c5" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Qualifying exam Mark list (Plus Two)</label>
                                    <input name="c6" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Migration Certificate (if applicable)</label>
                                    <input name="c7" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Transfer Certificate from instn. last studied</label>
                                    <input name="c8" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Conduct Certificate from instn. last studied</label>
                                    <input name="c9" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Eligibility Certificate (if applicable)</label>
                                    <input name="c10" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Community Certificate (if applicable)</label>
                                    <input name="c11" type="file">
                                </div>
                                <div class="input-field">
                                    <label>Passport size photo</label>
                                    <input name="c12" type="file">
                                </div>

                                <div class="input-field">
                                    <label>Copies of Aadhar</label>
                                    <input name="c13" type="file">
                                </div>

                            </div>

                            <div class="details personal">
                                <span class="title">Educational Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label class="req">10 th Reg. No:</label>
                                        <input type="text" name="tenth" placeholder="10 th Reg. No:" required>
                                    </div>
                                    <div class="input-field">
                                        <label class="req">10th Year of passing :</label>
                                        <input type="number" name="tenthYear" placeholder="E.Rank No:" required>
                                    </div>

                                    <div class="input-field">
                                        <label class="req">Board</label>
                                        <select name="board" required>
                                            <option disabled selected>Select Boards</option>
                                            <option>SSLC</option>
                                            <option>CBSE</option>
                                            <option>ICSE</option>
                                            <option>Others</option>
                                        </select>
                                    </div>

                                    <div class="input-field">
                                        <label class="req">12 th Reg. No:</label>
                                        <input type="text" name="hsc" placeholder="Branch" required>
                                    </div>
                                    <div class="input-field">
                                        <label class="req">Year of passing :</label>
                                        <input type="text" name="hscYear" placeholder="Enter your name" required>
                                    </div>

                                    <div class="input-field">
                                        <label class="req">Board</label>
                                        <select name="hscBoard" required>
                                            <option disabled selected>Select Board</option>
                                            <option>HSC</option>
                                            <option>VHSC</option>
                                            <option>CBSE</option>
                                            <option>ISC</option>
                                            <option>OTHERS</option>
                                        </select>
                                    </div>








                                </div>

                            </div>

                            <div class="details personal">
                                <span class="title">12th Marks</span>

                                <div class="fields">
                                    
                                    <div class="input-field phy">
                                        <label class="req">PHY marks</label>
                                        <input type="number" name = "phy" placeholder="Physics marks" required>
                                    </div>
                                    <div class="input-field phy">
                                        <label class="req">Maximum Marks</label>
                                        <input type="number" name = "maxPhy" placeholder="Maximum Marks" required>
                                    </div>
                                    
                                  
                                    <div class="input-field phy">
                                        <label class="req">CHE marks</label>
                                        <input type="number" name = "che" placeholder="Chemistry marks" required>
                                    </div>
                                    <div class="input-field phy">
                                        <label class="req">Maximum Marks</label>
                                        <input type="number" name = "maxChe" placeholder="Maximum Marks" required>
                                    </div>

                                    <div class="input-field phy">
                                        <label class="req">MATH marks</label>
                                        <input type="number" name = "math" placeholder="Math marks" required>
                                    </div>
                                    <div class="input-field phy">
                                        <label class="req">Maximum Marks</label>
                                        <input type="number" name = "maxMath" placeholder="Maximum Marks" required>
                                    </div>

                                    <div class="input-field phy">
                                        <label class="req">TOTAL marks</label>
                                        <input type="number" name = "total" placeholder="Total marks (Phy + Che + Math)" required>
                                    </div>
                                    <div class="input-field phy">
                                        <label class="req">Maximum Marks</label>
                                        <input type="number" name = "maxTotal"  placeholder="Maximum Marks" required>
                                    </div>
                                </div>
                                <div class="details family">
                                    <span class="title">Family Details</span>

                                    <div class="fields">
                                        <div class="input-field" >
                                            <label class="req">Father Name</label>
                                            <input type="text" name = "fatherName" placeholder="Enter father's name" required>
                                        </div>

                                        <div class="input-field">
                                            <label class="req">Office Address</label>
                                            <input type="text" name = "fatherOffice" placeholder="Enter father's office address" required>
                                        </div>

                                        <div class="input-field">
                                            <label class="req">Mobile Number</label>
                                            <input type="number" name = "fatherPhone" placeholder="Enter father's mobile number" required>
                                        </div>
                                        <div class="input-field">
                                            <label class="req">Email</label>
                                            <input type="email" name = "fatherEmail" placeholder="Enter father's email" required>
                                        </div>

                                        <div class="input-field">
                                            <label class="req">Mother Name</label>
                                            <input type="text" name = "momName" placeholder="Enter mother's name" required>
                                        </div>


                                        <div class="input-field">
                                            <label class="req">Office Address</label>
                                            <input type="text" name = "momOffice" placeholder="Enter mother's office address" required>
                                        </div>

                                        <div class="input-field">
                                            <label class="req">Mobile Number</label>
                                            <input type="number" name = "momPhone" placeholder="Enter mother's phone number" required>
                                        </div>
                                        <div class="input-field">
                                            <label class="req">Email</label>
                                            <input type="email" name = "momEmail" placeholder="Enter mother's email" required>
                                        </div>

                                        <div class="input-field">
                                            <label >Name of Local guardian, if any</label>
                                            <input type="text" name = "guardianName" name = "maxTotal" placeholder="Enter Local guardian's name" >
                                        </div>

                                        <div class="input-field">
                                            <label >Relationship with student</label>
                                            <input type="text" name = "relationship" placeholder="Relationship with student">
                                        </div>

                                        <div class="input-field">
                                            <label >Full address</label>
                                            <input type="text" name = "guardianAddress" placeholder="Full address" >
                                        </div>

                                        <div class="input-field">
                                            <label >Mobile number</label>
                                            <input type="number" name = "guardianPhone" placeholder="Mobile number">
                                        </div>
                                        <div class="input-field">
                                            <label>E-Mail ID</label>
                                            <input type="number" name = "guardianEmail" placeholder="Email Id">
                                        </div>

                                    </div>


                            
                        <div class="buttons">
                            <button class="submit" name="submit" type="submit">
                                <span class="btnText">Submit</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>

                    </div>



        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>