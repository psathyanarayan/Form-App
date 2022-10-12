<html>
    <title>Data</title>
    <body>
        <style>
    table {
  width: 100%;
}
table, th, td {
  border: 1px solid;
  padding: 15px;
  width: 50px;
}
.dob{
    width: 500px !important;
}

        </style>
        <table >
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>ereg</th>
                <th>erank</th>
                <th>branch</th>
                <th>stdName</th>
                <th>expName</th>
                <th class="dob">dob</th>
                <th>cast</th>
                <th>addr</th>
                <th>mob</th>
                <th>email</th>
                <th>aadhar</th>
                <th>gender</th>
                <th>pin</th>
                <th>cat</th>
                <th>memo</th>
                <th>feeRemittance</th>
                <th>entranceExamAdmit</th>
                <th>entranceExamMarkSheet</th>
                <th>sslc</th>
                <th>twelveth</th>
                <th>migrationCert</th>
                <th>tc</th>
                <th>conductCert</th>
                <th>eligibilityCert</th>
                <th>communityCert</th>
                <th>passPhoto</th>
                <th>aadharCard</th>
                <th>sslcReg</th>
                <th>sslcPassingYear</th>
                <th>sslcBoard</th>
                <th>hscRegNo</th>
                <th>hscYear</th>
                <th>hscBoard</th>
                <th>phy</th>
                <th>maxPhy</th>
                <th>che</th>
                <th>maxChe</th>
                <th>math</th>
                <th>maxMath</th>
                <th>total</th>
                <th>maxTotal</th>
                <th>fatherName</th>
                <th>fatherOffice</th>
                <th>fatherPhone</th>
                <th>fatherEmail</th>
                <th>momName</th>
                <th>momOffice</th>
                <th>momPhone</th>
                <th>momEmail</th>
                <th>guardianName</th>
                <th>relationship</th>
                <th>guardianAddress</th>
                <th>guardianPhone</th>
                <th>guardianEmail</th>
            </tr>

            <?php
            include 'db.php';
         include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/memo.php');
      
           
            $sql = "SELECT * FROM cec2023";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td><a href=view.php?view=".$row["eroll"]." >View</a></td><td><a href=edit.php?edit=".$row["eroll"]." >Edit</a></td><td><a onclick=\"return confirm('Are you sure you want to delete?');\" href=delete.php?deleteid=".$row["eroll"]." >Delete</a></td><td>".$row["eroll"]."</td><td>".$row["erank"]."</td><td>".$row["branch"]."</td><td>".$row["stdName"]."</td><td>".$row["expName"]."</td><td>".$row["dob"]."</td><td>".$row["relCast"]."</td><td>".$row["stdAddress"]."</td><td>".$row["stdMob"]."</td><td>".$row["email"]."</td><td>".$row["aadhar"]."</td><td>".$row["gender"]."</td><td>".$row["pin"]."</td><td>".$row["allotCat"]."</td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["memo"]."\">".$row["memo"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["feeRemittance"]."\">".$row["feeRemittance"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["entranceExamAdmit"]."\">".$row["entranceExamAdmit"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["entranceExamMarkSheet"]."\">".$row["entranceExamMarkSheet"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["sslc"]."\">".$row["sslc"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["twelveth"]."\">".$row["twelveth"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["migrationCert"]."\">".$row["migrationCert"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["tc"]."\">".$row["tc"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["conductCert"]."\">".$row["conductCert"]."</a></td><td>".$row["eligibilityCert"]."</td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["communityCert"]."\">".$row["communityCert"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["passPhoto"]."\">".$row["passPhoto"]."</a></td><td><a href=\"/StudentLogin/uploads/".$row["eroll"]."_".$row["aadharCard"]."\">".$row["aadharCard"]."</a></td><td>".$row["sslcReg"]."</td><td>".$row["sslcPassingYear"]."</td><td>".$row["sslcBoard"]."</td><td>".$row["hscRegNo"]."</td><td>".$row["hscYear"]."</td><td>".$row["hscBoard"]."</td><td>".$row["phy"]."</td><td>".$row["maxPhy"]."</td><td>".$row["che"]."</td><td>".$row["maxChe"]."</td><td>".$row["math"]."</td><td>".$row["maxMath"]."</td><td>".$row["total"]."</td><td>".$row["maxTotal"]."</td><td>".$row["fatherName"]."</td><td>".$row["fatherOffice"]."</td><td>".$row["fatherPhone"]."</td><td>".$row["fatherEmail"]."</td><td>".$row["momName"]."</td><td>".$row["momOffice"]."</td><td>".$row["momPhone"]."</td><td>".$row["momEmail"]."</td><td>".$row["guardianName"]."</td><td>".$row["relationship"]."</td><td>".$row["guardianAddress"]."</td><td>".$row["guardianPhone"]."</td><td>".$row["guardianEmail"]."</td></tr>";
                }
            }
            else
            {
                echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
            }
            ?>


        </table>
    </body>
</html>