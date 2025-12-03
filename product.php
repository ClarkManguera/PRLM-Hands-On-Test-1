<?php
$name = "Clark";
$greeting = "Hello!";
if (!empty($name)) {
    $greeting = "Hello, " . $name . "!";
}

$product = "Milk Tea";
$cost = 10;

$totals = [];
for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i;
    $discount = ($cost / 100) * ($i * 4);
    $totals[$i] = $subtotal - $discount;
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $product ?> Prices</title>
        <link rel="stylesheet" href="css/style.css">
        </head>
    <body>
        <?php require "includes/header.php"; ?>
        <div class="container">
                <img src="logo.png" alt="Cardo" style="display: block; margin: 0 auto;">

            <h2><?= $greeting ?></h2>
            <h3>Product: <?= $product ?></h3>
            <table>
                <tr>
                    <th>Quantity</th>
                    <th>Price w/ Discount</th>
                </tr>
                
                <?php
                for ($q = 1; $q <= 15; $q++) {
                    if ($q == 1) {
                        $label = "pack";
                    } else {
                        $label = "packs";
                    }
                    ?>
                    <tr>
                        <td><?= $q . " " . $label ?></td>
                        <td>₱<?= number_format($totals[$q], 2) ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

<?php require "includes/footer.php"; ?>

</body>
</html>