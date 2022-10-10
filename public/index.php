<?php

require_once('../private/initialize.php');
$categorie = $_GET["cd"];
$productid = $_GET["id"];


?><?php
$filename1 = "products.php?id=1";
$filename2 = "products.php?id=2";
$filename3 = "products.php?id=3";
?>

<html>
<head>

    <meta charset="UTF-8">
    <title>Shopix</title>

    <link rel="stylesheet" href="style/custom.css">

</head>
<body>
<canvas id="c"></canvas>
<script src="style/matrix.js"></script>

<!-- <div class="background"></div> -->

<section class="buttons">
    <br>
    <h1>OOP Project 1</h1>

    <div class="space"></div>
    <div class="space"></div>
    <div class="buttonzsm">
        <a href="<?php echo $filename1; ?>" target="_blank">&nbsp;<button class="button-3">
                <h2> Jacken &nbsp;</h2>
            </button></a>
            <div class="space"></div>
        <a href="<?php echo $filename2; ?>" target="_blank">&nbsp;
        <button class="button-3">
                <h2> Hosen &nbsp;</h2>
            </button></a>
            <div class="space"></div>
        <a href="<?php echo $filename3; ?>" target="_blank">&nbsp;
            <button class="button-3">
                <h2> T-Shirts &nbsp; </h2>
            </button></a>
            <div class="space"></div>


    </div>
</section>



<p class="copyright"><strong>&nbsp; &copy; Y. Senel &nbsp; - &nbsp;</strong> <a href="#">Impressum &nbsp;</a> | <a href="#">&nbsp; Datenschutzerklärung</a> | <a href="#">&nbsp; AGB</a> </p>

<div class="cursor"></div>
<div class="cursor2"></div>


</body>
<script src="style/mouse.js"></script>

</html>
