<?php
include("db.php");


$getid = $_GET['edit'];
echo $getid;
$seledittwo = "SELECT * FROM `cec2023` WHERE `eroll` = '$getid'";


$qry = mysqli_query($conn, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

@$eroll = $selassoc['eroll'];
@$erank = $selassoc['erank'];
@$branch = $selassoc['branch'];
@$stdName = $selassoc['stdName'];
@$expName = $selassoc['expName'];
@$dob = $selassoc['dob'];
@$stdAddress = $selassoc['stdAddress'];
@$stdMob = $selassoc['stdMob'];
@$email = $selassoc['email'];
@$aadhar = $selassoc['aadhar'];
@$pin =  $selassoc['pin'];
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
@$momName =  $selassoc['momName'];
@$momOffice =  $selassoc['momOffice'];
@$momPhone =  $selassoc['momEmail'];
@$guardianName =  $selassoc['guardianName'];
@$relationship =  $selassoc['relationship'];
@$guardianAddress =  $selassoc['guardianAddress'];
@$guardianPhone =  $selassoc['guardianPhone'];
@$guardianEmail =  $selassoc['guardianEmail'];

if(isset($_POST['updateedit'])) {
	@$eroll =  $_POST['eroll'];
	@$erank =  $_POST['erank'];
	@$branch =  $_POST['branch'];
	@$stdName =  $_POST['stdName'];
	@$expName =  $_POST['expName'];
	@$dob =  $_POST['dob'];
	@$stdAddress =  $_POST['stdAddress'];
	@$stdMob =  $_POST['stdMob'];
	@$email =  $_POST['email'];
	@$aadhar =  $_POST['aadhar'];
	@$pin =  $_POST['pin'];
	@$sslcReg =  $_POST['sslcReg'];
	@$sslcPassingYear =  $_POST['sslcPassingYear'];
	@$sslcBoard =  $_POST['sslcBoard'];
	@$hscRegNo =  $_POST['hscRegNo'];
	@$hscYear =  $_POST['hscYear'];
	@$hscBoard =  $_POST['hscBoard'];
	@$phy =  $_POST['phy'];
	@$maxPhy =  $_POST['maxPhy'];
	@$che =  $_POST['maxChe'];
	@$math =  $_POST['math'];
	@$maxMath =  $_POST['maxMath'];
	@$total =  $_POST['total'];
	@$maxTotal =  $_POST['maxTotal'];
	@$fatherName =  $_POST['fatherName'];
	@$fatherOffice =  $_POST['fatherOffice'];
	@$fatherPhone =  $_POST['fatherPhone'];
	@$momName =  $_POST['momName'];
	@$momOffice =  $_POST['momOffice'];
	@$momPhone =  $_POST['momPhone'];
	@$guardianName =  $_POST['guardianName'];
	@$relationship =  $_POST['relationship'];
	@$guardianAddress =  $_POST['guardianAddress'];
	@$guardianPhone =  $_POST['guardianPhone'];
	@$guardianEmail =  $_POST['guardianEmail'];


	$seleditt = "UPDATE `cec2023` SET `eroll`='$eroll',`erank`='$erank',`branch`='$branch',`stdName`='$stdName',`expName`='$expName',`dob`='$dob',`stdAddress`='$stdAddress',`stdMob`='$stdMob',`email`='$email',`aadhar`='$aadhar',`pin`='$pin',`sslcReg`='$sslcReg',`sslcPassingYear`='$sslcPassingYear',`sslcBoard`='$sslcBoard',`hscRegNo`='$hscRegNo',`hscYear`='$hscYear',`hscBoard`='$hscBoard',`phy`='$phy',`maxPhy`='$maxPhy',`che`='$che',`maxChe`='$maxChe',`math`='$math',`maxMath`='$maxMath',`total`='$total',`maxTotal`='$maxTotal',`fatherName`='$fatherName',`fatherOffice`='$fatherOffice',`fatherPhone`='$fatherPhone',`momName`='$momName',`momOffice`='$momOffice',`momPhone`='$momPhone',`guardianName`='$guardianName',`relationship`='$relationship',`guardianAddress`='$guardianAddress',`guardianPhone`='$guardianPhone',`guardianEmail`='$guardianEmail' WHERE `eroll` = '$eroll'";
	$qry = mysqli_query($conn,$seleditt);

	
}

//$seledit = "UPDATE `insertdeleteedittable` SET `id`=[value-1],`firstname`=[value-2],`lastname`=[value-3],`email`=[value-4] WHERE `id` = '$getid'";



?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
    <style>
     body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
  
}
form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}
        input{
            background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
        }

		.button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: rgb(181,0,0);

  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid rgb(198,0,0);
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}
label {
  display: block;
  margin-bottom: 8px;
}
@media screen and (min-width: 480px) {

form {
  max-width: 480px;
}

}
    </style>
</head>
<body>


