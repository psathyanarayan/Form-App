<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $passPhoto = $_FILES['c12']['name'];
                $passPhoto_type = $_FILES['c12']['type'];
                $passPhoto_size = $_FILES['c12']['size'];
                $passPhoto_temp = $_FILES['c12']['tmp_name'];
                $passPhoto_store = "uploads/".$eroll."_".$passPhoto;

                move_uploaded_file($passPhoto_temp,$passPhoto_store);
            }
?>