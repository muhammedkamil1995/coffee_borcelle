<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['coffee_type'], $_POST['quantity'])) {
        $coffeeType = $_POST['coffee_type'];
        $quantity = intval($_POST['quantity']);

        // Validate coffee type
        $validCoffeeTypes = ['americano', 'latte']; // Add more valid types as needed
        if (!in_array($coffeeType, $validCoffeeTypes)) {
            // Invalid coffee type
            $_SESSION['error'] = 'Invalid coffee type';
            header('Location: dashboard.php');
            exit();
        }

        // Validate quantity
        if ($quantity <= 0) {
            // Invalid quantity
            $_SESSION['error'] = 'Invalid quantity';
            header('Location: dashboard.php');
            exit();
        }

        // Process the order (you can customize this part based on your logic)
        $totalPrice = calculatePrice($coffeeType, $quantity);
        $orderDetails = [
            'coffee_type' => $coffeeType,
            'quantity' => $quantity,
            'total_price' => $totalPrice,
            'order_time' => date('Y-m-d H:i:s'),
        ];

        // Store the order details in session or database as needed
        storeOrder($orderDetails);

        // Redirect back to the dashboard or order history
        $_SESSION['success'] = 'Coffee order placed successfully!';
        header('Location: dashboard.php');
        exit();
    }
}

// Redirect in case of invalid request
header('Location: index.php');
exit();

// Helper function to calculate the price (customize based on your pricing logic)
function calculatePrice($coffeeType, $quantity)
{
    $priceMap = [
        'americano' => 2.50,
        'latte' => 3.00,
        // Add more coffee types and prices as needed
    ];

    return $priceMap[$coffeeType] * $quantity;
}

// Helper function to store the order details (customize based on your storage logic)
function storeOrder($orderDetails)
{
    if (!isset($_SESSION['coffee_orders'])) {
        $_SESSION['coffee_orders'] = [];
    }

    $_SESSION['coffee_orders'][] = $orderDetails;
}
?>