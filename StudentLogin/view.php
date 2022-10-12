

<?php
include 'db.php';
include 'memo.php';
$getid = $_GET['view'];
$seledittwo = "SELECT * FROM `cec2023` WHERE `eroll` = '$getid'";
$qry = mysqli_query($conn, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);
@$eroll = $selassoc['eroll'];
@$erank = $selassoc['erank'];
@$branch = $selassoc['branch'];
@$stdName = $selassoc['stdName'];
@$expName = $selassoc['expName'];
@$dob = $selassoc['dob'];
@$relCast = $selassoc['relCast'];
@$gender = $selassoc['gender'];
@$stdAddress = $selassoc['stdAddress'];
@$stdMob = $selassoc['stdMob'];
@$email = $selassoc['email'];
@$aadhar = $selassoc['aadhar'];
@$pin =  $selassoc['pin'];
@$allotCat = $selassoc['allotCat'];
@$memo = $selassoc['memo'];
@$feeRemittance = $selassoc['feeRemittance'];
@$entranceExamAdmit = $selassoc['entranceExamAdmit'];
@$entranceExamMarkSheet = $selassoc['entranceExamMarkSheet'];
@$sslc = $selassoc['sslc'];
@$twelveth = $selassoc['twelveth'];
@$migrationCert = $selassoc['migrationCert'];
@$tc = $selassoc['tc'];
@$conductCert = $selassoc['conductCert'];
@$eligibilityCert = $selassoc['eligibilityCert'];
@$communityCert = $selassoc['communityCert'];
@$passPhoto = $selassoc['passPhoto'];
@$aadharCard = $selassoc['aadharCard'];
@$sslcReg =  $selassoc['sslcReg'];
@$sslcPassingYear =  $selassoc['sslcPassingYear'];
@$sslcBoard =  $selassoc['sslcBoard'];
@$hscRegNo =  $selassoc['hscRegNo'];
@$hscYear =  $selassoc['hscYear'];
@$hscBoard =  $selassoc['hscBoard'];
@$phy =  $selassoc['phy'];
@$maxPhy =  $selassoc['maxPhy'];
@$che =  $selassoc['che'];
@$maxChe =  $selassoc['maxChe'];
@$math =  $selassoc['math'];
@$maxMath =  $selassoc['maxMath'];
@$total =  $selassoc['total'];
@$maxTotal =  $selassoc['maxTotal'];
@$fatherName =  $selassoc['fatherName'];
@$fatherOffice =  $selassoc['fatherOffice'];
@$fatherPhone =  $selassoc['fatherPhone'];
@$fatherPhone =  $selassoc['fatherPhone'];
@$fatherEmail =  $selassoc['fatherEmail'];
@$momName =  $selassoc['momName'];
@$momOffice =  $selassoc['momOffice'];
@$momPhone =  $selassoc['momPhone'];
@$momEmail =  $selassoc['momEmail'];
@$guardianName =  $selassoc['guardianName'];
@$relationship =  $selassoc['relationship'];
@$guardianAddress =  $selassoc['guardianAddress'];
@$guardianPhone =  $selassoc['guardianPhone'];
@$guardianEmail =  $selassoc['guardianEmail'];


?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>-->
</head>

