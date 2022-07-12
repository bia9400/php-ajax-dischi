<?php 
require_once "../database.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.css' integrity='sha512-F5fn88UDJWd0T1GwpnIpbuFuSxCgXNnJhIihkiWeqYUyLt3oPUaYzL774VjL7eGj8ktZCZQS//txAxgokiz1Lw==' crossorigin='anonymous'/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($usersData as $user){?>
        <h1><?php echo $user["title"] ?></h1>
        <h4><?php echo $user["artist"] ?></h4>
        <p><?php echo $user["annoDisco"] ?></p>
    
   <?php }?>
</body>
</html>