<?php
include "dbh.inc.php";

$sql = "SELECT * FROM main_details";
$userresult = mysqli_query($conn, $sql);

$users = []; // global reusable variable

while ($row = mysqli_fetch_assoc($userresult)) {
    $users[] = $row;
}
