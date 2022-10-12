<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $pdf = $_FILES['memo']['name'];
                $pdf_type = $_FILES['memo']['type'];
                $pdf_size = $_FILES['memo']['size'];
                $pdf_temp = $_FILES['memo']['tmp_name'];
                $pdf_store = "uploads/".$eroll."_".$pdf;

                move_uploaded_file($pdf_temp,$pdf_store);
            }
?>