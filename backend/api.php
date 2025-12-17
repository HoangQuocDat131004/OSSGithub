<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$products = [
    ["id" => 1, "name" => "Laptop Gaming", "price" => 2000],
    ["id" => 2, "name" => "Chuột không dây", "price" => 20],
    ["id" => 3, "name" => "Bàn phím cơ", "price" => 50]
];

echo json_encode($products);
?>