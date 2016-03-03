<html>
    <head>
        <title>
            Images
        </title>
        <link rel="stylesheet" href="admin.css" type="text/css">
        <script src="https://use.typekit.net/gyh3ulh.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script src="https://use.typekit.net/gyh3ulh.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script src="https://use.typekit.net/gyh3ulh.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
    </head>
    
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js'></script>

    <body>
        <div id='insert'>
            <h2>Insert Products:</h2>
            <input type='text' id='description' placeholder= 'Product Title' />
            <input type='text' id='SKU' placeholder='Description' />
            <input type='text' id='item_price' placeholder='Product Price' />
            <input type='text' id='image' placeholder='Image URL' />
            <br><br>
            <button id='insertProduct'>Insert Product</button>
            <br><br>
        <div>

<?php

$dsn = "mysql:dbname=test";
$username = "root";
$password = "root";

try {

 $conn = new PDO( $dsn, $username, $password );

 $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

} catch ( PDOException $e ) {

 echo "Connection failed: " . $e->getMessage();

} 
$sql2 = "SELECT * FROM product";

echo "<table id='table' ><tr><th>ID</th><th>Product Name</th><th>Item Price</th><th>Description
</th><th>Image Address</th><th></th></tr>";

try {

 $rows2 = $conn->query( $sql2 );
 foreach ( $rows2 as $row2 ) {
 echo "<tr><td>" . $row2["ID"] . "</td><td>" . $row2["description"] . "</
td><td>" . $row2["item_price"] . "</td><td>" . $row2["SKU"] . "</td><td><img src='" . $row2["image"] . "'</img><td id='buttons'><button id='edit'>Edit</button><button id='delete'>X</button></td></td></tr>";
 }
    
} catch ( PDOException $e ) {
 echo "Query failed: " . $e->getMessage();

}

echo "</table>";
$conn = null;
?>
    </body>

    <script>
        
       
    $(document).ready(function(){
        document.getElementById("insertProduct").onclick = function(){
            $.ajax({
                url:"admin.php",
                type:"POST",
                dataType:"html",
                data: {
                    method:"insert",
                    description:document.getElementById("description").value,
                    image:document.getElementById("image").value,
                    item_price:document.getElementById("item_price").value,
                    SKU:document.getElementById("SKU").value    
                },
            success:function(resp){
                alert("Inserted!!");
                console.log(resp);
                
                }
            });
                
        }
     /*   
      document.getElementById("delete").onclick = function(){

            $.ajax({
                url:"admin.php",
                type:"POST",
                dataType:"html",
                data: {
                    method:"delete",
                    description:document.getElementById("description").value,
                    image:document.getElementById("image").value,
                    item_price:document.getElementById("item_price").value,
                    SKU:document.getElementById("SKU").value 
                },
            success:function(resp){
                alert("Deleted");
                console.log(resp);
                
                
                }
            });
        } */
});

       /* 
        $.ajax ({ 
            url:"admin.php",
            dataType:"json",
            type:"POST",
            data: {
                method:"getall"
                },
                success:function(resp){
                console.log(resp);
        
                for (var i = 0; i<resp.length; i++){
                    var h3 = document.createElement("h3");
                    h3.innerHTML = resp[i].description+ ':' + '<img src=' + resp[i].path + '>' + ' Price: ' + resp[i].item_price + ' Quantity: '+ resp[i].quantity;
                    h3.style.height = "20px";
                    document.body.appendChild(h3);
                }
            }
        });
    }); */
    </script>

</hmtl>