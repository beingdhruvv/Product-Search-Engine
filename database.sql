CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    brand VARCHAR(50) NOT NULL
);

INSERT INTO products (name, description, price, brand) VALUES
('iPhone 13', 'Apple smartphone with A15 Bionic chip and Super Retina XDR display.', 799.99, 'Apple'),
('iPhone 14 Pro', 'Latest iPhone with A16 Bionic chip and ProMotion technology.', 999.99, 'Apple'),
('iPhone 15 Pro Max', 'Top-end Apple smartphone with titanium body and improved cameras.', 1199.99, 'Apple'),
('MacBook Air M2', 'Thin and light laptop with Apple’s M2 chip and 18-hour battery.', 1299.99, 'Apple'),
('MacBook Pro 16-inch', 'Professional-grade Apple laptop with M3 Max chip.', 2399.99, 'Apple'),
('iPad Pro 12.9-inch', 'Apple’s most powerful tablet with M2 chip and Liquid Retina XDR display.', 1099.99, 'Apple'),
('iPad Mini 6', 'Compact and powerful iPad with A15 Bionic chip.', 499.99, 'Apple'),
('Apple Watch Ultra', 'Rugged smartwatch for extreme activities with advanced GPS.', 799.99, 'Apple'),
('AirPods Pro 2', 'Noise-canceling wireless earbuds with spatial audio.', 249.99, 'Apple'),
('HomePod 2nd Gen', 'Apple smart speaker with immersive sound and Siri integration.', 299.99, 'Apple');

INSERT INTO products (name, description, price, brand) VALUES
('Samsung Galaxy S23 Ultra', 'Samsung’s flagship phone with a 200MP camera and S Pen support.', 1199.99, 'Samsung'),
('Samsung Galaxy Z Flip 5', 'Foldable smartphone with an improved hinge and Flex Mode.', 999.99, 'Samsung'),
('Samsung Galaxy Z Fold 5', 'Large foldable phone with a 7.6-inch inner display.', 1799.99, 'Samsung'),
('Samsung Galaxy Tab S9', 'High-performance Android tablet with AMOLED display.', 849.99, 'Samsung'),
('Samsung Galaxy Watch 6', 'Smartwatch with improved health tracking and Wear OS.', 349.99, 'Samsung'),
('Samsung Galaxy Buds 2 Pro', 'Premium wireless earbuds with active noise cancellation.', 229.99, 'Samsung'),
('Samsung 55-inch QLED TV', '4K Smart TV with Quantum Dot technology.', 999.99, 'Samsung');

INSERT INTO products (name, description, price, brand) VALUES
('Dell XPS 13', 'Compact and powerful ultrabook with Intel Core i7 processor.', 1299.99, 'Dell'),
('Dell XPS 15', 'Larger XPS laptop with NVIDIA graphics and OLED display.', 1899.99, 'Dell'),
('Dell Inspiron 15', 'Affordable everyday laptop with Intel Core i5.', 799.99, 'Dell'),
('Dell Alienware M15', 'Gaming laptop with NVIDIA RTX 4080 and 360Hz display.', 2499.99, 'Dell');

INSERT INTO products (name, description, price, brand) VALUES
('HP Spectre x360', 'Convertible laptop with OLED touchscreen and Intel Evo certification.', 1399.99, 'HP'),
('HP Pavilion 15', 'Budget-friendly laptop for students and office use.', 649.99, 'HP'),
('HP Omen 16', 'Gaming laptop with AMD Ryzen 9 and RTX 4070.', 1799.99, 'HP');

INSERT INTO products (name, description, price, brand) VALUES
('Sony PlayStation 5', 'Next-gen gaming console with 4K HDR and ultra-fast SSD.', 499.99, 'Sony'),
('Sony Bravia XR 75-inch', 'Premium 4K HDR smart TV with Google TV.', 2499.99, 'Sony'),
('Sony WH-1000XM5', 'Industry-leading noise-canceling wireless headphones.', 399.99, 'Sony'),
('Sony WF-1000XM4', 'Premium noise-canceling wireless earbuds.', 279.99, 'Sony');

INSERT INTO products (name, description, price, brand) VALUES
('Bose QuietComfort 45', 'Premium wireless noise-canceling headphones.', 329.99, 'Bose'),
('Razer BlackWidow V4', 'Mechanical gaming keyboard with RGB lighting.', 179.99, 'Razer'),
('Logitech MX Master 3', 'Advanced wireless mouse for productivity.', 99.99, 'Logitech'),
('Canon EOS R6', 'Mirrorless camera with 20MP sensor and dual pixel autofocus.', 2499.99, 'Canon'),
('Nikon Z6 II', 'Full-frame mirrorless camera with 24MP resolution.', 1999.99, 'Nikon'),
('GoPro HERO11 Black', 'Action camera with 5.3K video recording.', 499.99, 'GoPro'),
('DJI Mavic 3 Pro', 'Professional drone with Hasselblad camera and 4K video.', 2099.99, 'DJI'),
('Xbox Series X', 'Microsoft’s most powerful gaming console with 4K gaming support.', 499.99, 'Microsoft'),
('Nintendo Switch OLED', 'Gaming console with an enhanced OLED display.', 349.99, 'Nintendo');
