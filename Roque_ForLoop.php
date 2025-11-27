<!-- Roque, Daryl John Clark Q.
    CYB-201
    6DWEB
    November 27, 2025 -->

<?php include 'header.php';?>

<h1>Lanterns of Love</h1>

<h2>In the spirit of love, joy, and hope for the season,<br>
    each purchase of our Php 110 lanterns would require 5% donations for charity.</h2>


<?php
$lan_price = 110.00;

for ($i=1; $i <= 8; $i++){
    $lan_init = $lan_price * $i;
    $lan_charity =  $lan_init * 0.05;
    $lan_final = $lan_charity + $lan_init;
    ?>

    <p><?=$i;?> Lantern/s cost Php <?=$lan_final;?>,<br>
    giving Php<?=$lan_charity;?> for charity.</p>
    <?php }
    ?>
</p>
<?php include 'footer.php';?>