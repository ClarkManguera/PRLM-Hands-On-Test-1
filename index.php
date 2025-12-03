<?php
$username = "Clark";
$greeting = "Hello, " . $username . "!";
$offer = ["Milk Tea", 5, 80, 60];
$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $usual_price - $offer_price;
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <?php require "includes/header.php"; ?>
    <img src="logo.png" alt="Cardo" style="display: block; margin: 0 auto;">

    <div class="circle">
        Save ₱<?= $saving ?>
    </div>

    <div class="container">
    <h1><?= $greeting ?></h1>

    <p>
        Buy <b><?= $offer[1] ?></b> packs of <b><?= $offer[0] ?></b><br>
        <strong>Discounted Price: ₱</strong><?= $offer_price ?><br>
        <strong>Original Price: ₱</strong><?= $usual_price ?>
</p>
</div>

<?php require "includes/footer.php"; ?>
</body>
</html>

