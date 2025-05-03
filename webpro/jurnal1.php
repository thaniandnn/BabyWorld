<?php

echo "<ol>
            <li>3.50 - 4.0 = Cumlaude</li>
            <li>3.00 - 3.49 = Sangar Memuaskan</li>
            <li>2.50 - 2.99 = Memuaskan</li>
            <li>2.00 - 2.49 = Cukup</li>
            <li> &lt; 2.00 = Tidak Lulus</li>
        </ol>";

$ipk = 3.48;

if ($ipk >= 3.5 && $ipk <= 4.0) {
    echo "Cumlaude";
} elseif ($ipk >= 3.0 && $ipk <= 3.49) {
    echo "Sangant Memuaskan";
} elseif ($ipk >= 2.5 && $ipk <= 2.99) {
    echo "Memuaskan";
} elseif ($ipk >= 2.0 && $ipk <= 2.49) {
    echo "Cukup";
} else {
    echo "Tidak Lulus";
}
?>

<!--
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Title</title>
    </head>
    <body>
        <ol>
            <li>3.50 - 4.0 = Cumlaude</li>
            <li>3.00 - 3.49 = Sangar Memuaskan</li>
            <li>2.50 - 2.99 = Memuaskan</li>
            <li>2.00 - 2.49 = Cukup</li>
            <li> &lt; 2.00 = Tidak Lulus</li>
        </ol>
    </body>
</html>
-->
