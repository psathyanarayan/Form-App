<?php
ini_set("display_errors", "1");
            error_reporting(E_ALL);
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        //$conn = mysqli_connect("103.21.59.15:3306", "coec_cecadmin", "cecadmin", "coec_cec2023");
        $conn = mysqli_connect("localhost", "root", "", "cec");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        
        
        // Taking all 5 values from the form data(input)
        @$eroll =  $_REQUEST['eroll'];
        @$erank = $_REQUEST['erank'];
        @$branch =  $_REQUEST['branch'];
        @$stdName = $_REQUEST['stdName'];
        @$expName = $_REQUEST['expName'];
        @$cast = $_REQUEST['cast'];
        @$dob = $_REQUEST['dob'];
        @$addr = $_REQUEST['addr'];
        @$mob = $_REQUEST['mob'];
        @$email = $_REQUEST['email'];
        @$aadhar = $_REQUEST['aadhaar'];
        @$pin = $_REQUEST['pin'];
        @$gender = $_REQUEST['gender'];
         @$cat = $_REQUEST['cat'];
        @$memo = $_REQUEST['memo'];
       
        @$c2 = $_REQUEST['c2'];
        @$c3 = $_REQUEST['c3'];
        @$c4 = $_REQUEST['c4'];
        @$c5 = $_REQUEST['c5'];
        @$c6 = $_REQUEST['c6'];
        @$c7 = $_REQUEST['c7'];
        @$c8 = $_REQUEST['c8'];
        @$c9 = $_REQUEST['c9'];
        @$c10 = $_REQUEST['c10'];
        @$c11 = $_REQUEST['c11'];
        @$c12 = $_REQUEST['c12'];
        @$c13 = $_REQUEST['c13'];
        @$tenth = $_REQUEST['tenth'];
        @$tenthYear = $_REQUEST['tenthYear'];
        @$hsc = $_REQUEST['hsc'];
        @$hscYear = $_REQUEST['hscYear'];
        @$sslcBoard = $_REQUEST['board'];
        @$hscBoard = $_REQUEST['hscBoard'];
        @$phy = $_REQUEST['phy'];
        @$maxPhy = $_REQUEST['maxPhy'];
        @$che = $_REQUEST['che'];
        @$maxChe = $_REQUEST['maxChe'];
        @$math = $_REQUEST['math'];
        @$maxMath = $_REQUEST['maxMath'];
        @$total = $_REQUEST['total'];
        @$maxTotal = $_REQUEST['maxTotal'];
        @$fatherName = $_REQUEST['fatherName'];
        @$fatherOffice = $_REQUEST['fatherOffice'];
        @$fatherPhone = $_REQUEST['fatherPhone'];
        @$fatherEmail = $_REQUEST['fatherEmail'];
        @$momName = $_REQUEST['momName'];
        @$momOffice = $_REQUEST['momOffice'];
        @$momPhone = $_REQUEST['momPhone'];
        @$momEmail = $_REQUEST['momEmail'];
        @$guardianName = $_REQUEST['guardianName'];
        @$relationship = $_REQUEST['relationship'];
        @$guardianAddress = $_REQUEST['guardianAddress'];
        @$guardianPhone = $_REQUEST['guardianPhone'];
        @$guardianEmail = $_REQUEST['guardianEmail'];
         
        // Performing insert query execution
        // here our table name is college
?>        
         