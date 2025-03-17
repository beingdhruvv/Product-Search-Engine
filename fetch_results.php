<?php
/**
 * Product Search Results Handler
 * 
 * This script handles the server-side processing of product search requests.
 * It performs database queries based on search terms, filters, and sorting preferences,
 * then returns formatted HTML results.
 */

// Include database connection
include 'db_connect.php';

// Sanitize and collect input parameters with defaults
$input = [
    'search' => isset($_GET['search']) ? trim($_GET['search']) : '',
    'brand' => isset($_GET['brand']) ? trim($_GET['brand']) : '',
    'sort' => isset($_GET['sort']) ? trim($_GET['sort']) : 'name ASC'
];

// Build base query for product search
// Uses parameterized queries for security
$sql = "SELECT * FROM products WHERE (name LIKE ? OR description LIKE ?)";
$params = ["%{$input['search']}%", "%{$input['search']}%"];

// Add brand filter if specified
if ($input['brand']) {
    $sql .= " AND brand = ?";
    $params[] = $input['brand'];
}

// Validate and apply sorting
// Whitelist of allowed sort orders to prevent SQL injection
$allowed_sort = ['name ASC', 'name DESC', 'price ASC', 'price DESC'];
$sql .= " ORDER BY " . (in_array($input['sort'], $allowed_sort) ? $input['sort'] : 'name ASC');

try {
    // Prepare and execute the query with error handling
    $stmt = $conn->prepare($sql) ?: throw new Exception("Query preparation failed: {$conn->error}");
    $stmt->bind_param(str_repeat('s', count($params)), ...$params);
    $stmt->execute() ?: throw new Exception("Query execution failed: {$stmt->error}");
    $result = $stmt->get_result();

    // Process and display results
    if ($result->num_rows > 0) {
        // Display result count
        $count = $result->num_rows;
        echo "<div class='results-count'>Found {$count} " . ($count === 1 ? "product" : "products") . "</div>";
        
        // Loop through results and generate product cards
        while ($row = $result->fetch_assoc()) {
            // Sanitize output to prevent XSS
            $name = htmlspecialchars($row['name']);
            $desc = htmlspecialchars($row['description']);
            
            // Highlight search terms if search is active
            if ($input['search']) {
                $pattern = '/(' . preg_quote($input['search'], '/') . ')/i';
                $name = preg_replace($pattern, '<mark>$1</mark>', $name);
                $desc = preg_replace($pattern, '<mark>$1</mark>', $desc);
            }

            // Output product card with formatted price and brand
            echo "<div class='result'>
                    <strong>{$name}</strong>
                    <div class='price'>" . number_format($row['price'], 2) . "</div>
                    <small>{$desc}</small>
                    <em>🏷️ {$row['brand']}</em>
                  </div>";
        }
    } else {
        // No results found
        echo "<div class='error'>No products found matching your criteria</div>";
    }
} catch (Exception $e) {
    // Handle and display any errors
    echo "<div class='error'>An error occurred: " . htmlspecialchars($e->getMessage()) . "</div>";
} finally {
    // Clean up database resources
    isset($stmt) && $stmt->close();
    $conn->close();
}
?>
