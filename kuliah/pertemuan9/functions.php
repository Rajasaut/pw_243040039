<?php
// Koneksi ke Data Base
$conn = mysqli_connect("localhost", "root", "", "pw2024_243040039");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
