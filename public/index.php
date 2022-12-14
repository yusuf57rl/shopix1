<?php

require_once(__DIR__ . '/../private/initialize.php');

$filename1 = "products.php?id=1";
$filename2 = "products.php?id=2";
$filename3 = "products.php?id=3";
?>

<html lang="en">
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
    <h1>&nbsp; Shopix</h1>

    <div class="space"></div>
    <div class="space"></div>
    <div class="buttonzsm">
        <a href="<?php echo $filename1; ?>">&nbsp;<button class="button-3">
                <h2> Jacken &nbsp;</h2>
            </button></a>
            <div class="space"></div>
        <a href="<?php echo $filename2; ?>">&nbsp;
        <button class="button-3">
                <h2> Hosen &nbsp;</h2>
            </button></a>
            <div class="space"></div>
        <a href="<?php echo $filename3; ?>">&nbsp;
            <button class="button-3">
                <h2> T-Shirts &nbsp; </h2>
            </button></a>
            <div class="space"></div>


    </div>
</section>



<p class="copyright"><strong>&nbsp; &copy; Y. Senel &nbsp; - &nbsp;</strong> <a href="#">Impressum &nbsp;</a> | <a href="#">&nbsp; Datenschutzerkl√§rung</a> | <a href="#">&nbsp; AGB</a> </p>

<div class="cursor"></div>
<div class="cursor2"></div>


</body>
<script src="style/mouse.js"></script>

</html>
