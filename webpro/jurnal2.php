<?php
$menu = [
    [
        "menu" => "Nasi Goreng",
        "harga" => 25000,
        "quantity" => 5,
    ],
    [
        "menu" => "Ayam Geprek",
        "harga" => 20000,
        "quantity" => 8,
    ],
    [
        "menu" => "Mie Ayam",
        "harga" => 18000,
        "quantity" => 6,
    ],
];

function totalHarga($arr)
{
    $total = 0;
    foreach ($arr as $item) {
        $total += $item["harga"] * $item["quantity"];
    }
    return $total;
}

function ratarata($arr)
{
    return totalHarga($arr) / count($arr);
}

function lebih($arr)
{
    $nArr = [];
    foreach ($arr as $item) {
        $hasil = $item["harga"] * $item["quantity"];
        if ($hasil > 120000) {
            $nArr[] = [
                "menu" => $item["menu"],
                "harga" => $hasil,
            ];
        }
    }
    return $nArr;
}

echo "Total Pendapatan: Rp." . number_format(totalHarga($menu), 2, ",", ".") . "<br><br>";
echo "Rata-rata pendapatan per Menu: Rp." . number_format(ratarata($menu), 2, ",", ".") . "<br><br>";
echo "Manu dengan pendapatan lebih dari Rp.120.000:<br><br>";
foreach (lebih($menu) as $item) {
    echo "- " . $item["menu"] . ": Rp." . number_format($item["harga"], 2, ",", ".") . "<br><br>";
}

?>
