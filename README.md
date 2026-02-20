# Product Search Engine

A simple and efficient **Product Search Engine** built with PHP, JavaScript, and MySQL. This project allows users to search for products dynamically with filtering and sorting capabilities.

---

## About This Project

This project was developed as part of our **Diploma in Computer Engineering** learning journey, in collaboration with my classmate **Hena Patel**. It serves as a **beginner-level project** designed to understand and practice fundamental concepts of:

- **PHP**: Server-side scripting, handling HTTP requests, and database interactions
- **MySQL**: Database design, SQL queries, and data management
- **AJAX/JavaScript**: Asynchronous data fetching and dynamic DOM manipulation
- **Full-stack Integration**: Connecting frontend and backend components

As a learning project, this implementation focuses on demonstrating core web development concepts rather than production-ready features. It's an excellent starting point for students and beginners who want to understand how PHP and MySQL work together to create dynamic web applications.

---

## Key Features
- **Live Search**: Instantly search for products in real-time.
- **Filtering & Sorting**: Filter by brand and sort results dynamically.
- **Database Integration**: Fetch data from MySQL using PHP.
- **Responsive UI**: Modern, user-friendly interface with CSS.

---

## Screenshot
![Product Search Engine Screenshot](screenshot.png) 

---

## Dependencies
- PHP 7.x or higher
- MySQL Database
- Apache Server (XAMPP, WAMP, or MAMP)
- JavaScript (Vanilla JS)

---

## Project Structure
```
Product-Search-Engine/
│── database.sql           # Database schema
│── db_connect.php         # Database connection script
│── fetch_results.php      # Fetches search results dynamically
│── search.php             # Backend search logic
│── script.js              # JavaScript for live search and filters
│── style.css              # CSS for styling the UI
│── screenshot.png         # Project screenshot (Add this file)
│── .gitignore             # Excludes unnecessary files (optional)
│── README.md              # Project documentation
```

---

## Installation

### Step 1: Clone the Repository
```sh
git clone https://github.com/beingdhruvv/Product-Search-Engine.git
cd Product-Search-Engine
```

### Step 2: Set Up the Database
1. Create a MySQL database.
2. Import `database.sql` into your database.
3. Update `db_connect.php` with your database credentials.

### Step 3: Run the Project
- Ensure you have a local server (XAMPP, WAMP, or MAMP) running.
- Place the project folder inside the `htdocs` directory (or equivalent).
- Open `http://localhost/Product-Search-Engine/search.php` in your browser.

---

## Usage
1. Enter a keyword in the search box.
2. Use filters and sorting options to refine results.
3. View search results dynamically updated.

---

## How It Works

The application follows a client-server architecture:

1. **Frontend (Client-side)**: The user interface built with HTML, CSS, and JavaScript handles user interactions and sends AJAX requests to the server.

2. **Backend (Server-side)**: PHP scripts process the requests, query the MySQL database, and return JSON responses.

3. **Database**: MySQL stores product information including name, brand, price, and category.

4. **AJAX Communication**: JavaScript sends asynchronous requests to `fetch_results.php` without reloading the page, providing a seamless user experience.

### Workflow
- User types in search box → JavaScript captures input → AJAX request sent to PHP → PHP queries MySQL → Results returned as JSON → JavaScript updates DOM → User sees results

---

## File Descriptions

- **database.sql**: Contains the SQL schema and sample data for the products table
- **db_connect.php**: Establishes connection to MySQL database using mysqli
- **search.php**: Main frontend page with search interface and filters
- **fetch_results.php**: Backend API endpoint that processes search queries and returns JSON results
- **script.js**: Handles AJAX requests, DOM manipulation, and user interactions
- **style.css**: Stylesheet for the user interface

---

## Concepts Learned

Through building this project, I gained hands-on experience with:

- **PHP Fundamentals**: Variables, arrays, functions, and control structures
- **MySQL Database Operations**: Creating tables, INSERT/SELECT queries, and database connections
- **PHP-MySQL Integration**: Using `mysqli` to connect and query databases
- **AJAX Implementation**: Asynchronous HTTP requests using JavaScript's `XMLHttpRequest` or `fetch` API
- **Dynamic Content Loading**: Updating webpage content without page refresh
- **Form Handling**: Processing user input and search queries
- **SQL Query Building**: Constructing dynamic queries based on user filters
- **Frontend-Backend Communication**: Understanding the request-response cycle

This project helped solidify my understanding of how web applications work end-to-end, from user interaction to database retrieval and back to the user interface.

---

## Troubleshooting

### Common Issues

**Database Connection Error**
- Verify MySQL service is running
- Check credentials in `db_connect.php`
- Ensure database exists and is imported correctly

**No Results Showing**
- Check browser console for JavaScript errors
- Verify AJAX requests are reaching the server
- Ensure database contains sample data

**Page Not Loading**
- Confirm Apache server is running
- Check file paths are correct
- Verify PHP is properly installed

---

## Future Improvements

Potential enhancements for future versions:

- Add pagination for large result sets
- Implement user authentication and favorites
- Add product images and detailed views
- Include advanced search filters (price range, date added)
- Optimize database queries with indexing
- Add error handling and validation
- Implement responsive design for mobile devices
- Add unit tests for PHP functions

---

## Contributors

- **Dhruv Suthar** - [@beingdhruvv](https://github.com/beingdhruvv)
- **Hena Patel** - [@hena82](https://github.com/hena82)

This project was developed collaboratively as part of our Diploma in Computer Engineering coursework.

---

## Acknowledgments

Special thanks to our instructors and classmates who provided guidance and feedback during the development of this project. This learning experience helped us understand the fundamentals of web development and database management.

---

## License
This project is licensed under the **MIT License**. Feel free to modify and use it.

---

## Contact

For questions or suggestions, feel free to reach out:
- Dhruv Suthar: [GitHub](https://github.com/beingdhruvv)
- Hena Patel: [GitHub](https://github.com/hena82)
