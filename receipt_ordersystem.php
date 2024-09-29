<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .receipt {
            border: 1px solid #000;
            padding: 20px;
            width: 300px;
            margin: 20px auto;
        }
        .receipt p {
            font-size: 16px;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <h2>Receipt</h2>
        <?php

        $item = htmlspecialchars($_POST['item']);
        $quantity = (int)$_POST['quantity'];
        $cash = (float)$_POST['cash'];

        $prices = array(
            "Burger" => 50.00,
            "Fries" => 75.00,
            "Steak" => 150.00
        );

        $total_cost = $prices[$item] * $quantity;
        $change = $cash - $total_cost;

       
        $timestamp = date("Y-m-d H:i:s");

       
        echo "<p><b>Date & Time:</b> $timestamp</p>";

        if ($change >= 0) {
            echo "<p><b>Item:</b> $item</p>";
            echo "<p><b>Quantity:</b> $quantity</p>";
            echo "<p><b>Total Cost:</b> PHP " . number_format($total_cost, 2) . "</p>";
            echo "<p><b>Cash:</b> PHP " . number_format($cash, 2) . "</p>";
            echo "<p><b>Change:</b> PHP " . number_format($change, 2) . "</p>";
            echo "<p>Thank you for your order!</p>";
        } else {
            
            echo "<p class='error'>The Sorry the balance is not enough,please try again. " . abs(number_format($change, 2)) . " more.</p>";
        }
        ?>
    </div>
</body>
</html>
