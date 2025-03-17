<?php 
// Include database connection configuration
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Product Search Engine</title>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript with defer to load after HTML -->
    <script src="script.js" defer></script>
</head>
<body>
    <!-- Main wrapper for centering content -->
    <div class="search-wrapper">
        <!-- Main heading with search icon -->
        <h2>🔍 Product Search Engine</h2>
        
        <!-- Search and filters container -->
        <div class="search-container">
            <!-- Main search input -->
            <input type="text" 
                   id="search-box" 
                   placeholder="Search for products..." 
                   autocomplete="off">
            
            <!-- Filters section with brand and sort options -->
            <div class="filters">
                <!-- Brand filter group -->
                <div class="filter-group">
                    <h3>📌 Filter by Brand</h3>
                    <select id="brand-filter">
                        <option value="">All Brands</option>
                        <option value="Apple">Apple</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Sony">Sony</option>
                    </select>
                </div>

                <!-- Sort options group -->
                <div class="filter-group">
                    <h3>🔽 Sort By</h3>
                    <select id="sort-order">
                        <option value="name ASC">Name (A-Z)</option>
                        <option value="name DESC">Name (Z-A)</option>
                        <option value="price ASC">Price (Low to High)</option>
                        <option value="price DESC">Price (High to Low)</option>
                    </select>
                </div>
            </div>

            <!-- Reset button for all filters -->
            <button id="clear-filters">🔄 Clear All Filters</button>
        </div>

        <!-- Dynamic results container -->
        <div id="results"></div>
    </div>
</body>
</html>
