<?php
$appname = getenv('AppName', true) ?: getenv('AppName');
$servername = "db";
$username = "user";
$password = "Password!";
$dbname = "estore";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?php echo $appname; ?></title>
</head>
<body>
<?php

$sql = "SELECT idproducts, product_name, image_uri, Quant FROM products";
$resultset = $conn->query($sql);
while( $record = mysqli_fetch_assoc($resultset) ) {
    ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo $record['image_uri']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $record['product_name']; ?></h5>
            <p class="card-text"><?php echo $record['Quant']; ?></p>
        </div>
    </div>
<?php } ?>
</body>
</html>