<form method="POST" action="">
<label class="req">Engineering Roll No:</label>
   <input type="text" name="eroll" value="<?php echo $eroll; ?>"><br><br>
   <label class="req">Engineering Rank:</label>
	<input type="number" name="erank" value="<?php echo $erank; ?>"><br><br>
    <label class="req">Branch</label>
	<input type="text" name="branch" value="<?php echo $branch ; ?>"><br><br>
    <label class="req">Name of student (in block letters)</label>
	<input type="text" name="stdName" value="<?php echo $stdName; ?>"><br><br>
    <label class="req">Expansion of Initial</label>
	<input type="text" name="expName" value="<?php echo $expName; ?>"><br><br>
    <label class="req">Date of Birth</label>
	<input type="date" name="dob" value="<?php echo $dob; ?>"><br><br>
    <label class="req">Address</label>
	<input type="text" name="stdAddress" value="<?php echo $stdAddress; ?>"><br><br>
    <label class="req">Mobile Number</label>
	<input type="number" name="stdMob" value="<?php echo $stdMob; ?>"><br><br>
    <label class="req">Email</label>
	<input type="email" name="email" value="<?php echo $email; ?>"><br><br>
    <label class="req">Aadhar</label>
	<input type="number" name="aadhar" value="<?php echo $aadhar; ?>"><br><br>
	<label class="req">Pin No</label>
	<input type="number" name="pin" value="<?php echo $pin; ?>"><br><br>
    <label class="req">sslcReg No</label>
	<input type="number" name="sslcReg" value="<?php echo $sslcReg; ?>"><br><br>
    <label class="req">sslcPassingYear No</label>
	<input type="number" name="sslcPassingYear" value="<?php echo $sslcPassingYear; ?>"><br><br>
    <label class="req">sslcBoard No</label>
	<input type="number" name="sslcBoard" value="<?php echo $sslcBoard; ?>"><br><br>
    <label class="req">hscRegNo No</label>
	<input type="number" name="hscRegNo" value="<?php echo $hscRegNo; ?>"><br><br>
    <label class="req">hscYear</label>
	<input type="number" name="hscYear" value="<?php echo $hscYear; ?>"><br><br>
    <label class="req">PHY</label>
	<input type="number" name="phy" value="<?php echo $phy; ?>"><br><br>
    <label class="req">maxPhy</label>
	<input type="number" name="maxPhy" value="<?php echo $maxPhy; ?>"><br><br>
    <label class="req">CHE</label>
	<input type="number" name="che" value="<?php echo $che; ?>"><br><br>
    <label class="req">Max CHE</label>
	<input type="number" name="maxChe" value="<?php echo $maxChe; ?>"><br><br>
    <label class="req">Math</label>
	<input type="number" name="math" value="<?php echo $math; ?>"><br><br>
    <label class="req">Max Math</label>
	<input type="number" name="maxMath" value="<?php echo $maxMath; ?>"><br><br>
    <label class="req">total</label>
	<input type="number" name="total" value="<?php echo $total; ?>"><br><br>
    <label class="req">maxTotal</label>
	<input type="number" name="maxTotal" value="<?php echo $maxTotal; ?>"><br><br>
    <label class="req">fatherName</label>
	<input type="text" name="fatherName" value="<?php echo $fatherName; ?>"><br><br>
    <label class="req">fatherOffice</label>
	<input type="text" name="fatherOffice" value="<?php echo $fatherOffice; ?>"><br><br>
	<label class="req">fatherPhone</label>
	<input type="number" name="fatherPhone" value="<?php echo $fatherPhone; ?>"><br><br>
	<label class="req">momName</label>
	<input type="text" name="momName" value="<?php echo $momName; ?>"><br><br>
	<label class="req">momOffice</label>
	<input type="text" name="momOffice" value="<?php echo $momOffice; ?>"><br><br>
	<label class="req">momPhone</label>
	<input type="number" name="momPhone" value="<?php echo $momPhone; ?>"><br><br>
	<label class="req">guardianName</label>
	<input type="text" name="guardianName" value="<?php echo $guardianName; ?>"><br><br>
	<label class="req">relationship</label>
	<input type="text" name="relationship" value="<?php echo $relationship; ?>"><br><br>
	<label class="req">guardianName</label>
	<input type="text" name="guardianName" value="<?php echo $guardianName; ?>"><br><br>
	<label class="req">guardianAddress</label>
	<input type="text" name="guardianAddress" value="<?php echo $guardianAddress; ?>"><br><br>
	<label class="req">guardianPhone</label>
	<input type="number" name="guardianPhone" value="<?php echo $guardianPhone; ?>"><br><br>
	<label class="req">guardianEmail</label>
	<input type="email" name="guardianEmail" value="<?php echo $guardianEmail; ?>"><br><br>



	
    <input class="button" type="submit" name="updateedit" value="Update">

</form>
</body>
</html>