<?php
include "dbh.inc.php";

$sql = "SELECT * FROM work_experience ORDER BY work_date_start DESC";
$workresult = mysqli_query($conn, $sql);

$work = []; // global reusable variable

while ($row = mysqli_fetch_assoc($workresult)) {
    $work[] = $row;
}
