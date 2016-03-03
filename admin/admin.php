<?php
include("admin_db.php");

if ($_POST['method'] == "insert"){
    insert_product();
}

if ($_POST['method'] == "delete"){
   delete_product();
}

?>