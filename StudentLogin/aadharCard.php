<?php
            include($_SERVER['DOCUMENT_ROOT'].'/StudentLogin/db.php');

            if(isset($_POST['submit']))
            {
                $aadharCard = $_FILES['c13']['name'];
                $aadharCard_type = $_FILES['c13']['type'];
                $aadharCard_size = $_FILES['c13']['size'];
                $aadharCard_temp = $_FILES['c13']['tmp_name'];
                $aadharCard_store = "uploads/".$eroll."_".$aadharCard;

                move_uploaded_file($aadharCard_temp,$aadharCard_store);
            }
?>