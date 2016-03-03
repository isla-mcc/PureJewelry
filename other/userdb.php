<?php
    include("../admin/connection.php");

    function get_user_by_username_password(){
        global $db;
        $query = "SELECT * FROM admin WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
        $result = $db->query($query);
        echo json_encode($result->fetchAll());
        
    }

    function update_user(){
        //update info from users from the users table
    }

    function delete_user(){
        //remove a row of user from the users table
    }


    //TESTING
    //insert_user();
?>