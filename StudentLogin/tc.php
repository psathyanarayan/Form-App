<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $tc = $_FILES['c8']['name'];
                $tc_type = $_FILES['c8']['type'];
                $tc_size = $_FILES['c8']['size'];
                $tc_temp = $_FILES['c8']['tmp_name'];
                $tc_store = "uploads/".$eroll."_".$tc;

                move_uploaded_file($tc_temp,$tc_store);
            }
?>