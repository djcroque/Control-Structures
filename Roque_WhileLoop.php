<!-- Roque, Daryl John Clark Q.
    CYB-201
    6DWEB
    November 27, 2025 -->

<?php include 'header.php';?>

<h1>Batirul Promo</h1>

<h2>Here is our price index for Suklating Batirul, a Kapampangan Christmas Favorite! <br>
    While costing Php 65 each, a 10% discount would be put in the spirit of the holidays.</h2>


<?php
$bat_quantity = 1;
$bat_price = 65.0;

while ($bat_quantity <= 12) {
    $bat_quantity.' cup/s equals Php';
    $bat_init = $bat_quantity * $bat_price;
    $bat_final = $bat_init * 0.90;
    $bat_final; 
    ?>

    <p><?=$bat_quantity; ?> cup/s equals Php <?=$bat_final; ?></p>

    <?php $bat_quantity++;
}
?>
</p>
<?php include 'footer.php';?>