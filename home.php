<html>
    <head>
        <title>
            Images
        </title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/home.css" type="text/css">
        <script src="https://use.typekit.net/gyh3ulh.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script src="https://use.typekit.net/gyh3ulh.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script src="https://use.typekit.net/gyh3ulh.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
    </head>
    
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js'></script>

    <body>
  <div>
      <div id="logo_div">
      <h1 id="logo">PJ</h1> 
      </div>
      <h1>Pure Jewellery</h1>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div>
    <nav id="navbar">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="other/pure_login.html">Admin</a></li>
                    <li><a href="shopping-cart/shopping-cart.html">Cart</a></li>
                </ul>
            </nav>

    </div>
    </div>

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


try {

 $rows2 = $conn->query( $sql2 );
 foreach ( $rows2 as $row2 ) {
 
     echo "<div id='everything'><div id='allitems'>
     <div id='image'><img id='productimg' src='" . $row2["image"] . "'></img></div>
     <div id='title'>" . $row2["description"] . "</div>
    <div id='price'>" . $row2["item_price"] . "</div>
    <div id='buttons'><button id='addtocart'>Add</button></div></div></div>";
 }
    
} catch ( PDOException $e ){
    echo "Query failed: " . $e->getMessage();
}



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