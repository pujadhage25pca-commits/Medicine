<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "medicare");

// Check database connection
if (mysqli_connect_error()) {
    echo "<script>
            alert('Cannot connect to the database: " . mysqli_connect_error() . "');
            window.location.href='maincart.php';
          </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['purchase'])) {
    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
        echo "<script>
                alert('Please login before making a purchase');
                window.location.href='login.php'; // Adjust the login page URL
              </script>";
        exit();
    }

    // Extract purchase details from the form
    $name = $_POST['name'];
    $phno = $_POST['phno'];
    $addr = $_POST['addr'];
    $paymode = $_POST['paymode'];

    // Start a transaction
    mysqli_begin_transaction($conn);

    // Insert into ordermanager table
    $query1 = "INSERT INTO `ordermanager` (`name`, `phno`, `addr`, `paymode`) VALUES (?, ?, ?, ?)";
    $stmt1 = mysqli_prepare($conn, $query1);

    if (!$stmt1) {
        handleDatabaseError(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt1, "ssss", $name, $phno, $addr, $paymode);

    if (!mysqli_stmt_execute($stmt1)) {
        handleDatabaseError(mysqli_stmt_error($stmt1));
    }

    $orderId = mysqli_insert_id($conn);

    // Insert into orderdetails table
    if (isset($_SESSION['cart'])) {
        $query2 = "INSERT INTO `orderdetails` (`order_id`, `med`, `price`, `quantity`) VALUES (?, ?, ?, ?)";
        $stmt2 = mysqli_prepare($conn, $query2);

        if (!$stmt2) {
            handleDatabaseError(mysqli_error($conn));
        }

        foreach ($_SESSION['cart'] as $value) {
            mysqli_stmt_bind_param($stmt2, "isii", $orderId, $value['med'], $value['price'], $value['quantity']);

            if (!mysqli_stmt_execute($stmt2)) {
                handleDatabaseError(mysqli_stmt_error($stmt2));
            }

            // Deduct stock for each product in the order
            $productId = $value['med'];
            $quantityPurchased = $value['quantity'];
            
            // Update stock quantity in the database
            $queryUpdateStock = "UPDATE `product_size_variation` SET `quantity_in_stock` = `quantity_in_stock` - ? WHERE `variation_id` = ?";
            $stmtUpdateStock = mysqli_prepare($conn, $queryUpdateStock);

            if (!$stmtUpdateStock) {
                handleDatabaseError(mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmtUpdateStock, "ii", $quantityPurchased, $productId);

            if (!mysqli_stmt_execute($stmtUpdateStock)) {
                handleDatabaseError(mysqli_stmt_error($stmtUpdateStock));
            }

            mysqli_stmt_close($stmtUpdateStock);
        }

        // Close the statement after all executions
        mysqli_stmt_close($stmt2);
    }

    // Commit the transaction
    mysqli_commit($conn);

    // Redirect to the bill page
    echo "<script>
            alert('Order placed successfully');
             window.location.href='bill.php?name=$name&phno=$phno&addr=$addr';
          </script>";
} else {
    // Invalid purchase request
    echo "<script>
            alert('Invalid purchase request');
            window.location.href='maincart.php';
          </script>";
}

// Function to handle database errors
function handleDatabaseError($errorMessage) {
    mysqli_rollback($conn); // Rollback the transaction
    echo "<script>
            alert('Database error: $errorMessage');
            window.location.href='maincart.php';
          </script>";
    exit();
}
?>
