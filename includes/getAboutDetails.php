<?php
include "dbh.inc.php";

$sql = "SELECT * FROM portfolio_about";
$result = mysqli_query($conn, $sql);

$about = []; // global reusable variable

while ($row = mysqli_fetch_assoc($result)) {
    $about[] = $row;
}
