<!-- Roque, Daryl John Clark Q.
    CYB-201
    6DWEB
    November 27, 2025 -->

<?php include 'header.php';?>

<h1>Branches</h1>

<h2>Take a look at our branch nearest to you as well their operation time.</h2>

<?php
$branch = 'San Fernando';

$add_time = match($branch) {
    'San Fernando' => 'Main branch located at SM Pampanga Annex A Building | 10AM-9PM',
    'Angeles City' => 'Store branch located at Newpoint Mall, 2nd Floor | 9AM-8PM',
    'Mabalacat City' => 'Store branch located at Jumbo Jenra Dau | 10AM-8PM',
    'Magalang' => 'Kiosk branch located at Puregold San Francisco | 9AM-8PM',
    'Porac' => 'Kiosk branch located at Porac Public Market | 12NN-8PM',
}
?>

<p>
Location: <?=$branch?><br>
Nearest Branch: <?=$add_time?>
</p>



<?php include 'footer.php';?>