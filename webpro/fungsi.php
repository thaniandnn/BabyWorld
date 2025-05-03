<?php
function sayHello($name)
{
    echo "Hello $name";
}
sayHello("Noval <br>");

function penjumlahan($a, $b)
{
    return $a + $b;
}

echo penjumlahan(5, 5) . "<br>";

$arrMhs = [
    "nim" => "607012400121",
    "nama" => "Noval Adiprasetya",
];

echo $arrMhs["nim"] . "<br>";
print_r($arrMhs);
echo "<br>";
var_dump($arrMhs);

?>
