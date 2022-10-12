<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $eligibilityCert = $_FILES['c10']['name'];
                $eligibilityCert_type = $_FILES['c10']['type'];
                $eligibilityCert_size = $_FILES['c10']['size'];
                $eligibilityCert_temp = $_FILES['c10']['tmp_name'];
                $eligibilityCert_store = "uploads/".$eroll."_".$eligibilityCert;

                move_uploaded_file($eligibilityCert_temp,$eligibilityCert_store);
            }
?>