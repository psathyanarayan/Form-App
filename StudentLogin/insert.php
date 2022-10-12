<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        ini_set("display_errors", "1");
        error_reporting(E_ALL);


        


         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/memo.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/feeRemittance.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/entranceAdmitCard.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/entranceExamMarkSheet.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/sslc.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/twelveth.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/migrationCert.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/tc.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/conductCert.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/eligibilityCert.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/communityCert.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/passPhoto.php');
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/aadharCard.php');

           

            $sql = "INSERT INTO cec2023  (eroll,
        erank,branch,stdName,expName,dob,relCast,stdAddress,stdMob,email,aadhar,gender,allotCat,memo,feeRemittance,entranceExamAdmit,entranceExamMarkSheet,sslc,twelveth,migrationCert,tc,conductCert,eligibilityCert,communityCert,passPhoto,aadharCard,sslcReg,sslcPassingYear,sslcBoard,hscRegNo,hscYear,hscBoard,phy,maxPhy,che,maxChe,math,maxMath,total,maxTotal,fatherName,fatherOffice,fatherPhone,fatherEmail,momName,momOffice,momPhone,momEmail,guardianName,relationship,guardianAddress,guardianPhone,guardianEmail,pin) VALUES ('$eroll',
            '$erank','$branch','$stdName','$expName','$dob','$cast','$addr','$mob','$email','$aadhar','$gender','$cat','$pdf','$fee','$entrance','$entranceMarkSheet','$sslc','$twelveth','$migrationCert','$tc','$conductCert','$eligibilityCert','$communityCert','$passPhoto','$aadharCard','$tenth','$tenthYear','$sslcBoard','$hsc','$hscYear','$hscBoard','$phy','$maxPhy','$che','$maxChe','$math','$maxMath','$total','$maxTotal','$fatherName','$fatherOffice','$fatherPhone','$fatherEmail','$momName','$momOffice','$momPhone','$momEmail','$guardianName','$relationship','$guardianAddress','$guardianPhone','$guardianEmail','$pin')";

            if(mysqli_query($conn, $sql)){
                echo "Records added successfully.";
     
    //            echo nl2br("\n$eroll\n $rank\n "
    //                . "$branch\n $stdName);
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
             
            // Close connection
            mysqli_close($conn);
         
            
        


        
        ?>
    </center>
</body>
 
</html>