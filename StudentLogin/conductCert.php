<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $conductCert = $_FILES['c9']['name'];
                $conductCert_type = $_FILES['c9']['type'];
                $conductCert_size = $_FILES['c9']['size'];
                $conductCert_temp = $_FILES['c9']['tmp_name'];
                $conductCert_store = "uploads/".$eroll."_".$conductCert;

                move_uploaded_file($conductCert_temp,$conductCert_store);
            }
?>