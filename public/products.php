<?php

require_once('../private/initialize.php');

if(isset($_GET["id"])){
    $productid = $_GET["id"];
} else {
    $productid = 1;
    header('Location: index.php');
}
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
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Shopix</h1>
    <p class="lead"></p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">

    <?php
$cate = new categories();
$produktjs = $cate->clothes();

foreach($produktjs as $produktjss){
    if(array_key_exists(key: $productid, array: $produktjss)){

        ?>

        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?php echo $produktjss->name; ?></h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><small class="text-muted"></small></h1>
                <div class="space"></div>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">CLICK</button>
            </div>
        </div>

    <?php } else { echo "existiert leider nicht!";
    header('Location: index.php');
    }
    }?>