<body>
    <div class="container">
        <header>Registration</header>

        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field ">
                            <label class="req">Engineering Roll No:</label>
                            <input type="text" name="eroll" value="<?php echo $eroll; ?>" readonly>
                        </div>
                        <div class="input-field">
                            <label class="req">Engineering Rank:</label>
                            <input type="number" name="erank" value="<?php echo $erank; ?>" readonly>
                        </div>
                        <div class="input-field ">
                            <label class="req">Branch</label>
                            <input type="text" name="branch" value="<?php echo $branch; ?>" readonly>
                        </div>
                        <div class="input-field ">
                            <label class="req">Name of student (in block letters)</label>
                            <input type="text" name="stdName" autocapitalize="on" value="<?php echo $stdName; ?>" readonly>
                        </div>


                        <div class="input-field ">
                            <label class="req">Expansion of Initial</label>
                            <input type="text" name="expName" value="<?php echo $expName; ?>" readonly>
                        </div>

                        <div class="input-field ">
                            <label class="req">Date of Birth</label>
                            <input type="date" name="dob" value="<?php echo $dob; ?>" readonly>
                        </div>

                        <div class="input-field ">
                            <label class="req">Religion & Caste</label>
                            <input type="text" name="cast" value="<?php echo $relCast; ?>" readonly>
                            
                        </div>

                        <div class="input-field ">
                            <label class="req">Address</label>
                            <input type="text" name="addr" value="<?php echo $stdAddress; ?>" readonly>
                        </div>

                        <div class="input-field ">
                            <label class="req">Mobile Number</label>
                            <input type="number" name="mob" value="<?php echo $stdMob; ?>" readonly>
                        </div>

                        <div class="input-field ">
                            <label class="req">Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>"readonly>
                        </div>

                        <div class="input-field ">
                            <label class="req">Aadhar No</label>
                            <input type="number" name="aadhaar" value="<?php echo $aadhar; ?>" readonly>
                        </div>

                        <div class="input-field ">
                            <label class="req">PIN</label>
                            <input type="number" name="pin" value="<?php echo $pin; ?>" readonly>
                        </div>

                        <div class="input-field ">
                            <label class="req">Gender</label>
                            <input type="text" name="gender" value="<?php echo $gender; ?>" readonly >
                        </div>





                    </div>
                    <div class="details address">
                        <span class="title">Allotment Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label class="req">Allotted Category</label>
                                <input type="text" name="cat" value="<?php echo $allotCat; ?>" readonly >
                            </div>
                        </div>

                        <div class="details family">

                            <div class="fields">

                                <div class="input-field">
                                    <label>Allotment Memo</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$memo;?>" target="_blank"><input type="button" value="View" /></a>
                                    <!-- <input type="file" id ="memo" name="memo" > -->
                                </div>

                                <div class="input-field">
                                    <label>Fee Remittance Certificate</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$feeRemittance;?>" target="_blank"><input type="button" value="View" /></a>

                                </div>
                                <div class="input-field">
                                    <label>Entrance exam Admit Card</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$entranceExamAdmit;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>Entrance Exam Marks Data Sheet</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$entranceExamMarkSheet;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>SSLC / Certificate to prove DOB</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$sslc;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>Qualifying exam Mark list (Plus Two)</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$twelveth;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>Migration Certificate (if applicable)</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$migrationCert;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>Transfer Certificate from instn. last studied</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$tc;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>Conduct Certificate from instn. last studied</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$conductCert;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>Eligibility Certificate (if applicable)</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$eligibilityCert;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>Community Certificate (if applicable)</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$communityCert;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>
                                <div class="input-field">
                                    <label>Passport size photo</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$passPhoto;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>

                                <div class="input-field">
                                    <label>Aadhar Card</label>
                                    <a href="/StudentLogin/uploads/<?php echo $eroll."_".$memo;?>" target="_blank"><input type="button" value="View" /></a>
                                </div>

                            </div>

                            <div class="details personal">
                                <span class="title">Educational Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label class="req">10 th Reg. No:</label>
                                        <input type="text" name="tenth" value="<?php echo $sslcReg; ?>" readonly>
                                    </div>
                                    <div class="input-field">
                                        <label class="req">10th Year of passing :</label>
                                        <input type="number" name="tenthYear" value="<?php echo $sslcPassingYear; ?>"  readonly>
                                    </div>

                                    <div class="input-field">
                                        <label class="req">Board</label>
                                        <input type="number" name="tenthYear" value="<?php echo $sslcBoard; ?>"  readonly>
                                    </div>

                                    <div class="input-field">
                                        <label class="req">12 th Reg. No:</label>
                                        <input type="text" name="hsc" value="<?php echo $hscRegNo; ?>" readonly>
                                    </div>
                                    <div class="input-field">
                                        <label class="req">Year of passing :</label>
                                        <input type="text" name="hscYear" value="<?php echo $hscYear; ?>" readonly>
                                    </div>

                                    <div class="input-field">
                                        <label class="req">Board</label>
                                        <input type="text" name="hscBoard" value="<?php echo $hscBoard; ?>" readonly>

                                    </div>








                                </div>

                            </div>

                            <div class="details personal">
                                <span class="title">12th Marks</span>

                                <div class="fields">
                                    
                                    <div class="input-field phy">
                                        <label class="req">PHY marks</label>
                                        <input type="number" name = "phy" value="<?php echo $phy; ?>" readonly>
                                    </div>
                                    <div class="input-field phy">
                                        <label class="req">Maximum Marks</label>
                                        <input type="number" name = "maxPhy" value="<?php echo $maxPhy; ?>" readonly>
                                    </div>
                                    
                                  
                                    <div class="input-field phy">
                                        <label class="req">CHE marks</label>
                                        <input type="number" name = "che" value="<?php echo $che; ?>" readonly>
                                    </div>
                                    <div class="input-field phy">
                                        <label class="req">Maximum Marks</label>
                                        <input type="number" name = "maxChe" value="<?php echo $maxChe; ?>" readonly>
                                    </div>

                                    <div class="input-field phy">
                                        <label class="req">MATH marks</label>
                                        <input type="number" name = "math" value="<?php echo $math; ?>" readonly>
                                    </div>
                                    <div class="input-field phy">
                                        <label class="req">Maximum Marks</label>
                                        <input type="number" name = "maxMath" value="<?php echo $maxMath; ?>" readonly>
                                    </div>

                                    <div class="input-field phy">
                                        <label class="req">TOTAL marks</label>
                                        <input type="number" name = "total" value="<?php echo $total; ?>" readonly>
                                    </div>
                                    <div class="input-field phy">
                                        <label class="req">Maximum Marks</label>
                                        <input type="number" name = "maxTotal"  value="<?php echo $maxTotal; ?>" readonly>
                                    </div>
                                </div>
                                <div class="details family">
                                    <span class="title">Family Details</span>

                                    <div class="fields">
                                        <div class="input-field" >
                                            <label class="req">Father Name</label>
                                            <input type="text" name = "fatherName" value="<?php echo $fatherName; ?>" readonly>
                                        </div>

                                        <div class="input-field">
                                            <label class="req">Office Address</label>
                                            <input type="text" name = "fatherOffice" value="<?php echo $fatherOffice; ?>" readonly>
                                        </div>

                                        <div class="input-field">
                                            <label class="req">Mobile Number</label>
                                            <input type="number" name = "fatherPhone" value="<?php echo $fatherPhone; ?>" readonly>
                                        </div>
                                        <div class="input-field">
                                            <label class="req">Email</label>
                                            <input type="email" name = "fatherEmail" value="<?php echo $fatherEmail; ?>" readonly>
                                        </div>

                                        <div class="input-field">
                                            <label class="req">Mother Name</label>
                                            <input type="text" name = "momName" value="<?php echo $momName; ?>" readonly>
                                        </div>


                                        <div class="input-field">
                                            <label class="req">Office Address</label>
                                            <input type="text" name = "momOffice" value="<?php echo $momOffice; ?>" readonly>
                                        </div>

                                        <div class="input-field">
                                            <label class="req">Mobile Number</label>
                                            <input type="number" name = "momPhone" value="<?php echo $momPhone; ?>" readonly>
                                        </div>
                                        <div class="input-field">
                                            <label class="req">Email</label>
                                            <input type="email" name = "momEmail" value="<?php echo $momEmail; ?>" readonly>
                                        </div>

                                        <div class="input-field">
                                            <label >Name of Local guardian, if any</label>
                                            <input type="text" name = "guardianName" name = "guardianName" value="<?php echo $guardianName; ?>" readonly  >
                                        </div>

                                        <div class="input-field">
                                            <label >Relationship with student</label>
                                            <input type="text" name = "relationship" value="<?php echo $relationship; ?>" readonly >
                                        </div>

                                        <div class="input-field">
                                            <label >Full address</label>
                                            <input type="text" name = "guardianAddress" value="<?php echo $guardianAddress; ?>" readonly  >
                                        </div>

                                        <div class="input-field">
                                            <label >Mobile number</label>
                                            <input type="number" name = "guardianPhone" value="<?php echo $guardianPhone; ?>" readonly >
                                        </div>
                                        <div class="input-field">
                                            <label>E-Mail ID</label>
                                            <input type="number" name = "guardianEmail" value="<?php echo $guardianEmail; ?>" readonly>
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

</body>

</html>