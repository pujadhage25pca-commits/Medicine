<?php
session_start();
include 'db_conn.php'; // Include your database connection file

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Perform the search query based on medicine names
    $sql = "SELECT * FROM product WHERE product_name LIKE :query";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':query', '%' . $search_query . '%');
    $stmt->execute();

    $search_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your head content here -->
    <title>Search Results - Medicare</title>
    <style>
        /* Add this CSS to your existing style.css or create a new one */

body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.search_results {
    margin-top: 20px;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 15px;
    margin-bottom: 20px;
}

li strong {
    font-weight: bold;
    color: #333;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Optional: Add some spacing and styling for better readability */
h2 {
    margin-bottom: 20px;
}

p {
    margin: 0;
}

/* Optional: Add some responsive styling */
@media (max-width: 767px) {
    li {
        padding: 10px;
    }
}

    </style>
    <!-- Add your other head elements (CSS, meta tags, etc.) here -->
</head>

<body>
    <!-- Your existing HTML body content goes here -->

    <!-- Display search results -->
    <section class="search_results">
        <div class="container">
            <h2>Search Results for: <?php echo htmlspecialchars($search_query); ?></h2>

            <?php if (empty($search_results)) : ?>
                <p>No results found.</p>
            <?php else : ?>
                <ul>
                    <?php foreach ($search_results as $result) : ?>
                        <li>
                            <strong>Medicine Name:</strong> <?php echo $result['product_name']; ?>
                            <br>
                            <strong>Price:</strong> Rs <?php echo $result['price']; ?>

                            <!-- Buy Now form -->
                            <form action="cartmanage.php" method="post">
                                <div class="box">

              <div class="btn_container">
                                <input type="hidden" name="med_id" value="<?php echo $result['product_id']; ?>">
                                <input type="hidden" name="med" value="<?php echo $result['product_name']; ?>">
                                <input type="hidden" name="price" value="<?php echo $result['price']; ?>">
                                
                                <button type="submit" name="addcart" class="btn btn-info">
                                    Buy Now
                                </button>

                            </div>
                        </div>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>

    <!-- Your existing HTML body content goes here -->

    <!-- Add your footer content here -->
</body>

</html>
