<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $twelveth = $_FILES['c6']['name'];
                $twelveth_type = $_FILES['c6']['type'];
                $twelveth_size = $_FILES['c6']['size'];
                $twelveth_temp = $_FILES['c6']['tmp_name'];
                $twelveth_store = "uploads/".$eroll."_".$twelveth;

                move_uploaded_file($twelveth_temp,$twelveth_store);
            }
?>