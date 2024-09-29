<!DOCTYPE html>
<html>
<head>
    <title>OrderTaker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left; 
        }
        .menu-table {
            border: 1px solid #000;
            border-collapse: collapse;
            width: 15%; 
            margin: 5px;
        }
        .menu-table th, .menu-table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table class="menu-table">
        <tr>
            <th>Order</th>
            <th>Amount (PHP)</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>₱50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>₱75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>₱150</td>
        </tr>
    </table>
    
    <form action="receipt_ordersystem.php" method="post">
        <label for="item">Choose your order:</label>
        <select id="item" name="item">
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select><br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>
        
        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" min="1" required><br><br>
        
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
