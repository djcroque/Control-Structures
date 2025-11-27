<!-- Roque, Daryl John Clark Q.
    CYB-201
    6DWEB
    November 27, 2025 -->

<?php include 'header.php';?>

<h1>Age Deals!</h1>

<h2>See the age deals you could avail for our Christmas shop!
</h2>

<p>
<?php
$age = 16;
?>
<?php
echo 'Age: '.$age.' years old';
?>
<br><br>
<?php
if ($age >= 120) {
    echo 'There are no available packages for this age group.';
}
else if ($age >= 100) {
    echo 'CENTENNARIAN DEAL.'; ?>
    <br>
<?php
    echo 'Buying Php 1,000 worth of items would give you a 50% discount, plus a free lantern!';
?>
<?php
}
else if ($age >= 60){
    echo 'SENIOR CITIZEN DEAL';
    ?>
<br>
<?php
    echo 'Aside from the 20% discount, you can get a free 5 meter Christmas light for a minimum purchase of Php 2,000.';
?>
<?php
}
else if ($age >= 18) {
    echo 'There are no available packages for this age group.';
}
else if ($age >= 7){
    echo 'CHILDREN\'S DEAL';
?>
<br>
<?php
    echo 'A minimum purchase of Php500 would give you a free Christmas food pack!';
}
?>
</p>




<?php include 'footer.php';?>