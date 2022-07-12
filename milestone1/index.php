<?php
require_once "../database.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.css' integrity='sha512-F5fn88UDJWd0T1GwpnIpbuFuSxCgXNnJhIihkiWeqYUyLt3oPUaYzL774VjL7eGj8ktZCZQS//txAxgokiz1Lw==' crossorigin='anonymous' />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="px-3">
        <div class="d-flex justify-content-between">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqueSuVfBOMjITRISUPtTYh5BDCxVD_5ec9Q&usqp=CAU" alt="" width="100px">
        </div>
    </nav>
    <main class="">
        <div class="container ">
            
            <div class="row row-cols-5 overflow-auto">

                <?php foreach ($usersData as $user) { ?>
                    <div class="col">
                        <div class="card text-center mt-3">
                            <img src="<?php echo $user["imgURL"] ?>" class="card-img-top m-auto" alt="..." / height="100px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $user["title"] ?></h5>
                                <p class="card-text">
                                    <?php echo $user["artist"] ?>
                                </p>
                                <p class="card-text">
                                    <?php echo $user["annoDisco"] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>


        </div>
    </main>

</body>

</html>