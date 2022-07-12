<?php
require_once "../database.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.4/vue.js' integrity='sha512-LdhBTKne2GexKsxobRozOyU4IQDtrwPY0DR9p81jKXYg7g9yC8q2XSEe7GY9X2kcULCLntu6ZL49PI7xZ/0tfQ==' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.js' integrity='sha512-uplugzeh2/XrRr7RgSloGLHjFV0b4FqUtbT5t9Sa/XcilDr1M3+88u/c+mw6+HepH7M2C5EVmahySsyilVHI/A==' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.css' integrity='sha512-F5fn88UDJWd0T1GwpnIpbuFuSxCgXNnJhIihkiWeqYUyLt3oPUaYzL774VjL7eGj8ktZCZQS//txAxgokiz1Lw==' crossorigin='anonymous' />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <nav class="px-3">
            <div class="d-flex justify-content-between">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqueSuVfBOMjITRISUPtTYh5BDCxVD_5ec9Q&usqp=CAU" alt="" width="100px">
            </div>
        </nav>
        <main class="">
            <div class="container ">
                
                <div class="row row-cols-5 overflow-auto">

                   
                        <div v-for="user in listaProdotti" class="col">
                            <div class="card text-center mt-3">
                                <img :src="`${user.imgURL   }`" class="card-img-top m-auto" alt="..." / height="100px">
                                <div class="card-body">
                                    <h5 class="card-title">{{user.title}}</h5>
                                    <p class="card-text">
                                    {{user.artist}}
                                    </p>
                                    <p class="card-text">
                                    {{user.annoDisco}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    

                </div>
            </div>

    </div>
    </main>
<script src="../main.js"></script>
</body>

</html>