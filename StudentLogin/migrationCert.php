<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $migrationCert = $_FILES['c7']['name'];
                $migrationCert_type = $_FILES['c7']['type'];
                $migrationCert_size = $_FILES['c7']['size'];
                $migrationCert_temp = $_FILES['c7']['tmp_name'];
                $migrationCert_store = "uploads/".$eroll."_".$migrationCert;

                move_uploaded_file($migrationCert_temp,$migrationCert_store);
            }
?>