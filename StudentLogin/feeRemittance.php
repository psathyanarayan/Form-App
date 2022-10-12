<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $fee = $_FILES['c2']['name'];
                $fee_type = $_FILES['c2']['type'];
                $fee_size = $_FILES['c2']['size'];
                $fee_temp = $_FILES['c2']['tmp_name'];
                $fee_store = "uploads/".$eroll."_".$fee;

                move_uploaded_file($fee_temp,$fee_store);
            }
?>