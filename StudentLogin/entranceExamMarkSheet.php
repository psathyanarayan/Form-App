<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $entranceMarkSheet = $_FILES['c4']['name'];
                $entranceMarkSheet_type = $_FILES['c4']['type'];
                $entranceMarkSheet_size = $_FILES['c4']['size'];
                $entranceMarkSheet_temp = $_FILES['c4']['tmp_name'];
                $entranceMarkSheet_store = "uploads/".$eroll."_".$entranceMarkSheet;

                move_uploaded_file($entranceMarkSheet_temp,$entranceMarkSheet_store);
            }
?>