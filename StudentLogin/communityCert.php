<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $communityCert = $_FILES['c11']['name'];
                $communityCert_type = $_FILES['c11']['type'];
                $communityCert_size = $_FILES['c11']['size'];
                $communityCert_temp = $_FILES['c11']['tmp_name'];
                $communityCert_store = "uploads/".$eroll."_".$communityCert;

                move_uploaded_file($communityCert_temp,$communityCert_store);
            }
?>