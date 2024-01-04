<?php
// Define the number of rows and columns for the table
$rows = 10;
$cols = 10;

// Create the multiplication table
echo "<table border='1'>";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $cols; $j++) {
        $result = $i * $j;
        echo "<td>$i x $j = $result</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>