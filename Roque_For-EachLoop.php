<!-- Roque, Daryl John Clark Q.
    CYB-201
    6DWEB
    November 27, 2025 -->

<?php include 'header.php';?>

<h1>Christmas Items</h1>

<h2>Come see the items we have for you!</h2>


<?php
$items = [
    'Lanterns' => 'A glimmering sign of the holidays to come.',
    'Christmas Tree' => 'Make your children eager to get their presents under it!',
    'Nativity Scene' => 'Holier be your homes as we celebrate Christ\'s birth.',
    'Christmas Treats' => 'From Christmas cakes, mango grahams, to Filipino holiday
    delicacies!',
    'Christmas Lights' => 'Who would want to miss the lights dancing on the coldest nights?',
];
?>
<table>
<tr>
    <th>Christmas Item</th>
    <th>Description</th>
</tr>
<?php foreach ($items as $item => $description) { ?>
<tr>
    <td><?=$item?></td>
    <td><?=$description?></td>
</tr>
<?php
}
?>
</table>

<?php include 'footer.php';?>