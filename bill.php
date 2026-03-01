<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: logout.php"); // Redirect to the login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bill</title>
  <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .row {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .col-lg-12 {
        width: 100%;
        box-sizing: border-box;
    }

    .text-center {
        text-align: center;
    }

    .border {
        border: 1px solid #ddd;
    }

    .rounded {
        border-radius: 5px;
    }

    .bg-light {
        background-color: #f8f9fa;
    }

    .my-5 {
        margin-top: 5em;
        margin-bottom: 5em;
    }

    h2 {
        margin-top: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .p-4 {
        padding: 1.5rem;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }
  </style>
</head>
<body>
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h2>Order Summary</h2>
        </div>

        <div class="col-lg-12">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Medicine Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $name = $_GET['name'] ?? '';
$phno = $_GET['phno'] ?? '';
$addr = $_GET['addr'] ?? '';

                    $grandTotal = 0;
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            echo "
                            <tr>
                                <td>{$value['med']}</td>
                                <td>{$value['quantity']}</td>
                                <td>{$value['price']}</td>
                                <td>{$value['quantity']} * {$value['price']}</td>

                            </tr>
                            ";
                            
                            $grandTotal += $value['quantity'] * $value['price'];
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-lg-12">
            <div class="border bg-light rounded p-4">
                <h4>Customer Information:</h4>
                <p><strong>Full Name:</strong> <?php echo htmlspecialchars($name); ?></p>
<p><strong>Phone:</strong> <?php echo htmlspecialchars($phno); ?></p>
<p><strong>Address:</strong> <?php echo htmlspecialchars($addr); ?></p>

                
                <h4 class="mt-4">Grand Total: <?php echo $grandTotal; ?></h4>
                <form action="logout.php" method="post">
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            var grandTotal = <?php echo $grandTotal; ?>;
            var grandTotalElement = document.querySelector('.mt-4');

            grandTotalElement.innerText = 'Grand Total: ' + grandTotal;
        });
    </script>
</body>
</html>