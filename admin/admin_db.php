<?php

include('connection.php');

function insert_product(){
    
    global $db;
    
    $query = "INSERT INTO product (description, item_price, SKU, image) VALUES ('".$_POST['description']."', '".$_POST['item_price']."',  '".$_POST['SKU']."', '".$_POST['image']."')";
    
    $result = $db->query($query);
    
//insert info into table
}

/*function delete_product(){
    global $db;
    $query = "DELETE FROM products WHERE id= '" . $_POST['image']. "'";
    $result = $db->query($query);
} */
/*function get_product(){
    global $db;
    //$query = "SELECT messages.id AS msg_id, messages.message, users.username 
               // FROM likes LEFT JOIN users ON users.id = messages.user_id";
    
    $query = "SELECT images.path, images.title FROM images LEFT JOIN users ON users.id = images.user_id";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}
*/ 
?>