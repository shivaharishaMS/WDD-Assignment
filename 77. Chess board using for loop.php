
<?php
echo "<table border='1' cellspacing='0' cellpadding='10'>";
for($row = 1; $row <= 8; $row++){
    echo "<tr>";
    for($col = 1; $col <= 8; $col++){
        $color = ($row + $col) % 2 == 0 ? "white" : "black";
        echo "<td style='background-color:$color; width:50px; height:50px;'></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
