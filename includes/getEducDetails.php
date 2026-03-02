<?php
include "dbh.inc.php";

$sql = "SELECT * FROM educ_cert ORDER BY educ_date DESC";
$educresult = mysqli_query($conn, $sql);

$educ = []; // global reusable variable

while ($row = mysqli_fetch_assoc($educresult)) {
    $educ[] = $row;
}
