<?php

require_once(__DIR__ . '/../private/initialize.php');

$categoryid = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Shopix - Startseite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/custom.css">

</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Shopix by Y.S</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Home</a>
        <a class="p-2 text-dark" href="#">T-Shirt</a>
        <a class="p-2 text-dark" href="#">Jacken</a>
        <a class="p-2 text-dark" href="#">Hosen</a>
    </nav>
    <a class="btn btn-outline-primary" href="#"><?php echo $categoryid; ?></a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Shopix</h1>
    <p class="lead"></p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">

        <?php

        $pro = new products();
        $products = $pro->getProductsByCategoryId((int)$categoryid);
        foreach ($products as $product) {

                    ?>

                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">

                                <?php echo $product[$categoryid]['name'];
                                echo "<br>";

                                ?>

                            </h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small class="text-muted"></small></h1>
                            <ul>
                                <li><?php echo $product[$categoryid]['name']; ?></li>
                            </ul>
                            <ul>
                                <li><?php echo $product[$categoryid]['designation']; ?></li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Buy</button>
                        </div>
                    </div>

                <?php
        }
        ?>

