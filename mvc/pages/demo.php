<?php include 'header.php'; ?>

<h1 style="font-family: 'cursive'" align="center"><b><u>ALL ACCOUNTS</u></b></h1>

<br>

<?php
    print utility\htmlTable::genarateTableFromMultiArra($data);
?>

<?php include 'footer.php'; ?>