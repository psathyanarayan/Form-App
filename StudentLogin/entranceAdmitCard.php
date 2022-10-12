<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $entrance = $_FILES['c3']['name'];
                $entrance_type = $_FILES['c3']['type'];
                $entrance_size = $_FILES['c3']['size'];
                $entrance_temp = $_FILES['c3']['tmp_name'];
                $entrance_store = "uploads/".$eroll."_".$entrance;

                move_uploaded_file($entrance_temp,$entrance_store);
            }
?>