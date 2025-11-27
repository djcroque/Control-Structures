<!-- Roque, Daryl John Clark Q.
    CYB-201
    6DWEB
    November 27, 2025 -->

<?php include 'header.php';?>

<h1>Are you a patron?</h1>

<h2>Visiting our shop at least 7 times makes you
    eligible for a membership card!
</h2>

<p>
<?php
$visit_times = 9;

echo 'Visit Times: '.$visit_times;
?>
<br>
<?php
if ($visit_times >= 7){
    echo 'Congratulations! You could get a PREMIUM CALAM Card!';
}
else {
    echo 'You have yet to qualify for a membership card.';
}
?>
</p>




<?php include 'footer.php';?>