<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $sslc = $_FILES['c5']['name'];
                $sslc_type = $_FILES['c5']['type'];
                $sslc_size = $_FILES['c5']['size'];
                $sslc_temp = $_FILES['c5']['tmp_name'];
                $sslc_store = "uploads/".$eroll."_".$sslc;

                move_uploaded_file($sslc_temp,$sslc_store);
            }
?>