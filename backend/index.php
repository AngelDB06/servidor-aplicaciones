<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Basic routing based on 'action' parameter
$action = $_GET['action'] ?? 'info';

if ($action === 'categories') {
    $categories = [
        ["slug" => "electronics", "name" => "Electrónica"],
        ["slug" => "home-decoration", "name" => "Decoración"],
        ["slug" => "beauty", "name" => "Belleza"]
    ];
    echo json_encode($categories);
    exit;
}

// Default info / promo action
$response = [
    "site_status" => "active",
    "promo_message" => "¡Especial de PHP! 20% de descuento en todos los productos electrónicos.",
    "featured_category" => "electronics",
    "timestamp" => date("Y-m-d H:i:s"),
    "server_info" => "PHP " . phpversion() . " running on Apache"
];

echo json_encode($response);
?>
